<?php

class Catalog_m extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function category_list() {
        $query = $this->db->query("SELECT id,name,status,link,fp_id FROM categories");
        return $query->result_array();
    }

    function add_category($data) {
        $this->db->insert('categories', $data);
    }

    function focus_product_list() {
        $query = $this->db->query("SELECT id,name,status FROM focus_products");
        return $query->result_array();
    }
    function add_focus_product($data){
         $this->db->insert('focus_products', $data);
    }

}
