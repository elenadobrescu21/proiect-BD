<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lista_servicii extends CI_Controller {
	
	public function __construct() {
	  parent::__construct();
	  $this->load->model(array('model_employee', 'model_departament', 'model_serviciu', 'model_user'));
	}

	public function index() {
	  $data['deps'] = $this->model_departament->get_all_departments(); 
	  $this->load->view('servicii_home', $data);
	}
	
	function get_services($departament) {
	  $departament_id = $departament;
          $this->load->model('Model_serviciu','', TRUE);    
		 $this->output
                 ->set_content_type("application/json")
                 ->set_output(json_encode($this->Model_serviciu->get_servicii_by_departament($departament_id)));
    } 	
	
}
