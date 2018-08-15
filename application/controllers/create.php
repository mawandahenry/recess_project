<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Create extends CI_controller{
		public function __construct(){
		parent::__construct();
		$this->load->database();
        $this->load->model('dataa');

    }

		 public function index(){
		 	$this->load->helper('url');
		 	
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
