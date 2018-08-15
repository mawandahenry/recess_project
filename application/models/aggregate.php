<?php
class aggregate extends CI_Model {
 
 function get_aggregate($id){
	 $condition = "ordinary_level.id = '" . $id . "'";
	$this->db->select('*');
	$this->db->from('ordinary_level');
    $this->db->where($condition);
   $query=$this->db->get();
   return $query->result();
 }
 
		
}

?>