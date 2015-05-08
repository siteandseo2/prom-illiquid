<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class user_model extends CI_Model {

    function add_user($data) {
        foreach ($data as $item) {
            
        }
//        if ($this->db->insert('user', $data)) {
//            return true;
//        }
    }

    function get_user($email) {
        $query = $this->db->query("SELECT * FROM user WHERE email='$email'");
        return $query->result_array();
    }
}
