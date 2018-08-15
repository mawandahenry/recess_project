<?php
class Points_model extends CI_Model {
 
 function get_points(){
  
  
  
  $this->db->select('student.IndexNo,student.fname,student.sname,weight.value,advanced_level.grade,advanced_level.
  studentid,school.region, school.name,sum(value) as total');
  
 $this->db->from('student');
 	
    $this->db->join('advanced_level', 'advanced_level.studentid = student.RegNo'); 
    $this->db->join('subject', 'subject.subjectCode = advanced_level.subjectcode');
	//$this->db->join('course', 'course.courseId = student.courseNo');
	$this->db->join('weight', 'weight.grade1 = advanced_level.grade');
	$this->db->join('school', 'school.schoolid= advanced_level.schoolid');
	$this->db->GROUP_BY('student.RegNo');
	$this->db->order_by('total','DESC');
	$this->db->where('student.RegNo=advanced_level.studentid');
	$query = $this->db->get();
    
   return $query->result();

  
    

   }
   
   
 }

	
 



 
 
   
 

	
 









?>



