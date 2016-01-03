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
	
	public function departament_manager() {
		$query = $this->db->query(' select departament.id_departament, departament.Nume_dep, angajat.Nume, angajat.Prenume from departament 
		left join angajat on angajat.idAngajat = departament.Id_manager order by departament.Nume_dep');
		 if($query->num_rows() > 0) {
			foreach($query->result() as $row) {
				$data[] = $row;
			}
		}
		return $data;		 
	}
	public function count_angajati_in_dep() {
		$sql = 'select  Nume_dep, Nume, Prenume, Total_angajati, Sal_mediu from (select D.id_departament, D.Nume_dep, count(A.Id_Departament) as Total_angajati, AVG(A.Salariu) as Sal_mediu 
		from departament D inner join Angajat A on A.Id_Departament = D.id_departament group by D.Nume_dep) as T1, 
       (select D.id_departament, A.Nume, A.Prenume from departament D inner join angajat A on A.idAngajat = D.Id_manager order by D.Nume_dep) as T2 
        where T1.id_departament = T2.id_departament';
		$query = $this->db->query($sql);
		 if($query->num_rows() > 0) {
			foreach($query->result() as $row) {
				$data[] = $row;
			}
		}
		return $data;	
		
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