<?php
class Crud_model extends CI_Model
{
	/*View*/
	// crud_model/display_records
	function display_records()
	{
		// get table in db
		$query = $this->db->get("users");
		return $query->result();
	}
}
