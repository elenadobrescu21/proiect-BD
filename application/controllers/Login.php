<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
		public function __construct() {
		parent::__construct();
		
		$this->load->model(array('model_employee', 'model_departament', 'model_serviciu', 'model_user'));
		
	}

	public function index()
	{
		//$this->load->view('register_page');
	}
	public function login_form() {
		$this->load->view('login_form');
	}
	
	/*public function validate_credentials() {
		//$this->load->view('login_form');
		$this->load->model('model_user');
		$query = $this->model_user->validate();
		
		if($query) {
			$data = array(
			'username' => $this->input->post('username'),
			'is_logged_in' =>true);
			$this->session->set_userdata($data);
			
		if($this->form_validation->run() == FALSE)
		   {
			 //Field validation failed.  User redirected to login page
			 $this->load->view('login_form');
		   }
		   else
		   {
			 //Go to private area
		     $this->load->view('members_only');
		   }
		 
			//$this->load->view('members_only');
		}
		
	} */
	
	public function create_member() {
		
		$this->load->library('form_validation');
		$this->load->view('register_page');
		//validation rules
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
		} else
		{
			$this->model_user->create_user();
			$this->load->view('register_success');
			
		} 		
		
	}
}
