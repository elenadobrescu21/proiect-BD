<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Formular_comanda extends CI_Controller {
 
 function __construct() {
   parent::__construct();
   $this->load->model(array('model_employee', 'model_departament', 'model_serviciu', 'model_user', 'model_comanda'));
 }
 
 function index() {
   $id = $this->session->userdata('id');
   $username = $this->session->userdata('username'); 
   $nume = $this->session->userdata('Nume');
   $prenume = $this->session->userdata('Prenume');
   $data = array(
        'id' => $id,
        'username' => $username,
	'Nume' => $nume,
	'Prenume' => $prenume
	);

  $data['deps'] = $this->model_departament->get_all_departments();
  $data['servicii'] = $this->model_serviciu->get_all_services();
  $this->load->view('formular_comanda', $data );
  $is_logged_in = $this->session->userdata('is_logged_in');
  if( $is_logged_in != true) {
	echo "you don't have permission to acces";
	die();
	} 
 }
 
  function add_to_comanda() {
    $submit = NULL;
    $client_id = NULL;
    $serviciu = NULL;
    $angajat = NULL;
    $luna = NULL;
    $data = NULL;
    $ora = NULL;
	  
    extract($_POST);
	  
    $params['Id_client'] = $client_id;
    $params['Id_serviciu'] = $serviciu;
    $params['Id_angajat'] = $angajat;
    $params['luna'] = $luna;
    $params['ziua'] = $data;
    $params['ora'] = $ora;
    if(isset($submit) ) {
	$this->model_comanda->create_comanda($params);
	redirect('home');		
	}
    }
  
   function get_angajati($serviciu) {
     $serviciu_id = $serviciu;
     $this->load->model('model_employee','', TRUE);    
     $this->output
           ->set_content_type("application/json")
           ->set_output(json_encode($this->model_employee->get_angajati_by_service($serviciu_id)));
   } 	
 
  function logout() {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('welcome', 'refresh');
  }
 
}
 
?>
