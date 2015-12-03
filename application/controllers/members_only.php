<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members_only extends CI_Controller {
	
		public function __construct() {
		parent::__construct();
		
		$this->load->model(array('model_employee', 'model_departament', 'model_serviciu', 'model_user'));
		
	}

	public function index()
	{
		$this->load->view('members_only');
	}
	
}