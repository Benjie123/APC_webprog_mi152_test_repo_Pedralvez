<?php
class Users_model extends CI_Model {
function __construct()
{
parent::__construct();
$this->load->database("form");
}
public function get_all_users()
{
$query = $this->db->get("form");
return $query->result();
}
public function insert_users_to_db($data)
{
return $this->db->insert('form', $data);
}
public function getById($user_id){
$query = $this->db->get_where('form',array('user_id'=>$user_id));
return $query->row_array();
}
public function update_info($data,$user_id)
{
$this->db->where('form.user_id',$user_id);
return $this->db->update('form', $data);
}
public function delete_a_user($user_id)
{
$this->db->where('form.user_id',$user_id);
return $this->db->delete('form');
}
}
?>