<?php
class Csv extends CI_Controller {

    function __construct() {
        parent::__construct();
        // $this->load->database(); // load database
        $this->load->model('csv_model');
        $this->load->library('csvimport');
        $this->load->helper('form');
    }

    function index($var = null) {
        $data['ordinary_level'] = $this->csv_model->get_addressbook();
        $this->load->view('good',$data);
    }

    function importcsv() {
        $data['ordinary_level'] = $this->csv_model->get_addressbook();
        $data['error'] = '';    //initialize file upload error array to empty

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = '10000000';

        $this->load->library('upload', $config);


        // If upload failed, display error
        if (!$this->upload->do_upload()) {
            $data['error'] = $this->upload->display_errors();

            $this->load->view('good', $data);
        } else {
            $file_data = $this->upload->data();
            $file_path =  './uploads/'.$file_data['file_name'];
            
            if ($this->csvimport->get_array($file_path)) {
                $csv_array = $this->csvimport->get_array($file_path);
                foreach ($csv_array as $row) {
                    $insert_data = array(
                        'schoolid'=>$row['schoolid'],
                        'studentid'=>$row['studentid'],
                        'subjectid'=>$row['subjectid'],
                        'P1'=>$row['P1'],
                        'P2'=>$row['P2'],
                        'P3'=>$row['P3'],
                        'average'=>$row['average'],
                        'aggregate'=>$row['aggregate'],
                        'Year'=>$row['Year'],
                        
                    );
                    $this->csv_model->insert_csv($insert_data);
                }
                $this->session->set_flashdata('success', 'Data successfully imported');
               //$this->index();
               redirect("http://localhost/work/index.php/csv/index");
               // echo "<pre>"; print_r($insert_data);
            } else 
                $data['error'] = "Error occured";
                $this->load->view('good');
            }
            
        } 

}


