<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class user_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function add_user($data, $email) {

        $query = $this->db->query("SELECT email FROM user WHERE email='$email'");
        $x = $query->num_rows();
        if (empty($x)) {
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

    function get_user_by_id($id) {
        if (isset($id)) {
            $query = $this->db->where('id', $id)->get('user');
            return $query->result_array();
        } else {
            echo 'FAIL';
        }
    }

    function get_usercat_byID($id) {
        $query = $this->db->where('id', $id)->select('usercat')->get('user');
        foreach ($query->result() as $row) {
            return $row->usercat;
        }
    }

    function get_location($id) {
        $query = $this->db->where('id', $id)->select('name')->get('city');
        foreach ($query->result() as $row) {
            return $row->name;
        }
    }

    function get_city($id) {
        $query = $this->db->where('id', $id)->select('name')->get('locality');
        foreach ($query->result() as $row) {
            return $row->name;
        }
    }

}
