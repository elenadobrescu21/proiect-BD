<?php
class update_ctrl extends CI_Controller{
	
	function __construct(){
	  parent::__construct();
	  $this->load->model(array('model_employee', 'model_departament', 'model_serviciu'));
	}

	function show_angajat_id() {
	  $id = $this->uri->segment(3);
	  $data['angajati'] = $this->model_employee->get_all_employees();
	  $data['single_angajat'] = $this->model_employee->show_angajat_id($id);
	  $data['departament'] = $this->model_departament->get_all_departments();
	  $this->load->view('edit', $data);
	}
	
	function show_serviciu_id() {
	  $id = $this->uri->segment(3);
	  $data['servicii'] = $this->model_serviciu->get_all_services();
	  $data['single_serviciu'] = $this->model_serviciu->show_serviciu_id($id);
	  $data['departament'] = $this->model_departament->get_all_departments();
	  $this->load->view('edit_serviciu', $data);
	}
	
	function update_serviciu_id1() {
	  $id = $this->input->post('did');
	  $nume = $this->input->post('nume_serviciu');
	  $pret = $this->input->post('pret_serviciu');
	  $data = array("Nume_serviciu" => $nume,
		        "Pret" => $pret,
			"Id" => $id);
	  $sql = 'UPDATE serviciu SET Nume_serviciu=?, Pret = ? WHERE Id_serviciu = ?';
	  $this->db->query($sql, $data);
	  redirect('Serviciu/lista_servicii');
		
	}


	function update_angajat_id1() {
	  $id= $this->input->post('did');
	  $yearOfBirth = $this->input->post('yearOfBirth');
	  $monthOfBirth = $this->input->post('monthOfBirth');
	  $dateOfBirth = $this->input->post('dateOfBirth');
	  $anAngajare = $this->input->post('anAngajare');
	  $lunaAngajare = $this->input->post('lunaAngajare');
	  $ziAngajare = $this->input->post('ziAngajare');
          $data_nasterii = $yearOfBirth."-".$monthOfBirth."-".$dateOfBirth;
	  $data_angajarii = $anAngajare."-".$lunaAngajare."-".$ziAngajare;
	  $dataNasterii = date('Y-m-d', strtotime($data_nasterii));
	  $dataAngajarii = date('Y-m-d', strtotime($data_angajarii));
	  $data = array(
			'Nume'=>$this->input->post('nume_angajat'),
			'Strada' => $this->input->post('strada_angajat'),
			'Numar' => $this->input->post('numar_angajat'),
			'Judet' => $this->input->post('Judet'),
			'Oras' => $this->input->post('oras_angajat'),
			'Sex' =>$this->input->post('sex_angajat'),
			'Data_angajarii' => $dataAngajarii,
			'Data_nasterii' => $dataNasterii,
			'Id_departament' => $this->input->post('Id_departament'),
			'Salariu' => $this->input->post('Salariu_angajat'),
			'Id' => $id);
					
	  $sql = 'UPDATE angajat
		SET Nume=?,Strada=?, Numar=?, Judet=?, Oras=?, Sex=?, Data_angajarii=?, Data_nasterii=?, Id_departament = ?, Salariu = ?
                 WHERE idAngajat= ?';
	  $this->db->query($sql, $data);
	  $this->show_angajat_id();
	  redirect('Angajati');
	}
		
	public function delete_serviciu($serviciu_id) {
	  $sql = 'delete from serviciu where Id_serviciu = ?';
	  $this->db->query($sql, $serviciu_id);
	  redirect('Serviciu/lista_servicii');
	}
		
	public function delete($angajat_id){
	  $sql = 'DELETE FROM angajat WHERE idAngajat=?';
	  $this->db->query($sql, $angajat_id);
	  redirect('Angajati');
	}
}
?>
