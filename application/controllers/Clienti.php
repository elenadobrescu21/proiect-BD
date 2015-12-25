<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Clienti extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->model(array('model_employee', 'model_departament', 'model_serviciu', 'model_user'));
 }
 
 function index()
 {
	
	$data['clients'] = $this->model_user->get_all_clients();
	$data['TotalClienti'] = $this->model_user->count_all_clients();
	$data['faraComenzi'] = $this->model_user->clienti_fara_comenzi();
    $this->load->view('lista_clienti', $data);
 }
 
  	function get_clienti($numar_comenzi){
		
		
        $this->load->model('model_user','', TRUE);    
		 $this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->model_user->clienti_x_comenzi($numar_comenzi)));
    
    } 	
 

 
}
 
?>