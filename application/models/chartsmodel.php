<?php
   class ChartsModel extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
	}
    
    public function getschoolnames(){
        $this->db->select('name');
        $query = $this->db->get('school');
        
        return $query->result_array();
        
        
    }
    
    public function getregno($name){
        $this->db->select('schoolid');
        $this->db->where('name',$name);
        $query = $this->db->get('school');
        
        return $query->row_array();
        
    }
    
    public function getdata($regno){
        $this->db->where('schoolid', $regno);
        $query = $this->db->get('advanced_level');
        
        return $query->result_array();
    }
    
    public function getsex($id){
        $this->db->select('gender');
        $this->db->where('RegNo',$id);
        
        
        $query=$this->db->get('student');
         return $query->row_array();
         
        
        
        
        
    }
    
   }





?>
