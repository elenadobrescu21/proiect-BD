<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
 
 }
 
 function index()
 {
	 
	 $id = $this->session->userdata('id');
	 $username = $this->session->userdata('username'); 
	  $data = array(
         'id' => $id,
         'username' => $username,
       );
	$this->load->view('home_view', $data );
	$is_logged_in = $this->session->userdata('is_logged_in');
    if( $is_logged_in != true) {
		echo "you don't have permission to acces";
		die();
	} 
 }
 
 
 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('welcome', 'refresh');
 }
 
}
 
?>