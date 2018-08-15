<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pass extends CI_Controller {

 function __construct()
    {
        parent::__construct();
        
    }

    function search_keyword()

    {   $this->load->model('grant');
        $keyword = $this->input->post('keyword');
        $data['results']=$this->grant->search($keyword);
       // print_r($data['results']);
       // exit;
        
        if ($data['results'] ) {
            $this->load->view('school',$data);
      
} 
else{
       redirect('poop');  

    }
    }
    function logout()
     
        {
            
        $this->session->sess_destroy();
        redirect('login','refresh');
          
    
}
}

