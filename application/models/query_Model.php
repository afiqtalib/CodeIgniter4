<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class query_Model extends CI_Model
{
    // public function __construct() { 
    //     parent::__construct();  
    // }

    // function update_data($where,$table) {
    //     $this->db->where('location',$where);
    //     $this->db->update('orders', $table);
    // }

    public function nakOrder() {
        $today=date('Y-m-d');
        $this->db->select('*');
        $this->db->from('orders');
        $this->db->where('date >=',$today);
        $this->db->order_by('date', 'asc');

        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }

    // Update Query For Selected Student
    public function update_order($id,$data){
        $this->db->where('id', $id);
        $query=$this->db->update('orders', $data);
        return $query->result();
    }

    public function getDataOrders()
    {
        // get table in db
        $query = $this->db->get("orders");
        return $query->result_array();
    }
}
