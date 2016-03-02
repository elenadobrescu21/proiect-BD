<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Echipa extends CI_Controller {
	
	public function __construct() {
	parent::__construct();
	$this->load->model(array('model_employee', 'model_departament', 'model_serviciu', 'model_user'));
		
	}

	public function index() {
	$data['ang_meditatii'] = $this->model_employee->select_info_aditionale_meditatii();
	$data['ang_curatenie'] = $this->model_employee->select_info_aditionale_curatenie();
	$data['ang_ingrijire'] = $this->model_employee->select_info_aditionale_ingrijire();
	$this->load->view('echipa', $data);
	}
	
	
}
