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
       
//        $a= $this->foreachByKey($a, $id);
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
        $query = $this->db->where('id', $cat_id)->select('name, link')->get('categories');
        return $query->result_array();
    }

    function get_subcat_name($link) {
        $query = $this->db->where('link', $link)->select('name')->get('subcategories');
        foreach ($query->result() as $row) {
            return $row->name;
        }
    }

}
