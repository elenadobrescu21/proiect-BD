<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model(array('model_employee', 'model_departament', 'model_serviciu', 'model_user'));
		$data['deps'] = $this->model_departament->get_all_departments();

		$this->load->view('front_page', $data);
	}
	

}
