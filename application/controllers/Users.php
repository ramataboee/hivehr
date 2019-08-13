<?php

class Users extends CI_Controller{

    function __construct(){
      parent::__construct();
      $this->load->library('form_validation');
      $this->load->helper('url_helper');
      $this->load->helper('form');
      $this->load->model('User_model');
    }
    public function login_view(){
      $this->load->view('templates/global/loginhead');
      $this->load->view('pages/login');
      $this->load->view('templates/global/loginfooter');
    }

    public function login(){

    }

    public function register_user(){

    }

    /*
     * User account information
     */
     public function access_map(){
        return array(
            'index'=>'view',
            'update'=>'edit'
        );
    }
    public function account(){
        $data = array();
        if($this->session->userdata('isUserLoggedIn')){ //user is logged in
            $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
            //load the view
            $this->load->view('users/account', $data);
        }else{
            redirect('users/login');
        }
    }

    /*
     * User login
     */
    public function __login(){
        $data = array();
        if($this->session->userdata('success_msg')){
            $data['success_msg'] = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');
        }
        if($this->session->userdata('error_msg')){
            $data['error_msg'] = $this->session->userdata('error_msg');
            $this->session->unset_userdata('error_msg');
        }
        if($this->input->post('loginSubmit')){
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'password', 'required');
            if ($this->form_validation->run() == true) {
                $con['returnType'] = 'single';
                $con['conditions'] = array(
                    'email'=>$this->input->post('email'),
                    'password' => md5($this->input->post('password')),
                    'status' => '1'
                );
                $checkLogin = $this->user->getRows($con);
                if($checkLogin){
                    $this->session->set_userdata('isUserLoggedIn',TRUE);
                    $this->session->set_userdata('userId',$checkLogin['id']);
                    redirect('users/account/');
                }else{
                    $data['error_msg'] = 'Wrong email or password, please try again.';
                }
            }
        }
        //load the view
        $this->load->view('users/login', $data);
    }

}

?>
