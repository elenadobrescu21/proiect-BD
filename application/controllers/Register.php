<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller 
{
	
	public function __construct() {
		parent::__construct();
		
		$this->load->model(array('model_employee', 'model_departament', 'model_serviciu'));
		
	}
public function index() {
	
		$data['departament'] = $this->model_departament->get_all_departments();
		$servicii['servicii'] = $this->model_serviciu->get_all_services();
		$this->load->view('angajati', $data);
		$nume_angajat = NULL;
		$prenume_angajat = NULL;
		$CNP_angajat = NULL;
		$strada_angajat = NULL;
		$numar_angajat = NULL;
		$oras_angajat = NULL;
		$sex_angajat = NULL;
		$yearOfBirth = NULL;
		$monthOfBirth = NULL;
		$dateOfBirth = NULL;
		$anAngajare = NULL;
		$lunaAngajare = NULL;
		$ziAngajare = NULL;
		$Id_departament = NULL;
		$Salariu_angajat = NULL;
		$Judet = NULL;
		$submit = NULL;
		
		extract($_POST);
		$data_nasterii = $yearOfBirth."-".$monthOfBirth."-".$dateOfBirth;
		$data_angajarii = $anAngajare."-".$lunaAngajare."-".$ziAngajare;
		$params['nume_angajat'] = $nume_angajat;
		$params['prenume_angajat'] =$prenume_angajat;
		$params['CNP_angajat'] = $CNP_angajat;
		$params['strada_angajat'] = $strada_angajat;
		$params['numar_angajat'] = $numar_angajat;
		$params['sex_angajat'] = $sex_angajat;
		$params['oras_angajat'] = $oras_angajat;
		$params['sex_angajat'] = $sex_angajat;
		$params['Data nasterii'] = $data_nasterii;
		$params['Data angajarii'] = $data_angajarii;
		$params['Id_departament'] = $Id_departament;
		$params['Judet'] = $Judet;
		$params['Salariu_angajat'] = $Salariu_angajat;
			
	
		if(isset($submit) )
		{
			//insert update table here
			$this->model_employee->insert($params);
			redirect('Welcome/index');		
		}
							
	}
	

}

