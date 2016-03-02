<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verifylogin extends CI_Controller {
	
	public function __construct() {
	  parent::__construct();
	  $this->load->model('model_user','',TRUE);
	}

	public function index() {
	   $this->load->library('form_validation');
           $this->form_validation->set_rules('username', 'Username', 'trim|required');
	   $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');
		
           if($this->form_validation->run() == FALSE) {
	     redirect('log_in_existing');
	   }
	   else {
	     redirect('home', 'refresh');
           }
	}
	
	function check_database($password) {
  	  $username = $this->input->post('username');
          $password = $this->input->post('password');
          //query the database
          $user_admin = "admin";
          $admin_pass = "admin";
          if(strcmp($username,$user_admin)==0 && strcmp($password, $admin_pass)==0) {
	   redirect('Admin');
	   return TRUE;
          }
	else {
          $result = $this->model_user->login($username, $password);
        if($result) {
        $sess_array = array();
        foreach($result as $row) {
        $sess_array = array(
        	      'id' => $row->client_id,
                      'username' => $row->username,
		      'Nume'=> $row->Nume,
		      'Prenume' => $row->Prenume,
		      'is_logged_in' => TRUE);
       $this->session->set_userdata( $sess_array);
       redirect('home');
       }
      return TRUE;
      }
      else {
       $this->form_validation->set_message('check_database', 'Invalid username or password');
       return false;
     }
   }
 }
}
