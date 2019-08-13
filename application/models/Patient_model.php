<?php
class Patient_model extends CI_Model{

    public function __construct(){
      $this->load->database();
    }
    //get hiv patients
    public function get_hivpatients($clientid = FALSE){
      if($clientid === FALSE){
        $query = $this->db->get('hivpatients');
        return $query->result_array();
      }
      $query = $this->db->get_where('hivpatients',array('hex(clientid)'=> $clientid));
      return $query->result_array();
    }

    //global insert
    public function add($table,$data=array()){
      return $this->db->insert($table,$data);
    }

    //global insert of related table
    function add_multiple($table,$data=array()){
      $query = $this->db->insert($table, $data);
      return $this->db->insert_id();// return last insert id
    }

    //joining two tables
    public function patient_join_client($condition){
      /* SELECTING ALL
       * $this->db->select(*);
      */
      //select required info
      $this->db->select('hex(id), creation_date, name, surname, gender, dob,`clientid`, `clinicid`, `phone`, `address`, `districtid`, `chiefid`, `maritalstatus`, `dateconfirmedhiv_positive`, `firstentry_healthstatusid`, `artid`');
      $this->db->from('clients');
      $this->db->join("hivpatients",$condition);
      $query = $this->db->get()->result_array();
      return $query;
    }
    //get first health status recorded
    public function firststatus($clientid){
      $query = $this->db->get_where('firstentry_healthstatus',array('hex(clientid)'=>$clientid));
      return $query->result_array();
    }
    //update
    public function edit($table,$data,$condition){
      $this->db->update($table, $data, $condition);
      return true;
    }

}

?>
