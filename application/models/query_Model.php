<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class query_Model extends CI_Model
{
    // public function __construct() { 
    //     parent::__construct();  
    // }

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

    // Update Query For Selected Student
    public function update_row(){
        $today=date('Y-m-d');
        $update_row = array('status' => 'update',);
        // $this->db->where('id', 1);
        $this->db->where('date <', $today);
        $this->db->update('orders', $update_row);
    }

    function update_data($columnToUpdate, $tableToUpdate, $usingCondition)
    {      
        $this->db->where($usingCondition);
        $this->db->update($tableToUpdate, $columnToUpdate);
    }

    // function update_data($where,$table) {
    //     $this->db->where('location',$where);
    //     $this->db->update('orders', $table);
    // }
}
