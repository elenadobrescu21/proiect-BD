<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_form extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model(array('model_employee', 'model_departament', 'model_serviciu', 'model_user'));	
	}

	public function index() {
		$data['deps'] = $this->model_departament->get_all_departments(); 
		$this->load->view('test_form', $data);
	}
	
	function add_all(){
        #Validate entry form information
		$msg="";
        $this->load->model('Model_form','', TRUE);
		$this->form_validation->set_rules('f_dep', 'Departament', 'required');
        $this->form_validation->set_rules('f_serviciu', 'Serviciu', 'required');
        if ($this->form_validation->run() == FALSE) {        
            $msg = "error";
			echo $msg;
        }
        else {      
            $this->load->view('successful_employee');
        }
    } 
	
	function get_services($departament){
		
		
		$departament_id = $departament;
        $this->load->model('Model_form','', TRUE);    
		 $this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->Model_form->get_servicii_by_departament($departament_id)));
      /*  header('Content-Type: application/x-json; charset=utf-8');
		$data = $this->Model_form->get_servicii_by_departament($departament);
            echo(json_encode($data)); */
    } 	
}
