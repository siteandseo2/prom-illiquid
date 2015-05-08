<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class user_model extends CI_Model {

    function add_user($data, $email) {

        $query = $this->db->query("SELECT email FROM user WHERE email='$email'");
        if (empty($query->result_array())) {
            if ($this->db->insert('user', $data)) {
                return "200";
            }
        }else{
            return "400";
        }
    }

    function get_user($email) {
        $query = $this->db->query("SELECT name FROM user WHERE email='$email'");
        return $query->result_array();
//        $query = $this->db->query("SELECT * FROM user WHERE email='$email'");
//        return $query->result_array();
    }

}
