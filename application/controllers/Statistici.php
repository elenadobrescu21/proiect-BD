<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Statistici extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->model(array('model_employee', 'model_departament', 'model_serviciu', 'model_user', 'model_comanda'));
   $this->load->helper('url');
 }
 
 function index()
 {
	
	$data['deps'] = $this->model_departament->get_all_departments();
    $this->load->view('statistici', $data);
 }
 
  	function get_comenzi($data){
		
		
        $this->load->model('model_comanda','', TRUE);   
		
		  $this->output
           ->set_content_type("application/json")
         ->set_output(json_encode($this->model_comanda->get_comanda_by_data($data)));
    
    } 	
	
	function get_angajati($data) {
		
		
        $this->load->model('model_employee','', TRUE);   
	   
		$pieces = explode("_", $data);
		if(sizeof($pieces) == 3) {
			$nume_dep = $pieces[0] . ' ' . $pieces[1];
			$salariu = $pieces[2];
		} else {
		$nume_dep = $pieces[0];
		$salariu = $pieces[1];
		}
		  $this->output
           ->set_content_type("application/json")
         ->set_output(json_encode($this->model_employee->get_employees_dep_salariu($nume_dep, $salariu)));
		
	}
	
	function get_comenzi_by_angajat($data) {
		$this->load->model('model_employee','', TRUE);   
	   
		$pieces = explode("_", $data);
		$nume = $pieces[0];
		$prenume = $pieces[1];
		  $this->output
           ->set_content_type("application/json")
         ->set_output(json_encode($this->model_employee->get_toate_comenzile($nume, $prenume)));
		
	}
	
	function comenzi_by_departament($departament) {
		
		$this->load->model('model_employee','', TRUE);  

		if (strpos($departament, '_') !== FALSE) {
			$pieces = explode("_", $departament);
			$departament = $pieces[0]. ' ' . $pieces[1];
		}
		
		  $this->output
           ->set_content_type("application/json")
         ->set_output(json_encode($this->model_employee->get_angajati_dupa_nr_comenzi($departament)));
    
		
	}
	
	function numar_angajati_in_departament($departament) {
		
		$this->load->model('model_employee','', TRUE);  

		if (strpos($departament, '_') !== FALSE) {
			$pieces = explode("_", $departament);
			$departament = $pieces[0]. ' ' . $pieces[1];
		}
		
		  $this->output
           ->set_content_type("application/json")
         ->set_output(json_encode($this->model_employee->count_angajati_in_departament($departament)));
    
		
	}
 

 
}
 
?>