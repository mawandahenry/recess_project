<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dataa extends CI_model{
	public function __construct(){
		parent::__construct();

	}



	
	
	
 function enter($a,$b,$c)
  {
    $this->db->insert('course',array('courseName'=>$a,'courseCod'=>$b,'cutoff'=>$c));
  }
  
 }


