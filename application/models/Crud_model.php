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

	// INSERT MODEL FOR HELP.WASAP.MY
	// for simple project to collect customer problem into table cust_services
	function saverecords($data)
	{
        $this->db->insert('cust_services',$data);
        return true;
	}

}
