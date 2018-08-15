<?php
     class Pp extends CI_Controller {
         function __construct() {
        parent::__construct();
         $this->load->model('chartsmodel');
         $this->load->helper('form');
        
    }
         public function index() {
             $data['schoolnames'] = $this->chartsmodel->getschoolnames();
             
             if ($this->input->post('names')){
                 $name = $this->input->post('names');
                 $regNo = $this->chartsmodel->getregno($name);
                 $students = $this->chartsmodel->getdata($regNo['schoolid']);
                 
                 $totalboys= 0;
                 $totalgirls = 0;
                 foreach ($students as $key => $value) {
                       $studentdetails = $this->chartsmodel->getsex($value['studentid']);
                    // print_r($value['studentid']);
                   // exit();
                     if ($studentdetails['gender'] == 'male' && $value['grade'] == 'A'){
                         $totalboys++;
                     }elseif($studentdetails['gender'] == 'female' && $value['grade'] == 'A'){
                         $totalgirls++;
                     }
                 }
                 $data['males'] = $totalboys;
                 $data['females'] = $totalgirls;
                 
             }
             
             $this->load->view('pie', $data);
         }
         

         
     }






?>


