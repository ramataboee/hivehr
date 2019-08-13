<?php
class Art_model extends CI_Model{
  public function __construct(){
    $this->load->database();
  }
  public function getart_byclient($clientid){
    $query = $this->db->get_where('art',array('hex(clientid)'=> $clientid));
    return $query->result_array();
  }
  public function artstart_byid($artid){
    $query = $this->db->get_where('artstart',array('id'=>$artid));
    return $query->result_array();
  }
}
?>
