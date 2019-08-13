<?php
class Encounters_model extends CI_Model{
  public function __construct(){
    $this->load->database();
  }
  public function add($table,$data=array()){
    return $this->db->insert($table,$data);
  }
  public function get_encounters($artid){
    $query = $this->db->get_where('encounters',array('artid'=> $artid));
    return $query->result_array();
  }
}
?>
