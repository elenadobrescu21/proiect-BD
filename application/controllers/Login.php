<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct() {
	  parent::__construct();
	  $this->load->model(array('model_employee', 'model_departament', 'model_serviciu', 'model_user'));
	}


	public function login_form() {
	  $this->load->view('login_form');
	}
	
	public function register_form() {
	  $this->load->view('register_page');
	}
	
	
	public function create_member() {
	  $this->load->library('form_validation');
	  $msg="";
	  $this->form_validation->set_rules('first_name', 'Nume', 'trim|required');
	  $this->form_validation->set_rules('last_name', 'Prenume', 'trim|required');
	  $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
	  $this->form_validation->set_rules('telephone', 'Telephone', 'trim|required');
	  $this->form_validation->set_rules('username', 'Username', 'trim|required');
	  $this->form_validation->set_rules('password', 'Password', 'trim|required');
	  $this->form_validation->set_rules('password_confirm', 'Password confirmation', 'trim|required|matches[password]');
	  if($this->form_validation->run() == FALSE ) {
	    $msg ="error";
	  } else {
	     $this->model_user->create_user();
	     $this->load->view('register_success');
	   } 		
		
	}
}
