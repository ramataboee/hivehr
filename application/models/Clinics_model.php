<?php
class Clinics_model extends CI_Model{

  public function __construct(){
    $this->load->database();
  }
  public function get_clinics($clinic_id = FALSE){
    if($clinic_id === FALSE){
      $query = $this->db->get('clinics');
      return $query->result_array();
    }
    $query = $this->db->get_where('clinics', array('id'=>$clinic_id));
    return $query->result_array();
  }
}
?>
