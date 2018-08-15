<?php 
class Aggregate_control extends CI_Controller{
	 
 function __Construct(){
  parent::__Construct ();
   $this->load->database(); // load database
   $this->load->model('aggregate'); // load model 
 }
function index(){
	
}
	
	public function compute_aggregate(){
		$id=$this->input->post('id');
		$data['names']=$this->aggregate->get_aggregate($id);
		//print_r($data);
		//exit;
		$this->load->view('aggregates_view',$data);
}
}