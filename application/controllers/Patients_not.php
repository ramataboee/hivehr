<?php
class Patients_not extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('Patient_model');
    $this->load->helper('url_helper');
  }

  public function view($page = 'home'){

    if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

  //  $data['title'] = ucfirst($page); // Capitalize the first letter
    $this->load->view('templates/global/start_global_head');
    if( file_exists(APPPATH.'views/templates/'.$page.'_level_header.php')){
    $this->load->view('templates/'.$page.'_level_header');
    }
    $this->load->view('templates/global/end_global_head');
    $this->load->view('templates/global/horizontal_nav');
    $this->load->view('templates/global/sidebar_nav');
    $this->load->view('pages/'.$page);
    $this->load->view('templates/global/quickside_bar');
    $this->load->view('templates/global/start_global_footer.php');
    if( file_exists(APPPATH.'views/templates/'.$page.'_level_plugin.php')){
    $this->load->view('templates/'.$page.'_level_plugin');
    }
    $this->load->view('templates/global/end_global_footer');

  }

  public function all_hts(){
    $data['visits'] = $this->Patient_model->get_hts();

    $this->load->view('templates/global/start_global_head');
    $this->load->view('templates/view_hts_visits_level_header');
    $this->load->view('templates/global/end_global_head');
    $this->load->view('templates/global/horizontal_nav');
    $this->load->view('templates/global/sidebar_nav');
    $this->load->view('pages/view_hts_visits',$data);
    $this->load->view('templates/global/quickside_bar');
    $this->load->view('templates/global/start_global_footer');
    $this->load->view('templates/view_hts_visits_level_plugin');
    $this->load->view('templates/global/end_global_footer');

  }
  public function view_hts(){
    $data['single_patient'] = $this->Patient_model->get_patients($unique_number);
  }
  //register HTS visit
  public function register_hts(){
    $this->load->helper('form');
    $this->load->library('form_validation');

    //fields to validate. set_rules(the name of the input field, the name to be used in error messages, and the rule.)
    $this->form_validation->set_rules('date','Date','required');
    $this->form_validation->set_rules('name','Name','required');
    $this->form_validation->set_rules('surname', 'Surname','required');
    $this->form_validation->set_rules('number', 'Number','required');
    $this->form_validation->set_rules('hiv_status', 'HIV Status','required');

    if($this->form_validation->run()===FALSE){
        $this->load->view('templates/global/start_global_head');
        $this->load->view('templates/global/end_global_head');
        $this->load->view('templates/global/horizontal_nav');
        $this->load->view('templates/global/sidebar_nav');
        $this->load->view('pages/hts_regiter');
        $this->load->view('templates/global/quickside_bar');
        $this->load->view('templates/global/start_global_footer.php');
        $this->load->view('templates/global/end_global_footer.php');

    }else{

        $data = array(
          'Name' => $this->input->post('name'),
          'Surname' => $this->input->post('surname'),
          'Number' => $this->input->post('number'),
          'Hiv_status' => $this->input->post('hiv_status'),
          'Registration_date' => $this->input->post('date'),
          'Gender' => $this->input->post('gender'),
          'Age' => $this->input->post('age'),
          'Visits' => $this->input->post('visits'),
          'Last_visit' => $this->input->post('date'),
          'Comments' => $this->input->post('comments')
        );
        $this->Patient_model->add('htsvisits',$data);
        $this->load->view('pages/success');
    }


  }

  public function register_preart(){
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->model('Clinics_model');

    //get the clinic model to select clinics
    $data['clinic'] = $this->Clinics_model->get_clinics();

    //validation rules
    $this->form_validation->set_rules('p_hivcare_enrolment','HIV Care Enrollment','required');


    if($this->form_validation->run()===FALSE){
        $this->load->view('templates/global/start_global_head');
        $this->load->view('templates/preart_register_level_header');
        $this->load->view('templates/global/end_global_head');
        $this->load->view('templates/global/horizontal_nav');
        $this->load->view('templates/global/sidebar_nav');
        $this->load->view('pages/preart_register',$data);
        $this->load->view('templates/global/quickside_bar');
        $this->load->view('templates/global/start_global_footer.php');
        $this->load->view('templates/preart_register_level_plugin');
        $this->load->view('templates/global/end_global_footer.php');

    }else{
      //set unique number to Not Applicable NA, for pre-art Registration
      $unique_num = "NA";

      //get patient info from view
      $patient_data = array(
        'unique_number' => $unique_num,
        'name' => $this->input->post('p_name'),
        'surname' => $this->input->post('p_surname'),
        'gender' => $this->input->post('p_gender'),
        'age' => $this->input->post('p_age'),
        'dob' => $this->input->post('p_dob'),
        'marital_status' => $this->input->post('p_marital_status'),
        'address' => $this->input->post('p_address'),
        'phone' => $this->input->post('p_phone'),
        'confirmed_hiv_date' => $this->input->post('p_hivdate'),
        'hivcare_enrolment' => $this->input->post('p_hivcare_enrolment'),
        'clinic_id' => $this->input->post('clinic_id'),
        'clinic_number_id' => $this->input->post('clinic_id')
      );
      //insert into patient and get last insert id to use in aditional info table
      $patient_id = $this->Patient_model->add_multiple('patients',$patient_data);

      //get patient additional info from view if not empty
      if(!empty($this->input->post('inh_start') ||
          $this->input->post('inh_start') ||
          $this->input->post('ctx_start') ||
          $this->input->post('ctx_stop') ||
          $this->input->post('fca_start') ||
          $this->input->post('fca_stop') ||
          $this->input->post('tb_start') ||
          $this->input->post('tb_stop') ||
          $this->input->post('pregnancy') ||
          $this->input->post('dead_date') ||
          $this->input->post('lost_to') ||
          $this->input->post('lost_to_date') ||
          $this->input->post('registration_clinical_stage') ||
          $this->input->post('registration_clinical_stage_date'))){

            $additional_data = array(
              'inh_start' => $this->input->post('inh_start'),
              'inh_stop' => $this->input->post('inh_stop'),
              'ctx_start' => $this->input->post('ctx_start'),
              'ctx_stop' => $this->input->post('ctx_stop'),
              'fca_start' => $this->input->post('fca_start'),
              'fca_stop' => $this->input->post('fca_stop'),
              'tb_start' => $this->input->post('tb_start'),
              'tb_stop' => $this->input->post('tb_stop'),
              'pregnancy' => $this->input->post('pregnancy'),
              'dead_date' => $this->input->post('dead_date'),
              'lost_to' => $this->input->post('lost_to'),
              'lost_to_date' => $this->input->post('lost_to_date'),
              'registration_clinical_stage' => $this->input->post('registration_clinical_stage'),
              'registration_clinical_stage_date' => $this->input->post('registration_clinical_stage_date'),
              'id' => $patient_id//last insert id from model patient file
            );
          $this->Patient_model->add('art_additional_info',$additional_data);
          $this->load->view('pages/success');
      }

      //get clinical info

    }
  }

}
?>
