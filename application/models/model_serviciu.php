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
	
	public function serviciu_departament() {
		$query = $this->db->query('select serviciu.Id_serviciu, serviciu.Nume_serviciu, serviciu.Pret, departament.Nume_dep from serviciu left
       join departament on departament.id_departament=serviciu.Id_dep order by departament.Nume_dep');
	   if($query->num_rows() > 0) {
			foreach($query->result() as $row) {
				$data[] = $row;
			}
		}	
		return $data;
	}
	
	public function show_serviciu_id($data) {
		    $this->db->select('*');
			$this->db->from('serviciu');
			$this->db->where('Id_serviciu', $data);
			$query = $this->db->get();
			$result = $query->result();
			return $result;
	}
	
	function update_serviciu_id($id,$data){
		$this->db->where('Id_serviciu', $id);
		$this->db->update('serviciu', $data);
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
	
	function get_servicii_by_departament ($departament){
		$sql = 'select Nume_serviciu, Pret from serviciu where Id_dep = ?';
	    $query = $this->db->query($sql, $departament);
        $servicii = array();
        if($query->result()){
            foreach ($query->result() as $serviciu) {
                $servicii[$serviciu->Nume_serviciu] = $serviciu->Pret;
            }
            return $servicii;
        } else {
            return FALSE;
        }
    } 
	
}