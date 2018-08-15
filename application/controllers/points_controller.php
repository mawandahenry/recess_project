
<?php
class points_controller extends CI_Controller{
var $holdID =array();
 function __Construct(){
  parent::__Construct ();
   $this->load->database(); // load database
   $this->load->model('points_model'); // load model 
 }
 

// insert new row into ‘users’ MySQL table using the ‘set()’ method

function index(){
    


$data['points']=$this->points_model->get_points();



//count($data['points']);
//exit;
$this->load->view("points_view",$data);
//$this->db->where('student.regno=advanced_level.studentid');

}

}