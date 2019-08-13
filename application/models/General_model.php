<?php
class General_model extends CI_Model{
  public function __construct(){
    $this->load->database();
  }
  public function getAllRows($table){
    $query = $this->db->get($table);
    return $query->num_rows();
  }
}
?>
