<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_serviciu extends CI_Model {
	
	protected $table = 'serviciu';
	function __construct() {
		parent::__construct();
	}
	
	public function insert_serviciu($params) {
	
	
	$fields= array('Nume_serviciu' => $params['Nume_serviciu'],
					  'Pret' => $params['Pret'],
					  'Id_dep' => $params['id_departament']) ;
					
		$this->db->insert($this->table, $fields);
		/*$nume = $params['Nume_serviciu'];
		$Pret = $params['Pret'];
		$id = $params['id_departament'];
		$sql = "insert into serviciu(Nume_serviciu, Pret,Id_dep) values('$params[Nume_serviciu]', $Pret, $id)";
		//$sql = "insert into departament(Nume_dep, Id_manager) values('$params[Nume_dep]', $id )";
		$this->db->query($sql);  */
			
	}
	
	public function get_all_services() {
		
		$query = $this->db->query('select * from serviciu');
		if($query->num_rows() > 0) {
			foreach($query->result() as $row) {
				$data[] = $row;
			}
		}
		
		return $data;
	}
	
}