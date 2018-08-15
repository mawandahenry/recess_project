<?php

class Csa extends CI_Model {
    
    function __construct() {
        parent::__construct();
        
    }
    
    function get_addressbook() {     
        $query = $this->db->get('advanced_level');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return FALSE;
        }
    }
    
    function insert_csv($data) {
        $this->db->insert('advanced_level', $data);
    }
}
/*END OF FILE*/
