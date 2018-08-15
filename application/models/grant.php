<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Grant Extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function search($keyword)
    {
        $this->db->like('name',$keyword);
        $this->db->select('*');
        //$this->db->from('marks');
        $query = $this->db->get('school');
        return $query->result();
    
     

 }

}   
