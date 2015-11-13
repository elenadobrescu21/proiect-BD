<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_departament extends CI_Model {
	
	protected $table = 'departament';
	function __construct() {
		parent::__construct();
	}
	
	public function insert_departament($params) {
		$fields= array('Nume_dep' => $params['Nume_dep'],
					  'Id_manager' =>$params['Id_manager']);
		
		$id = $params['Id_manager'];
		/*$result = $this->db->get_where('angajat', array('idAngajat' => $id));
		$id_ang = $result->idAngajat;
		
		settype($id_ang, "integer"); */
		$sql = "insert into departament(Nume_dep, Id_manager) values('$params[Nume_dep]', $id )";
		$this->db->query($sql); 
		
		
	}
	

	public function get_all_departments() {
		$query = $this->db->query('select * from departament');
		if($query->num_rows() > 0) {
			foreach($query->result() as $row) {
				$data[] = $row;
			}
		}
		return $data;
	}
}