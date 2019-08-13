<?php
class Clients_model extends CI_Model{
  public function __construct(){
    $this->load->database();
  }

  /*
   * GENERATE UUID
   * clients ID = uuid
   *
   * EXPLAINED:
   * ==========
   * UUIDs are a good alternative to AUTO_INCREMENT PRIMARY KEY and are used mainly because:
   * – the keys are unique across tables, databases and servers
   * – are hard(er) to guess (example from an URL)
   * – can be generated offline (without any exchange of information with the database or collaboration with other components of the system)
   * – simplifies replication

   * But they also come with some disadvantages:
   *  – increased storage: 36 characters
   *    – more difficult to debug
   *    – performance issues: mainly because of the size and not being ordered
   *
   * The solution to this is using 2 functions:
   * The UUID_TO_BIN/BIN_TO_UUID functions have a second boolean argument, which is optional,
   * and can be used to avoid this problem. Setting the argument to true while inserting the
   * values: “INSERT INTO t VALUES(UUID_TO_BIN(UUID(), true));” will rearrange
   * the time-related bits so that consecutive generated values will be ordered.
  */
  public function generate_uuid(){
    $query = $this->db->select("unhex(replace(uuid(),'-','')) AS uid");
    $row = $query->get()->row();
    $uuid = $row->uid;
    return $uuid;
  }
  //global insert
  public function add($table,$data=array()){
    return $this->db->insert($table,$data);
  }
  //get all returning clients
  public function returning_clients(){
      $this->db->select('hex(id), creation_date, name, surname, gender, dob');
      $this->db->from('clients');
      $query = $this->db->get()->result_array();
      return $query;
  }
  //get single returning client
  public function client_profile($unique_number){
    $this->db->select('hex(id), creation_date, name, surname, gender, dob');
    $this->db->from('clients');
    $this->db->where('hex(id)',$unique_number);
    $query = $this->db->get()->result_array();
    return $query;
  }
  //joining two tables
  public function join_tables($unique_number){
    /* SELECTING ALL
     * $this->db->select(*);
    */
    //select required info
    $this->db->select('clients.id, creation_date, name, surname, gender, dob, hivstatus, date, nextdate');
    $this->db->from('clients');
    $this->db->join("hts","hts.clientid = clients.id AND clients.id=unhex('.$unique_number.')");
    $query = $this->db->get()->result_array();
    return $query;
  }
  //get number of clients
  public function clients_number(){
    $query = $this->db->get('clients');
    return $query->num_rows();
  }

}
?>
