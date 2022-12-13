<?php
class query_Model extends CI_Model
{

    function update_data($where,$table) {
        $this->db->where('location',$where);
        $this->db->update('orders', $table);
    }

}
