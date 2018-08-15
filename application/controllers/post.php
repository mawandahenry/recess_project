<?php
class Post extends CI_Controller {
 
 function __Construct(){
  parent::__Construct ();
   $this->load->database(); // load database
   $this->load->model('postmodel'); // load model 
 }
 
 public function index() {
$id=$this->input->post('id');
$data['posts'] = $this->postmodel->getPosts($id); 
$data['values']=$this->postmodel->get_weight($id);
$data['courses']=$this->postmodel->get_courses();
//print_r($data['posts']);
//print_r($data['values']);
//print_r($data['courses']);
//exit;
if ($data['posts']) {

	$this->load->view('posts_view', $data);
	
}

else{
	redirect('poop');

// calling Post model method getPosts()
 // load the view file , we are passing $data array to view file
 	
 }
 
 

}
      


}

?>