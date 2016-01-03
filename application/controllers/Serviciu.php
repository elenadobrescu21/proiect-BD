<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Serviciu extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		
		$this->load->model(array('model_employee', 'model_departament', 'model_serviciu'));
		
	}
	
	public function lista_servicii() {
		$data['serv'] = $this->model_serviciu->serviciu_departament();
		$this->load->view('lista_servicii', $data);
	}
	
	public function index () {
		
		$data['departament'] = $this->model_departament->get_all_departments();
		$this->load->view('adauga_serviciu', $data);
		$Nume_serviciu = NULL;
		$id_departament = NULL;
		$Pret = NULL;
		$submit = NULL;
		extract($_POST);		
		$params['Nume_serviciu'] = $Nume_serviciu;
		
		$params['Pret'] = $Pret;
		$params['id_departament'] = $id_departament;
		
	
		if(isset($submit) )
		{
			//insert update table here
			$this->model_serviciu->insert_serviciu($params);
			redirect('Serviciu/lista_servicii');
		}
		//$this->load->view('adauga_departament');
	}
	

}