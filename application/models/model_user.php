<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {
	

	function __construct() {
		parent::__construct();
	}
	
	/*public function validate() {
		$this->db->where('user_login', $this->input->post('username'));
		$this->db->where('user_pass', md5($this->input->post('password')));
		$query = $this->db->get('ci_users');
		if($query->num_rows() == 1) {
			return true; 
		}
	} */
	
	function login($username, $password)
 {
	   $this -> db -> select('id_users, user_login, user_pass');
	   $this -> db -> from('ci_users');
	   $this -> db -> where('user_login', $username);
	   $this -> db -> where('user_pass', MD5($password));
	   $this -> db -> limit(1);
	 
	   $query = $this -> db -> get();
	 
	   if($query -> num_rows() == 1)
	   {
		 return $query->result();
	   }
	   else
	   {
		 return false;
	   }
 }
	
	public function create_user() {
		
		$fields= array('user_login' => $this->input->post('username'),
					  'user_pass' =>md5( $this->input->post('password')),
					  'user_email' => $this->input->post('email'),
					  'telephone' => $this->input->post('telephone'),
					  'first_name' => $this->input->post('first_name'),
					  'last_name' => $this->input->post('last_name') ) ;
		
		$this->db->insert('ci_users', $fields);
				
	}
	/*
	function show_angajat_id($data){
			$this->db->select('*');
			$this->db->from('angajat');
			$this->db->where('idAngajat', $data);
			$query = $this->db->get();
			$result = $query->result();
			return $result;
}
	function update_angajat_id1($id,$data){
		$this->db->where('idAngajat', $id);
		$this->db->update('angajat', $data);
}

	function count_all_employees() {
		$query = $this->db->query('select COUNT(*) as TotalAngajati from angajat');
		foreach($query->result() as $row) {
			$data['TotalAngajati'] = $row;
		}
		return $data;
	}
	
	
	
	public function get_all_employees() {
		$query = $this->db->query('select * from angajat');
		if($query->num_rows() > 0) {
			foreach($query->result() as $row) {
				$data[] = $row;
			}
		}
		
		return $data;
	}
	
	public function get_employee_row($id_angajat) {
		$this->db->where('idAngajat', $id_angajat);
		$query = $this->db->get('angajat');
		return $query->row();
	} */

}
