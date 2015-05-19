<?php

class Catalog_m extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function category_list() {
        $query = $this->db->query("SELECT id,name,type FROM categories");
        return $query->result_array();
    }

    

}
