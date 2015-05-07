<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class user_model extends CI_Model {

    function add_user($data) {
        if ($this->db->insert('user', $data)) {
            return true;
        }
    }

    function get_user() {
        $query = $this->db->get('user');
        return $query->result_array();
    }

}
