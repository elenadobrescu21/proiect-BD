<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Angajati extends CI_Controller {
 
 function __construct() {
   parent::__construct();
   $this->load->model(array('model_employee', 'model_departament', 'model_serviciu'));
 }
 
 function index() {
   $data['ang_dep'] = $this->model_employee->angajat_departament();
   $data['ang'] = $this->model_employee->count_all_employees();
   $this->load->view('lista_angajati', $data);
 }
 
  function show_angajat_id() {
    $id = $this->uri->segment(3);
    $data['angajati'] = $this->model_employee->get_all_employees();
    $data['single_angajat'] = $this->model_employee->show_angajat_id($id);
    $this->load->view('adauga_info_aditionale', $data);
  }
  
  
  function adauga_info_aditionale() {
    $config['upload_path'] = "./images/";
    $config['allowed_types'] = 'jpg|jpeg|gif|png';
    $config['encrypt_name'] = true;
    $filename = 'poza_angajat';
    $this->load->library('upload', $config);
    $id= $this->input->post('did');
    $msg ="";
    $fields = array(
	     'Id_angajat'=> $id,
	     'studii_angajat' => $this->input->post('studii_angajat'),
	     'descriere_angajat' => $this->input->post('descriere_angajat'),
	      'link_facebook' => $this->input->post('link_facebook'));
	
	
    if(!$this->upload->do_upload($filename)) {
      $msg = "error";
			
    }
    else {
      $data = $this->upload->data();
      $this->model_employee->insert_info_aditionale($data['file_name'], $fields);
      redirect('Admin');
  }
}
}
 
?>
