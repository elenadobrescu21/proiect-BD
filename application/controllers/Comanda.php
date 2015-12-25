<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comanda extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		
		$this->load->model(array('model_employee', 'model_departament', 'model_serviciu', 'model_user', 'model_comanda'));
		
	}
	
	public function index () {
		
		$data['comenzi'] = $this->model_comanda->get_detalii_comanda();
		$this->load->view('lista_comenzi', $data);
	}
}