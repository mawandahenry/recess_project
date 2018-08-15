<?php
class PostModel extends CI_Model {
 
 function getPosts($id){
  
  
  
  $this->db->select('*');
  
 $this->db->from('student');
 	$condition="IndexNo='".$id."'";
    $this->db->join('advanced_level', 'advanced_level.studentid = student.RegNo'); 
    $this->db->join('subject', 'subject.subjectCode = advanced_level.subjectcode');
	//$this->db->join('course', 'course.courseId = student.courseNo');
	$this->db->join('weight', 'weight.grade1 = advanced_level.grade');
	$this->db->where($condition);
	$query = $this->db->get();
    
   return $query->result();
   
   
 }
  function get_weight($id){
	 $condition = "student.IndexNo = '" . $id . "'";
	$this->db->select('subject.subjectName,weight.value');
    $this->db->from('student');
	$this->db->join('advanced_level','advanced_level.studentid=student.RegNo');
	$this->db->join('weight','weight.grade1=advanced_level.grade');   
	$this->db->join('subject','subject.SubjectCode=advanced_level.subjectcode');
	
	$this->db->where($condition);
   $query=$this->db->get();
   return $query->result();
 }
 function get_courses(){
		
		$this->db->select('courseName,cutoff');
		$this->db->from('course');
		$query=$this->db->get();
		return $query->result();
	}
 
 
 
}

?>



