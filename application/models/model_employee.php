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
		$sql = 'INSERT INTO angajat (Nume,Prenume,CNP,Strada, Numar, Oras, Judet, Sex, Data_nasterii, Data_angajarii,Salariu,
		Id_departament)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?,?)';
		$this->db->query($sql, $fields);
		//$this->db->insert($this->table, $fields);
				
	}
	
	public function insert_info_aditionale($filename, $params) {
		$fields = array('Id_angajat' => $params['Id_angajat'],
						'Studii' => $params['studii_angajat'],
						'Descriere' =>$params['descriere_angajat'],
						'Poza' => $filename,
						'Link_facebook' => $params['link_facebook']);
		
		$sql = 'INSERT INTO info_aditionale(Id_angajat,Studii, Descriere, Poza, Link_facebook)
		VALUES(?,?,?,?,?)';
		$this->db->query($sql, $fields);
		//$this->db->insert('info_aditionale', $fields);
		
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
	
	public function select_info_aditionale_curatenie() {
		
		 $query = $this->db->query('SELECT A.Nume, A.Prenume, info_aditionale.Poza,info_aditionale.Descriere, info_aditionale.Studii, info_aditionale.Link_facebook, AP.Nume_dep
         FROM angajat A INNER JOIN info_aditionale  ON (info_aditionale.Id_angajat = A.idAngajat)
         INNER JOIN departament AP ON A.Id_Departament=AP.id_departament where AP.id_departament=24');
		 if($query->num_rows() > 0) {
		 foreach($query->result() as $row) {
				$data[] = $row;
			}
		}
		
		return $data;
		
	}
	
	
	
	public function select_info_aditionale_ingrijire() {
		$sql = 'SELECT A.Nume, A.Prenume, info_aditionale.Poza,info_aditionale.Descriere, info_aditionale.Studii, info_aditionale.Link_facebook, AP.Nume_dep
         FROM angajat A INNER JOIN info_aditionale  ON (info_aditionale.Id_angajat = A.idAngajat)
         INNER JOIN departament AP ON A.Id_Departament=AP.id_departament where AP.id_departament= 26';
		 $query = $this->db->query($sql);
		 if($query->num_rows() > 0) {
		 foreach($query->result() as $row) {
				$data[] = $row;
			}
		}
		
		return $data;
		
	}
	
	public function get_angajati_by_service($id_serviciu) {
		$sql = 'select A.idAngajat, A.Nume, A.Prenume from Angajat A, Departament D, Serviciu S where (D.id_departament = S.Id_dep) 
			AND (A.Id_Departament = D.id_departament) and S.Id_serviciu = ?';
		$query = $this->db->query($sql, $id_serviciu);
		 $angajati = array();
        if($query->result()){
            foreach ($query->result() as $angajat) {
				$nume = $angajat->Nume . " " . $angajat->Prenume;
                $angajati[$angajat->idAngajat] = $nume;
            }
            return $angajati;
        } else {
            return FALSE;
        }
    } 
	
	public function get_toate_comenzile($nume, $prenume) {
		$sql = 'select Cl.Nume as Nume_client, Cl.Prenume as Prenume_client, S.Nume_serviciu, C.Data, C.Ora from clienti Cl,
				serviciu S, comanda C, angajat A where Cl.client_id = C.Id_client and S.Id_serviciu = C.Id_serviciu and
				A.idAngajat = C.Id_angajat and A.Nume = ? and A.Prenume = ? order by C.Data, C.Ora ASC';
		$query = $this->db->query($sql, array($nume, $prenume));
		 $angajati = array();
        if($query->result()){
            foreach ($query->result() as $angajat) {
				$nume = $angajat->Nume_client . " " . $angajat->Prenume_client;
                $angajati[$nume . " " . $angajat->Data . " " . $angajat->Ora] = $angajat->Nume_serviciu;
            }
            return $angajati;
        } else {
            return FALSE;
        }
		
	}
	
	public function get_employees_dep_salariu($nume_dep, $salariu) {
		$sql = 'select A.Nume, A.Prenume, A.Salariu from Angajat A, Departament D where (A.Id_Departament = D.id_departament)
				and D.Nume_dep = ? and A.Salariu > ?';
		$query = $this->db->query($sql, array($nume_dep, $salariu));
		$angajati = array();
        if($query->result()){
            foreach ($query->result() as $angajat) {
				$nume = $angajat->Nume . " " . $angajat->Prenume;
                $angajati[$nume] = $angajat->Salariu;
				
            }
            return $angajati;
        } else {
            return FALSE;
        }
		
	}
	
	public function get_angajati_dupa_nr_comenzi($departament) {
		$sql = 'select A.Nume, A.Prenume, (select count(*) from comanda C where C.Id_angajat = A.idAngajat) as
		Numar_comenzi from angajat A where A.Id_Departament =(select id_departament from departament D where D.Nume_dep = ?)
		order by Numar_comenzi DESC;';
		$query = $this->db->query($sql, $departament);
	   
	    $angajati = array();
        if($query->result()){
            foreach ($query->result() as $angajat) {
				$nume = $angajat->Nume . " " . $angajat->Prenume;
                $angajati[$nume] = $angajat->Numar_comenzi;
				
            }
            return $angajati;
        } else {
            return FALSE;
        }
		
		
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
		$query = $this->db->query('select angajat.idAngajat, angajat.Nume, angajat.Prenume, departament.Nume_dep from angajat left join 
		departament on departament.id_departament=angajat.Id_Departament order by angajat.Nume');
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
