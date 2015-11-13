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
				
				$dataNasterii = date('Y-m-d', strtotime($fields['Data_nasterii']));
				$dataAngajarii = date('Y-m-d', strtotime($fields['Data_angajarii']));
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
					'Salariu' => $this->input->post('Salariu_angajat'));
					$this->model_employee->update_angajat_id1($id,$data);
							$this->show_angajat_id();
				
			redirect('Welcome/index');
		}
		
	public function delete($angajat_id) {
		$this->db->where('idAngajat', $angajat_id);
		$this->db->delete('angajat');
		redirect('Welcome/index');
	}
}
?>