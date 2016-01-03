<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_comanda extends CI_Model {
	

	function __construct() {
		parent::__construct();
	}
	

	public function create_comanda($params) {
		
		$fields= array('Id_client' => $params['Id_client'],
					  'Id_serviciu' => $params['Id_serviciu'],
					  'Id_angajat' => $params['Id_angajat'] ) ;
					  
		$an="2016";
		$luna = $params['luna'];
		$ziua = $params['ziua'];
		$data = $an."-".$luna."-".$ziua;	
		$ora = $params['ora'];
		
		$data_fin = $data . ' ' . $hour;
		$dataServ = date('Y-m-d', strtotime($data_fin));
		$fields['Data'] = $dataServ;
		$fields['Ora'] = $ora;
		$this->db->insert('comanda', $fields);
				
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
	
	public function get_detalii_comanda() {
		$sql = 'select Cl.Nume as Nume_client, Cl.Prenume as Prenume_client, S.Nume_serviciu, A.Nume as Nume_angajat,
				A.Prenume as Prenume_angajat, C.Data, C.Ora from clienti Cl, serviciu S, angajat A, comanda C where
				Cl.client_id = C.Id_client AND S.Id_serviciu = C.Id_serviciu AND A.idAngajat = C.Id_angajat;';
				
		$query = $this->db->query($sql);
		
		if($query->num_rows() > 0) {
			foreach($query->result() as $row) {
				$data[] = $row;
			}
		}
		
		return $data;
		
	}
	
	public function get_comanda_by_data($data) {
		
		$sql = 'select Cl.Nume as Nume_client, Cl.Prenume as Prenume_client, S.Nume_serviciu, A.Nume as Nume_angajat,
				A.Prenume as Prenume_angajat from clienti Cl, serviciu S, angajat A, comanda C where
				Cl.client_id = C.Id_client AND S.Id_serviciu = C.Id_serviciu AND A.idAngajat = C.Id_angajat and C.Data = ?
				order by Nume_client, Prenume_client ASC';
		$query = $this->db->query($sql, $data);
		$nume_client = "nume_client";
		$serviciu = "serviciu";
		$nume_angajat = "nume_angajat";
		$comenzi = array();
        if($query->result()){
            foreach ($query->result() as $comanda) {
		$comenzi[$comanda->Nume_client . " " . $comanda->Prenume_client] = $comanda->Nume_angajat. " " . $comanda->Prenume_angajat. " " . $comanda->Nume_serviciu;
				//$comenzi[$serviciu] = $comanda->Nume_serviciu;
				//$comenzi[$nume_angajat] = $comanda->Nume_angajat . " " . $comanda->Prenume_angajat;
            }
            return $comenzi;
        } else {
            return FALSE;
        }
		
	}
	
	public function comanda_cea_mai_apropiata() {
		$sql = 'select Cl.Nume as Nume_client, Cl.Prenume as Prenume_client, S.Nume_serviciu, A.Nume as Nume_angajat,
		A.Prenume as Prenume_angajat, C.Data as Data_comanda, C.Ora from clienti Cl, serviciu S, angajat A, comanda C where
		Cl.client_id = C.Id_client AND S.Id_serviciu = C.Id_serviciu AND A.idAngajat = C.Id_angajat
		having Data_comanda = (select min(Data) from comanda)';
		
		$query = $this->db->query($sql);
		if($query->num_rows() > 0) {
			foreach($query->result() as $row) {
				$data[] = $row;
			}
		}
		
		return $data;
		
	}


}
