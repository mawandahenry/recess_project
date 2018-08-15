<?php
class DDA extends CI_Controller {

    function __construct() {
        parent::__construct();
        // $this->load->database(); // load database
        $this->load->model('csa');
        $this->load->library('csvimport');
        $this->load->helper('form');
    }

    function index($var = null) {
        $data['advanced_level'] = $this->csa->get_addressbook();
        $this->load->view('good2',$data);
    }

    function importcsv() {
        $data['advanced_level'] = $this->csa->get_addressbook();
        $data['error'] = '';    //initialize file upload error array to empty

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = '10000000';

        $this->load->library('upload', $config);


        // If upload failed, display error
        if (!$this->upload->do_upload()) {
            $data['error'] = $this->upload->display_errors();

            $this->load->view('good2', $data);
        } else {
            $file_data = $this->upload->data();
            $file_path =  './uploads/'.$file_data['file_name'];
            
            if ($this->csvimport->get_array($file_path)) {
                $csv_array = $this->csvimport->get_array($file_path);
                foreach ($csv_array as $row) {
                    $insert_data = array(
                        
                        'schoolid'=>$row['schoolid'],
                        'studentid'=>$row['studentid'],
                        'subjectcode'=>$row['subjectcode'],
                        'P1'=>$row['P1'],
                        'P2'=>$row['P2'],
                        'P3'=>$row['P3'],
                        'grade'=>$row['grade'],
                        
                        
                    );
                    $this->csa->insert_csv($insert_data);
                }
                $this->session->set_flashdata('success', 'Your data is successfully uploaded');
               //$this->index();
               redirect("http://localhost/vem/index.php/DDA/index");
               // echo "<pre>"; print_r($insert_data);
            } else 
                $data['error'] = "Error occured";
                $this->load->view('good2');
            }
            
        } 

}


