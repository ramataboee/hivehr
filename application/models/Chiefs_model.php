<?php
class Chiefs_model extends CI_Model{
  public function __construct(){
    $this->load->database();
  }
  public function get_chiefs($chief_id = FALSE){
    if($chief_id === FALSE){
      $query = $this->db->get('chiefs');
      return $query->result_array();
    }
    $query = $this->db->get_where('chiefs', array('id'=>$chief_id));
    return $query->result_array();
  }
}
?>
