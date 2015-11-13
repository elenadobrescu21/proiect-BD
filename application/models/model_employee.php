<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_employee extends CI_Model {
	
	protected $table = 'angajat';
	function __construct() {
		parent::__construct();
	}
	
	public function insert($params) {
		
		$fields= array('Nume' => $params['nume_angajat'],
					  'Prenume' => $params['prenume_angajat'],
					  'CNP' => $params['CNP_angajat'],
					  'Strada' => $params['strada_angajat'],
					  'Numar' => $params['numar_angajat'],
					  'Oras' => $params['oras_angajat'],
					  'Judet' => $params['Judet'],
					  'Sex' => $params['sex_angajat'],
					  'Data_nasterii' => $params['Data nasterii'],
					  'Data_angajarii' => $params['Data angajarii'],
					  'Salariu' => $params['Salariu_angajat'],
					  'Id_Departament' => $params['Id_departament']) ;
		
		$dataNasterii = date('Y-m-d', strtotime($fields['Data_nasterii']));
		$dataAngajarii = date('Y-m-d', strtotime($fields['Data_angajarii']));
		$fields['Data_angajarii'] = $dataAngajarii;
		$fields['Data_nasterii'] = $dataNasterii;
		$this->db->insert($this->table, $fields);
				
	}
	
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
	}

}
