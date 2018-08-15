<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Github extends CI_model{
	public function __construct(){
		parent::__construct();

	}
	
   
    function double($search){
    
    $condition="IndexNo='".$search."'";
    $this->db->select ('*, sum(value) as TOTAL');
    $this->db->from ('student');
    $this->db->join('advanced_level', 'student.RegNo=advanced_level.studentid');
    $this->db->join('weight', 'weight.grade1=advanced_level.grade');
    //$this->db->select_sum('value');
   //$query= $this->db->get_where('student',array('IndexNo' =>$search ) );
    $this->db->group_by('advanced_level.studentid');
    //$this->db->where($condition);
    $query= $this->db->get();
	return $query->result_array();

   
     
    }
}
  
  
  
    






 