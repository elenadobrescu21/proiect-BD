<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Log_in_existing extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
 }
 
 function index()
 {
   $this->load->helper(array('form'));
   $this->load->view('login_form');
 }
 
}
 
?>