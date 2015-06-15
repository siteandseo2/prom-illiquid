<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of product_m
 *
 * @author baccardi
 */
class Product_m extends CI_Model {

//
    function __construct() {
        parent::__construct();
    }

    function get_all_product() {
        $query = $this->db->get('product');
        return $query->result_array();
    }

    function get_products($link) {
        $query = $this->db->where('link', $link)->select('id')->get('subcategories');
        foreach ($query->result() as $row) {
            $subcat_id = $row->id;
        }
        $query = $this->db->where('subcat_id', $subcat_id)->get('product');
        return $query->result_array();
    }

    function get_product($id) {
        $query = $this->db->where('id', $id)->get('product');
        return $query->result_array();
    }

    function get_product_cat($cat_id) {
        $query = $this->db->where('id', $cat_id)->get('subcategories');
        return $query->result_array();
    }

    function count_products($id) {
        $query = $this->db->where('subcat_id', $id)->get('product');
        return $query->num_rows();
    }

    function get_cat_name($link) {
        $query = $this->db->where('link', $link)->select('cat_id')->get('subcategories');
        foreach ($query->result() as $row) {
            $cat_id = $row->cat_id;
        }
        $query = $this->db->where('id', $cat_id)->select('id, name, link')->get('categories');
        return $query->result_array();
    }

    function get_subcat_name($link) {
        $query = $this->db->where('link', $link)->select('name')->get('subcategories');
        foreach ($query->result() as $row) {
            return $row->name;
        }
    }

    function add_product($data) {
        if ($this->db->insert('product', $data)) {
            return TRUE;
        }
    }

    function get_product_by_subcat_id($id) {
        $query = $this->db->where('subcat_id', $id)->get('product');
        return $query->result_array();
    }

    function search_prod($name) {
        $query = $this->db->like('name', $name)->get('product');
        return $query->result_array();
    }

    function add_order($data) {
        if ($this->db->insert('orders', $data)) {
            return TRUE;
        }
    }

    function get_order() {
        $query = $this->db->get('orders');
        return $query->result_array();
    }
     function get_new_order() {
        $query = $this->db->where('a_status', 'new')->get('orders');
        return $query->result_array();
    }

}
