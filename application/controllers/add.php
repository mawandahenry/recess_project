<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Add extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
 }
 
 function index()
 {
     $this->load->model('dataa');
    
    
   
 }
 public function adduser(){
	$a = $this->input->post('code');
	$b = $this->input->post('ess1');
	$c = $this->input->post('cutoff');
	
	$data['posts'] = $this->dataa->enter($a, $b, $c);
	if ($data){
		
	redirect('start');
	}
	else{
	
	redirect('account','refresh');
}
 
}
}
 
?>
