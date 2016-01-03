<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Departament extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		
		$this->load->model(array('model_employee', 'model_departament'));
		
	}
	
	public function lista_departamente() {
		$data['dt'] = $this->model_departament->departament_manager();
		$data['nr_ang'] = $this->model_departament->count_angajati_in_dep();
		$this->load->view('lista_departamente', $data);
	}
	
	public function index () {
		
		$data['dt'] = $this->model_employee->get_all_employees();
		$this->load->view('adauga_departament', $data);
		$Nume_dep = NULL;
		$Id_manager = NULL;
		$submit = NULL;
		extract($_POST);		
		$params['Nume_dep'] = $Nume_dep;
		$params['Id_manager'] = $Id_manager;
		echo $params['Id_manager'];
		if(isset($submit) )
		{
			//insert update table here
			$this->model_departament->insert_departament($params);
		}
		//$this->load->view('adauga_departament');
	}
}