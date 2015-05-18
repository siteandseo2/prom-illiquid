<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class user_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function add_user($data, $email) {

        $query = $this->db->query("SELECT email FROM user WHERE email='$email'");
        if (empty($query->num_rows() > 0)) {
            if ($this->db->insert('user', $data)) {
                return "200";
            }
        } else {
            return "400";
        }
    }

    function get_user() {
        $this->db->where('user_type', 'user');
        $query = $this->db->get('user');
        return $query->result_array();
    }

    function login_user($email, $password) {
        $query = $this->db->query("SELECT * FROM user WHERE email='$email' AND password='$password'");
        return $query->result_array();
    }

}
