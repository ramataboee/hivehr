<?php
class Regimen_model extends CI_Model{
  public function __construct(){
    $this->load->database();
  }
  public function get_regimen($clientid = FALSE){
    if($clientid === FALSE){
      $query = $this->db->get('regimen');
      return $query->result_array();
    }
    $query = $this->db->get_where('regimen',array('hex(clientid)'=>$clientid));
    return $query->result_array();
  }
}
?>
