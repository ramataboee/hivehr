<?php
class Hts extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('Hts_model');
    $this->load->helper('url_helper');
    $this->load->helper('url');

  }
  //record hts
  public function record_hts(){
    //load helper and validation
    $this->load->helper('form');
    $this->load->library('form_validation');

    //fields to validate. set_rules(the name of the input field, the name to be used in error messages, and the rule.)
    $this->form_validation->set_rules('date','Provide Date','required');
    $this->form_validation->set_rules('hiv_status', 'Provide HIV Status','required');

    if($this->form_validation->run()===FALSE){

    }else{
      //get client id and unhex it
      $client = $this->input->post('id');
      $clientid = $this->Hts_model->unhexid($client);
      //get posted data
      $data = array(
        'id' =>'',
        'clientid' => $clientid,
        'date' => $this->input->post('date'),
        'nextdate' => $this->input->post('next_date'),
        'hivstatus' => $this->input->post('hiv_status')
      );
      //insert into hts
      $this->Hts_model->recordhts($data);
      $this->session->set_flashdata('clientid',$client);
      redirect('Clients/view_client_profile');
      //$this->load->view('pages/success');

    }


  }

  /*
  public function record(){
    //load helper and validation
    $this->load->helper('form');
    $this->load->library('form_validation');

    //fields to validate. set_rules(the name of the input field, the name to be used in error messages, and the rule.)
    $this->form_validation->set_rules('date','Provide Date','required');
    $this->form_validation->set_rules('hiv_status', 'Provide Surname','required');

    if($this->form_validation->run()==FALSE){
      $this->load->view('pages/view_client');
    }else{
      if(!empty($this->input->post('id'))){
        $clientid = $this->Clients_model->unhexid($this->input->post('id'))
        $table = 'hts';
        $data = array(
          'id' =>'',
          'clientid' => $this->input->post('id'),
          'date' => $this->input->post('date'),
          'nextdate' => $this->input->post('next_date'),
          'hivstatus' => $this->input->post('hiv_status')
        );
        $this->Hts_model->recordhts($table,$data);
        $this->load->view('pages/success');
      }
    }
  }*/
}
?>
