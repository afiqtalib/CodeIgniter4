<?php
class query_Model extends CI_Model
{

	// INSERT MODEL FOR HELP.WASAP.MY
	// for simple project to collect customer problem into table cust_services
	function save_records($data)
	{
        // table name - "cust_services"
        $this->db->insert('cust_services',$data);
        return true;
	}

}
