<?php
class Emp_model extends CI_Model 
{
	
	function insert_data($data)
	{
        $this->db->insert('emp',$data);
        return true;
	}
	
}