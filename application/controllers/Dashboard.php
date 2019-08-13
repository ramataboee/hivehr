<?php
class Dashboard extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->helper('url_helper');
    $this->load->model('General_model');
  }
  public function view(){
    //load total hts
    //$this->load->model('Hts_model');
    
    $data['allHts'] = $this->General_model->getAllRows('hts');

    //clients
    //$this->load->model('Clients_model');
    $data['allclients'] = $this->General_model->getAllRows('clients');

    //patients
    //$this->load->model('Patient_model');
    $data['allpatients'] = $this->General_model->getAllRows('hivpatients');
    $data['negativeclients'] = $data['allclients'] - $data['allpatients'];

    $this->load->view('templates/global/start_global_head');
    $this->load->view('templates/global/dashboard_css');
    $this->load->view('templates/global/end_global_head');
    $this->load->view('templates/global/horizontal_nav');
    $this->load->view('templates/global/sidebar_nav');
    $this->load->view('pages/home',$data);
    $this->load->view('templates/global/quickside_bar');
    $this->load->view('templates/global/start_global_footer');
    $this->load->view('templates/global/dashboard_js');
    $this->load->view('templates/global/end_global_footer');
  }

}
?>
