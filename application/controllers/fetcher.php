
<?php
class Fetcher extends CI_Controller{
var $holdID =array();
 function __Construct(){
  parent::__Construct ();
   $this->load->database(); // load database
   $this->load->model('grade'); // load model 
 }
 

// insert new row into ‘users’ MySQL table using the ‘set()’ method

function index(){


$data['p']=$this->grade->fetchme();



//print_r($data['p']);
//exit;
$this->load->view("schools",$data);
//$this->db->where('student.regno=advanced_level.studentid');

}

}