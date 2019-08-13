<?php
class Clients extends CI_Controller{
  //clients constructor
  public function __construct(){
    parent::__construct();
    $this->load->model('Clients_model');
    $this->load->helper('url_helper');
    $this->load->helper('url');
    $this->load->library('session');
  }


  /*
   * REGISTER CLIENT FOR THE FIRST TIME:
   * ===================================
   * 1. insert client
   *  Use UUID as the unique client ID
   * 2. insert the hts visit
  */
  public function register_client(){
    //get form helper and validation library
    $this->load->helper('form');
    $this->load->library('form_validation');

    //fields to validate. set_rules(the name of the input field, the name to be used in error messages, and the rule.)
    $this->form_validation->set_rules('date','Provide Date','required');
    $this->form_validation->set_rules('name','Provide Name','required');
    $this->form_validation->set_rules('surname', 'Provide Surname','required');
    $this->form_validation->set_rules('gender', 'Provide Gender','required');
    $this->form_validation->set_rules('dob', 'Provide date of birth','required');

    if($this->form_validation->run()===FALSE){
        $this->load->view('templates/global/start_global_head');
        $this->load->view('templates/global/end_global_head');
        $this->load->view('templates/global/horizontal_nav');
        $this->load->view('templates/global/sidebar_nav');
        $this->load->view('pages/new_client');
        $this->load->view('templates/global/quickside_bar');
        $this->load->view('templates/global/start_global_footer.php');
        $this->load->view('templates/global/end_global_footer.php');

    }else{

      //get uuid
      $clientid = $this->Clients_model->generate_uuid();

      //get array of clients table specific information
        $clientdata = array(
          'id' => $clientid,
          'creation_date' => $this->input->post('date'),
          'name' => $this->input->post('name'),
          'surname' => $this->input->post('surname'),
          'gender' => $this->input->post('gender'),
          'dob' => $this->input->post('dob')
        );
        //insert client info
        $this->Clients_model->add('clients',$clientdata);
        //get array of hts table specific information
        $htsdata = array(
          'clientid' => $clientid,
          'hivstatus' => $this->input->post('hiv_status'),
          'date' => $this->input->post('date'),
          'nextdate' => $this->input->post('next_date'),
        );
        //insert hts visit info
        $this->Clients_model->add('hts',$htsdata);
        //hex the client id
        $this->load->model('Hts_model');
        $client = $this->Hts_model->hexid($clientid);
        //load successful view
        //$this->session->set_flashdata('clientid',$clientid);
        //$this->session->set_flashdata('clientid',$clientid);
        $this->session->set_flashdata('clientid',$client);
        redirect(base_url('view_client_profile'));
    }
  }
  /* VIEW REGISTERED CLIENTS
   * ========================
   * 1. view all registered clients
   * 2. Search for a specific client using any keyword in their info
   * 3. Click the action buton to either view single client or update bio
  */
  public function returning_clients(){
    //get returning clients from clients table
    $data['returning'] = $this->Clients_model->returning_clients();
    $this->load->view('templates/global/start_global_head');
    $this->load->view('templates/global/datatables_css');
    $this->load->view('templates/global/end_global_head');
    $this->load->view('templates/global/horizontal_nav');
    $this->load->view('templates/global/sidebar_nav');
    $this->load->view('pages/returning_client',$data);
    $this->load->view('templates/global/quickside_bar');
    $this->load->view('templates/global/start_global_footer');
    $this->load->view('templates/global/datatables_js');
    $this->load->view('templates/global/end_global_footer');

  }
  /* VIEW CLIENT PROFILE
   * ====================
   * 1. Client bio
   * 2. Client HTS visits
  */
  public function view_client_profile(){

          //get client id
          if(!empty($this->session->clientid)){ //use this if there was a redirect
            $clientid = $this->session->clientid;
          }else{
            $clientid = $this->input->post('id'); //use this if there was a direct view on the client from table list
          }

          //client bio

          $data['client_profile'] = $this->Clients_model->client_profile($clientid);
          $data['theid'] = $clientid;

          if (empty($data['client_profile']))
          {
                  show_404();
          }
          //get clinics for if client is hiv+
          $this->load->model('Clinics_model');
          $data['clinic'] = $this->Clinics_model->get_clinics();
          //get districts
          $this->load->model('Districts_model');
          $data['districts'] = $this->Districts_model->get_district();
          //get chiefs
          $this->load->model('Chiefs_model');
          $data['chiefs'] = $this->Chiefs_model->get_chiefs();
          //client HTS visits
          //load HTS model
          $this->load->model('Hts_model');
          //get visits
          $data['hts_visits'] = $this->Hts_model->get_client_hts($clientid);
          $data['total_visits'] = count($data['hts_visits']);
          
          $this->load->view('templates/global/start_global_head');
          $this->load->view('templates/global/user_profile_css.php');
          $this->load->view('templates/global/sweetalerts_css.php');
          $this->load->view('templates/global/end_global_head');
          $this->load->view('templates/global/horizontal_nav');
          $this->load->view('templates/global/sidebar_nav');
          $this->load->view('pages/view_client',$data);
          $this->load->view('templates/global/quickside_bar');
          $this->load->view('templates/global/start_global_footer');
          $this->load->view('templates/view_client_level_plugin.php');
          $this->load->view('templates/global/sweetalert_js.php');
          $this->load->view('templates/global/end_global_footer');
  }


}
?>
