<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Pupu extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
 }
 
 function index()
 {
   $this->load->helper(array('form'));
   $this->load->view('index3');
 }
 function reload(){

 	$this->load->view('githubview');
 }

 
}
 
?>
