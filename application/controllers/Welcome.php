<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('contact');
		//$this->load->view('angajati');
		//$this->load->model(array('model_employee'));
		//$data['dt'] = $this->model_employee->get_all_employees();
		//$data['ang'] = $this->model_employee->count_all_employees();
	    //$this->load->view('lista_angajati', $data);
		$this->load->view('front_page.html');
	}
	
	public function register_employee() {
		
		/*$this->load->library('form_validation');
		
		$this->form_validation->set_rules('Nume', 'first name', 'trim|required|min_length[3]|max_length[40]|xss_clean');
		$this->form_validation->set_rules('Prenume', 'last name', 'trim|required|min_length[3]|max_length[40]|xss_clean');
		$this->form_validation->set_rules('CNP', 'CNP', 'trim|required|min_length[13]|max_length[13]|xss_clean');
		$this->form_validation->set_rules('Strada', 'Strada', 'trim|required|min_length[3]|max_length[40]|xss_clean');
		$this->form_validation->set_rules('Numar', 'Numar', 'trim|required|min_length[3]|max_length[40]|xss_clean');
		$this->form_validation->set_rules('Oras', 'Oras', 'trim|required|min_length[3]|max_length[40]|xss_clean');
		$this->form_validation->set_rules('Judet', 'judet', 'trim|required|min_length[3]|max_length[40]|xss_clean');
		$this->form_validation->set_rules('Sex', 'sex');
		
		if($this->form_validation->run() == FALSE) {
			$this->load->view('contact');
			
		}
		else {
			$this->load->model('model_employee');
			$result = $this->model_employee->insert_employee();
			$this->load->view('successful_employee');
		} */
		
			
		
	}
}
