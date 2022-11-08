<?php
class Emp_model extends CI_Model 
{
	
	function saverecords($data)
	{
        $this->db->insert('emp',$data);
        return true;
	}
	
}