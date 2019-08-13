<?php
class Hts_model extends CI_Model{
  public function __construct(){
    $this->load->database();
  }
  //get hts for a specific client
  public function get_client_hts($clientid){
    $this->db->select('hivstatus, date, nextdate');
    $this->db->from('hts');
    $this->db->where('hex(clientid)',$clientid);
    $query = $this->db->get()->result_array();
    return $query;
  }
  //global get with id
  public function get_hts_byid($clientid){
    $query = $this->db->get_where('hts', array('hex(clientid)'=>$clientid));
    return $query->result_array();
  }
  //convert string to binary in mysql
  public function getbinary($clientid){
    $query = $this->db->select("CAST('".$clientid."' AS BINARY) AS uid");
    $row = $query->get()->row();
    $uuid = $row->uid;
    return $uuid;
  }
  //get all hts
  public function get_hts(){
    $query = $this->db->get('hts');
    return $query->result_array();
  }
  //get all hts
  public function get_hts_num(){
    $query = $this->db->get('hts');
    return $query->num_rows();
  }
  //global insert
  public function recordhts($data=array()){
    $this->db->insert('hts',$data);
  }
  //unhex the client ID so that we store it as binary
  public function unhexid($clientid){
    $query = $this->db->select("unhex('".$clientid."') AS uid"); //be careful to place the var into quotes else mysql returns NULL
    $row = $query->get()->row();
    $uuid = $row->uid;
    return $uuid;
  }
  public function hexid($clientid){
    $query = $this->db->select("hex('".$clientid."') AS uid");
    $row = $query->get()->row();
    $uid = $row->uid;
    return $uid;
  }

}
?>
