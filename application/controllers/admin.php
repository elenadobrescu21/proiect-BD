<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Admin extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
    $this->load->model(array('model_employee', 'model_departament', 'model_serviciu'));
 }
 
 function index()
 {
   $this->load->view('admin_view');
   	$data['dt'] = $this->model_employee->get_all_employees();
	$data['ang'] = $this->model_employee->count_all_employees();
 }
 
}
 
?>