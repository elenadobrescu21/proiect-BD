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
	
	public function insert_info_aditionale($filename, $params) {
		$fields = array('Id_angajat' => $params['Id_angajat'],
						'Studii' => $params['studii_angajat'],
						'Descriere' =>$params['descriere_angajat'],
						'Poza' => $filename,
						'Link_facebook' => $params['link_facebook']);
		$this->db->insert('info_aditionale', $fields);
		
	}
	
	public function select_info_aditionale_meditatii() {
		 $meditatii="Meditatii";
		 $query = $this->db->query('SELECT A.Nume, A.Prenume, info_aditionale.Poza,info_aditionale.Descriere, info_aditionale.Studii, info_aditionale.Link_facebook, AP.Nume_dep
         FROM angajat A INNER JOIN info_aditionale  ON (info_aditionale.Id_angajat = A.idAngajat)
         INNER JOIN departament AP ON A.Id_Departament=AP.id_departament where AP.id_departament=25');
		 if($query->num_rows() > 0) {
		 foreach($query->result() as $row) {
				$data[] = $row;
			}
		}
		
		return $data;
		
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

	function count_all_employees() {
		$query = $this->db->query('select COUNT(*) as TotalAngajati from angajat');
		foreach($query->result() as $row) {
			$data['TotalAngajati'] = $row;
		}
		return $data;
	}
	
	public function angajat_departament() {
		$query = $this->db->query('select angajat.idAngajat, angajat.Nume, angajat.Prenume, departament.Nume_dep from angajat left join departament on departament.id_departament=angajat.Id_Departament order by angajat.Nume');
	   	if($query->num_rows() > 0) {
			foreach($query->result() as $row) {
				$data[] = $row;
			}
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
	}

}
