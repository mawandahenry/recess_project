<?php
class Studentupload extends CI_Controller {

    function __construct() {
        parent::__construct();
        // $this->load->database(); // load database
        $this->load->model('su');
        $this->load->library('csvimport');
        $this->load->helper('form');
    }

    function index($var = null) {
        $data['student'] = $this->su->uploadnames();
        $this->load->view('ddd',$data);
    }

    function importcsv() {
        $data['student'] = $this->su->uploadnames();
        $data['error'] = '';    //initialize file upload error array to empty

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = '10000000';

        $this->load->library('upload', $config);


        // If upload failed, display error
        if (!$this->upload->do_upload()) {
            $data['error'] = $this->upload->display_errors();

            $this->load->view('ddd', $data);
        } else {
            $file_data = $this->upload->data();
            $file_path =  './uploads/'.$file_data['file_name'];
            
            if ($this->csvimport->get_array($file_path)) {
                $csv_array = $this->csvimport->get_array($file_path);
                foreach ($csv_array as $row) {
                    $insert_data = array(
                        
                        //'RegNo'=>$row['RegNo'],
                        'fname'=>$row['fname'],
                        'sname'=>$row['sname'],
                        'gender'=>$row['gender'],
                        'IndexNo'=>$row['IndexNo'],
                        'schoolid'=>$row['schoolid'],
                        'courseNo'=>$row['courseNo'],
                        
                        
                    );
                    $this->su->insert($insert_data);
                }
                $this->session->set_flashdata('primary', 'Your data is successfully uploaded');
               //$this->index();
               redirect("http://localhost/vem/index.php/studentupload/index");
               // echo "<pre>"; print_r($insert_data);
            } else 
                $data['error'] = "Error occured";
                $this->load->view('ddd');
            }
            
        } 

}


