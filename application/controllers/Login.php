<?php
class Login extends CI_Controller{
  public __construct(){
    parent::__construct();
    $this->load->helper('url_helper');
    $this->load->helper('form');
    $this->load->library('form_validation');
  }
  public function isLoggedin(){
    if(auto_login()){
      //logged in, remembered
      return TRUE;
    }else{
      return FALSE;
    }
  }
  public function process_login(){
    if(isLoggedin()){
      redirect(base_url('Dashboard/view'));
    }else{
      $this->login();
    }
  }

  public function login(){
    $this->form_validation->set_rules('username','Provide username','required');
    $this->form_validation->set_rules('password','Provide password','required');
    if($this->form_validation->run()===FALSE){
      $this->error = validation_errors();
      $this->view_login_form();
    }
    if($this->process_login()){
      redirect(base_url('Dashboard'));
    }
    $this->view_login_form();
  }

  public function view_login_form(){
    $data['form_error'] = $this->error;
    $this->load->view('paes/login');
  }
  public function process_login(){
    $this->load->model('User_model');
  }

  public function auto_login(){

  }
}
?>
