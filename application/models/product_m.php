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

    function get_product($id) {
        $query = $this->db->where('id', $id)->get('product');
        return $query->result_array();
    }
   
     function get_product_cat($cat_id) {
        $query = $this->db->where('id', $cat_id)->get('subcategories');
        return $query->result_array();
    }
}
