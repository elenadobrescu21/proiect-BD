<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {
	

	function __construct() {
		parent::__construct();
	}

	
	function login($username, $password)
 {
	   $this -> db -> select(' client_id, username, user_pass, Nume, Prenume');
	   $this -> db -> from('clienti');
	   $this -> db -> where('username', $username);
	   $this -> db -> where('user_pass', MD5($password));
	  // $this -> db -> limit(1);
	 
	   $query = $this -> db -> get();
	   
	   if($query->num_rows() > 0) {
			foreach($query->result() as $row) {
				$data[] = $row;
			}
		}
		
		return $data;
	 
 }
	
	public function create_user() {
		
		$fields= array('username' => $this->input->post('username'),
					  'user_pass' =>md5( $this->input->post('password')),
					  'user_email' => $this->input->post('email'),
					  'telephone' => $this->input->post('telephone'),
					  'Nume' => $this->input->post('first_name'),
					  'Prenume' => $this->input->post('last_name') ) ;
		
		$this->db->insert('clienti', $fields);
				
	}
	

	function count_all_clients() {
		$query = $this->db->query('select COUNT(*) as TotalClienti from clienti');
		foreach($query->result() as $row) {
			$data['TotalClienti'] = $row;
		}
		return $data;
	}
	
	function get_user_id($username) {
		$sql = 'select client_id from clienti where username = 1';
		$query = $this->db->query($sql, $username);
		if($query->num_rows() > 0) {
			foreach($query->result() as $row) {
				$data[] = $row;
			}
		}
		
		return $data;
		
	}
	
	function clienti_fara_comenzi() {
		$sql = 'select Nume, Prenume from (select Cl.client_id, Cl.Nume, Cl.Prenume, (select COUNT(*) from comanda C 
				where C.id_client = Cl.client_id) as Numar_comenzi from clienti Cl group by Cl.client_id, Cl.Nume, Cl.Prenume having
				Numar_comenzi = 0) as Com';
		$query = $this->db->query($sql);
		if($query->num_rows() > 0) {
			foreach($query->result() as $row) {
				$data[] = $row;
			}
		}
		
		return $data;
		
	}
	
	function clienti_x_comenzi($numar_comenzi) {
		$sql = 'select Nume, Prenume from (select Cl.client_id, Cl.Nume, Cl.Prenume, (select COUNT(*) from comanda C 
				where C.id_client = Cl.client_id) as Numar_comenzi from clienti Cl group by Cl.client_id, Cl.Nume, Cl.Prenume having
					Numar_comenzi > ?) as Com';
		$query = $this->db->query($sql, array($numar_comenzi));
		$msg = "Nu exista clienti";
		 $clienti = array();
        if($query->result()){
            foreach ($query->result() as $client) {
				
                $clienti[$client->Nume] = $client->Prenume;
            }
            return $clienti;
        } else {
            return false;
        }
	}
	
	
	
	public function get_all_clients() {
		$query = $this->db->query('select * from clienti');
		if($query->num_rows() > 0) {
			foreach($query->result() as $row) {
				$data[] = $row;
			}
		}
		
		return $data;
	}
	


}
