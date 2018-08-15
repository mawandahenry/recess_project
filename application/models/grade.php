<?php
class Grade extends CI_Model {
 
 function fetchme(){
  
  
  
  $this->db->select('student.fname, student.sname,
  school.region, school.name,student_points.total');
  
 $this->db->from('student');
 	
     
    $this->db->join('school', 'school.schoolid= student.schoolid');
    $this->db->join('student_points', 'student_points.RegNo= student.RegNo');
    //count('total', 20);
	//$this->db->GROUP_BY('school.region');
	//$this->db->order_by('total','DESC');
    
	$this->db->where('total', 20);
	$query = $this->db->get();
    
   return $query->result();

  
    

   }
   
   
 }

	
 



 
 
   
 

	
 









?>





