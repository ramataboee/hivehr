<?php
class Clinics extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('Clinics_model');
    $this->load->helper('url_helper');
  }

  
  public function get_clinics(){
    $data['clinic'] = $this->Clinics_model->get_clinics();
    $this->load->view('pages/preart_register',$data);
  }
}
?>
