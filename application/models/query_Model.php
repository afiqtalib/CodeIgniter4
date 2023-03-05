<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
class query_Model extends CI_Model
{
    public function __construct() {
        // parent::__construct();
    }

    public function getDataOrders()
    {
        $query = $this->db->get('orders');
        $result = $query->result_array();
        return $result;
    }

    public function getDataOrders1() {
        $this->db->select('*');
        $this->db->from('orders');
        $this->db->order_by('date', 'asc');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }

    // Update data Specific table
    public function update_row(){
        $today=date('Y-m-d');
        $update_row = array('status' => 'update',);
        $this->db->where('id', 1);
        $this->db->where('date <', $today);
        $this->db->update('orders', $update_row);
    }

    function update_data($columnToUpdate, $tableToUpdate, $usingCondition)
    {      
        $this->db->where($usingCondition);
        $this->db->update($tableToUpdate, $columnToUpdate);
    }

    /* SELECT ALL ROWS */
	
	function get_all_rows($table, $where = false, $order_by = false, $like = false, $group_by = false)
    {
        $this->db->select('*');
        $this->db->from($table);

        if($where!=false){
        	$this->db->where($where);
        }
           
		if($like!=false){
            $this->db->like($like); 
        }
		   
		if($group_by!=false){
		   	$this->db->group_by($group_by);
		}
			
        if($order_by!=false){
            $this->db->order_by($order_by[0], $order_by[1]);
        }
        $query = $this->db->get();
        return $query->result_array(); 
    }

    /* SELECT SPECIFIED ROW */
	 
    function get_specified_row($table, $where = false, $order_by = false, $like = false, $group_by = false)
    {    
        $this->db->select('*');
        $this->db->from($table);

        if($where != false)
        {
             $this->db->where($where); 
        }
		
		if($like != false){
            $this->db->like($like); 
        }
		   
		if($group_by != false){
		   	$this->db->group_by($group_by);
		}
		
        if($order_by != false)
        {
            $this->db->order_by($order_by[0], $order_by[1]);
        }

        $query = $this->db->get();
        return $query->row_array();    
    }
}
?>