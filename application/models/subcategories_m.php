<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of subcategories_m
 *
 * @author baccardi
 */
class subcategories_m extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_subcategories_list() {
        $query = $this->db->get('subcategories');
        return $query->result_array();
    }
/*????????????????????????*/
    function get_cat_id($id) {
        $catid = $this->db->query("SELECT cat_id FROM subcategories WHERE id='$id'");
        return $catid->num_rows();
    }
/*????????????????????????*/
    function add_subcategory($data) {
        $this->db->insert('subcategories', $data);
    }

    function get_subcategories($name) {
        $id = $this->db->where("link", $name)->select('id')->get('categories');
        foreach ($id->result() as $row) {
            $cat_id = $row->id;
        }
        $query = $this->db->where("cat_id", $cat_id)->get('subcategories');
        return $query->result_array();
    }

}
