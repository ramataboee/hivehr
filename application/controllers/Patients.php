<?php
class Patients extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('Patient_model');
    $this->load->helper('url_helper');
    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->library('session');
  }
//register new HIV + Patient
public function add_patient(){
  //get form helper and validation library

      $clientid = $this->input->post('clientid');
      //load HTS model to get access to unhedid function
      $this->load->model('Hts_model');
      $unhexed_clientid = $this->Hts_model->unhexid($clientid);

      //get first entry health status
      $data['firstealth'] = array(
        'id' => '',
        'clientid' => $unhexed_clientid,
        'inh_start' => $this->input->post('inhstart'),
        'inh_stop' => $this->input->post('inhstop'),
        'ctx_start' => $this->input->post('ctxstart'),
        'ctx_stop' => $this->input->post('ctxstop'),
        'fca_start' => $this->input->post('fcastart'),
        'fca_stop' => $this->input->post('fcastop'),
        'tbrx_start' => $this->input->post('tbrx_start'),
        'tbrx_stop' => $this->input->post('tbrx_start'),
        'lost_to' => $this->input->post('lost_to'),
        'lost_to_date' => $this->input->post('losttodate'),
        'clinical_stage' => $this->input->post('clinical_stage'),
      );

      //insert into first entry health status, so that we get its ID for patient insert
      $firstentryhealthstatus_id = $this->Patient_model->add_multiple('firstentry_healthstatus',$data['firstealth']);
      //get patient personal information
        $data['patient'] = array(
          'clientid' => $unhexed_clientid,
          'clinicid' => $this->input->post('clinic'),
          'phone' => $this->input->post('phone'),
          'address' => $this->input->post('address'),
          'districtid' => $this->input->post('district'),
          'chiefid' => $this->input->post('chief'),
          'maritalstatus' => $this->input->post('marital_status'),
          'dateconfirmedhiv_positive' => $this->input->post('hiv_date'),
          'firstentry_healthstatusid' => $firstentryhealthstatus_id
        );
      //insert into patient
      $this->Patient_model->add('hivpatients',$data['patient']);
      $this->session->set_flashdata('clientid',$clientid);
      redirect(base_url('view_patient_profile'));

  }

  //view patients in pre-art status
  public function view_preart(){
    //get information from hivpattients and clients to display
    $condition = "hivpatients.clientid = clients.id AND ISNULL(hivpatients.artid)";
    $data['hivpatient'] = $this->Patient_model->patient_join_client($condition);

    //load view
    $this->load->view('templates/global/start_global_head');
    $this->load->view('templates/global/datatables_css');
    $this->load->view('templates/global/end_global_head');
    $this->load->view('templates/global/horizontal_nav');
    $this->load->view('templates/global/sidebar_nav');
    $this->load->view('pages/preart',$data);
    $this->load->view('templates/global/quickside_bar');
    $this->load->view('templates/global/start_global_footer');
    $this->load->view('templates/global/datatables_js');
    $this->load->view('templates/global/end_global_footer');
  }
  //view patient PROFILE
  public function view_patient_profile(){
    if(!empty($this->session->clientid)){
      $clientid = $this->session->clientid;
    }else{
      $clientid = $this->input->post('id');
    }

    //get patient information
    $condition = "hivpatients.clientid = clients.id AND hex(id) = '".$clientid."'";
    $data['patientinfo'] = $this->Patient_model->patient_join_client($condition);
    //get patient HTS record
   $this->load->model('Hts_model');
   $data['htsrecords'] = $this->Hts_model->get_client_hts($clientid);

    //get total hts visits
    $data['total_visits'] = count($data['htsrecords']);

    //get first recorded health status
    $data['firsthealth'] = $this->Patient_model->firststatus($clientid);

    //load view

    $this->load->view('templates/global/start_global_head');
    $this->load->view('templates/global/datatables_css');
    $this->load->view('templates/global/user_profile_css');
    $this->load->view('templates/global/end_global_head');
    $this->load->view('templates/global/horizontal_nav');
    $this->load->view('templates/global/sidebar_nav');
    $this->load->view('pages/view_patient',$data);
    $this->load->view('templates/global/quickside_bar');
    $this->load->view('templates/global/start_global_footer');
    $this->load->view('templates/global/datatables_js');
    $this->load->view('templates/global/end_global_footer');
  }

  //move preart patient to art
  public function move_to_art(){
    //get client id and names
    $data['cid'] = $this->input->post('id');
    $data['fname'] = $this->input->post('fullname');

    //load view
    $this->load->view('templates/global/start_global_head');
    $this->load->view('templates/global/form_wizard_css');
    $this->load->view('templates/global/end_global_head');
    $this->load->view('templates/global/horizontal_nav');
    $this->load->view('templates/global/sidebar_nav');
    $this->load->view('pages/art_register',$data);
    $this->load->view('templates/global/quickside_bar');
    $this->load->view('templates/global/start_global_footer');
    $this->load->view('templates/global/form_wizard_js');
    $this->load->view('templates/global/end_global_footer');

  }
  //register into ART
  public function art_register(){
    //get client id
    $clientid = $this->input->post('cid');

    /* IMPLODE MULTIPLE CHECKBOXES
     * ============================
     * use function implode to form care of entry into a string,
     * so that we store it in the database.
     * e.g: $ids = implode(",",$_POST["ids"]);
     * Where you read from the database you can transform the value
     * from db to an array like this
     * $ids_array = explode(",",$row->ids);
     */
    $careofentry = implode(",",$this->input->post('careofentry'));
    $statusofenrol = implode(",",$this->input->post('statusofenrol'));


    //load HTS model to get access to unhedid function
    $this->load->model('Hts_model');
    $unhexed_clientid = $this->Hts_model->unhexid($clientid);


    //get art start data
    $data['artstart'] = array(
      'id'=>'',
      'weight'=>$this->input->post('weight'),
      'function'=>$this->input->post('functional'),
      'height' =>$this->input->post('height'),
      'whoclinicalstage'=>$this->input->post('clinicalstage'),
      'cd4'=>$this->input->post('cd4'),
      'statusofenrollment'=>$statusofenrol,
      'inh_start'=>$this->input->post('inhstart'),
      'inh_stop'=>$this->input->post('inhstop'),
      'ctx_start'=>$this->input->post('ctxstart'),
      'ctx_stop'=>$this->input->post('ctxstop'),
      'tb_treatment_start'=>$this->input->post('tbrx_start'),
      'tb_treatment_stop'=>$this->input->post('tbrx_stop')
    );
    //get 1st line regimen data
    $data['regimen'] = array(
      'id' => '',
      'clientid' => $unhexed_clientid,
      'regimen_line' => $this->input->post('regimen_line'),
      'regimen' => $this->input->post('regimen'),
      'substitution_reason'=>$this->input->post('regimen_reason'),
      'substitution_date'=>$this->input->post('firstregimen_date')
    );

    //insert art start information
    $artstartid = $this->Patient_model->add_multiple('artstart',$data['artstart']);
    //get art registration data
    $data['art'] = array(
      'id' => '',
      'clientid' => $unhexed_clientid,
      'artstartid' => $artstartid,
      'dateenrolled'=>$this->input->post('artstartdate'),
      'whyeligible'=>$this->input->post('why'),
      'careofentry'=> $careofentry,
      'cohort' => $this->input->post('artstartdate')
    );
    //insert into art table
    $artid = $this->Patient_model->add_multiple('art',$data['art']);
    //insert into regimen
    $this->Patient_model->add('regimen',$data['regimen']);
    //update hivpatient table with the art ID
    $updatecondition = "hex(clientid) = '".$clientid."'";
    $data['mypatient'] = array(
        'artid' => $artid
      );
    if($this->Patient_model->edit('hivpatients',$data['mypatient'],$updatecondition)){
      $this->load->view('pages/success');
    }else{
      echo "Not successful";
    }

  }
  //view ART patients
  public function artpatients(){
    //get information from hivpattients and clients to display
    $condition = "hivpatients.clientid = clients.id AND hivpatients.artid IS NOT NULL";
    $data['artpatient'] = $this->Patient_model->patient_join_client($condition);


    //load view
    $this->load->view('templates/global/start_global_head');
    $this->load->view('templates/global/datatables_css');
    $this->load->view('templates/global/end_global_head');
    $this->load->view('templates/global/horizontal_nav');
    $this->load->view('templates/global/sidebar_nav');
    $this->load->view('pages/art',$data);
    $this->load->view('templates/global/quickside_bar');
    $this->load->view('templates/global/start_global_footer');
    $this->load->view('templates/global/datatables_js');
    $this->load->view('templates/global/end_global_footer');
  }
  //view art card
  public function view_art_card(){
    $clientid = $this->input->post('id');
    //get patient information
    $condition = "hivpatients.clientid = clients.id AND hex(id) = '".$clientid."'";
    $data['patientinfo'] = $this->Patient_model->patient_join_client($condition);

    //get patient HTS record
   $this->load->model('Hts_model');
   $data['htsrecords'] = $this->Hts_model->get_client_hts($clientid);
    //get total hts visits
    $data['total_visits'] = count($data['htsrecords']);

    //load ART model
    $this->load->model('Art_model');
    //get art information
    $data['artinfo'] = $this->Art_model->getart_byclient($clientid);

    //get art start info
    foreach($data['artinfo'] as $art){
      $artstartid = $art['artstartid']; //art start id
      $artid = $art['id'];
    }
    $data['artstrartinfo'] = $this->Art_model->artstart_byid($artstartid);

    //get first recorded health status
    $data['firsthealth'] = $this->Patient_model->firststatus($clientid);
    //get clinic, chief and district information

    foreach($data['patientinfo'] as $patient){
      $clinicid = $patient['clinicid'];
      $chiefid = $patient['chiefid'];
      $districtid = $patient['districtid'];
    }

    $this->load->model('Clinics_model');
    $data['clinicinfo'] = $this->Clinics_model->get_clinics($clinicid);
    $this->load->model('Chiefs_model');
    $data['chiefinfo'] = $this->Chiefs_model->get_chiefs($chiefid);
    $this->load->model('Districts_model');
    $data['districtinfo'] = $this->Districts_model->get_district($districtid);
    $this->load->model('Regimen_model');
    $data['regimen'] = $this->Regimen_model->get_regimen($clientid);

    //load the encounters and view
    $this->load->model('Encounters_model');
    $data['encounters'] = $this->Encounters_model->get_encounters($artid);
    //load view

    $this->load->view('templates/global/start_global_head');
    $this->load->view('templates/global/datatables_css');
    $this->load->view('templates/global/user_profile_css');
    $this->load->view('templates/global/end_global_head');
    $this->load->view('templates/global/horizontal_nav');
    $this->load->view('templates/global/sidebar_nav');
    $this->load->view('pages/view_art_profile',$data);
    $this->load->view('templates/global/quickside_bar');
    $this->load->view('templates/global/start_global_footer');
    $this->load->view('templates/global/datatables_js');
    $this->load->view('templates/global/datatables-responsive_js');
    $this->load->view('templates/global/end_global_footer');
  }
  //record encounters
  public function record_encounter(){
    $data['cid'] = $this->input->post('id');
    $data['fname'] = $this->input->post('fullname');
    $data['artid'] = $this->input->post('artid');

    //load view
    $this->load->view('templates/global/start_global_head');
    $this->load->view('templates/global/form_wizard_css');
    $this->load->view('templates/global/end_global_head');
    $this->load->view('templates/global/horizontal_nav');
    $this->load->view('templates/global/sidebar_nav');
    $this->load->view('pages/add_encounter',$data);
    $this->load->view('templates/global/quickside_bar');
    $this->load->view('templates/global/start_global_footer');
    $this->load->view('templates/global/form_wizard_js');
    $this->load->view('templates/global/end_global_footer');
  }

}
?>
