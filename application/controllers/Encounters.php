<?php
class Encounters extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('Encounters_model');
    $this->load->helper('url');
  }
  public function add_encounter(){
    $clientid = $this->input->post('clientid');
    $data['encounters'] = array(
      'id' => '',
       'artid' => $this->input->post('artid'),
       'scheduled' => $this->input->post('scheduled'),
       'date_scheduled' => $this->input->post('scheduled_date'),
       'followup_date' => $this->input->post('followup_date'),
       'durationsincefirststart' => $this->input->post('duration'),
       'smi_whz_score' => $this->input->post('smi'),
       'weight' => $this->input->post('weight'),
       'pregnant' => $this->input->post('edd'),
       'function' => $this->input->post('function'),
       'who_clinicalstage' => $this->input->post('stage'),
       'tb_status' => $this->input->post('tb'),
       'sti' => $this->input->post('sti'),
       'potential_sideeffects' => $this->input->post('side_effects'),
       'new_oi' => $this->input->post('new_oi'),
       'ctx' => $this->input->post('ctx'),
       'ipt' => $this->input->post('ipt'),
       'other_meds' => $this->input->post('other_meds'),
       'arvdrugs' => $this->input->post('arvdrugs'),
       'viraload' => $this->input->post('viraload'),
       'cd4' => $this->input->post('cd4'),
       'labs' => $this->input->post('labs'),
       'refer' => $this->input->post('refer')
    );
    //insert into encounters
    $this->Encounters_model->add('encounters',$data['encounters']);
    $this->load->view('pages/success');

  }
}
?>
