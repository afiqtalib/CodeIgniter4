<?php
    class Auth_model extends CI_Model
    {
        // public function __construct()
        // {
        //     parent::__construct();
                
        // }

        // get data to display_records
        public function get_display_records()
        {
            // get table in db
            $query = $this->db->get("users");
            return $query->result();
        }
    }

?>