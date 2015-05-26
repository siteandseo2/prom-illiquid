<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of product
 *
 * @author baccardi
 */
class Product extends CI_Controller {

    public $data = '';
    public $data_db = '';
    public $subcat_id = '';
    public $script='';

    function __construct() {
        parent::__construct();
        /* load header */
        if (!empty($this->session->userdata('user'))) {
            $this->data['user'] = @$this->session->userdata('user');
            $this->load->view("templates/header_user", $this->data);
        } else {
            $this->load->view("templates/header");
        }
        /* load model product */
        $this->load->model('product_m');
        $this->data['products'] = $this->product_m->get_all_product();
        $this->script['script'] = "<script src='../../../js/jquery.fancybox.pack.js'></script><script src='../../../js/product_settings.js'></script>";
    }

    function get_all_product() {
        $this->load->view("pages/products", $this->data);
        $this->load->view("templates/footer");
    }

    function get_product($id) {
        $this->data_db['product'] = $this->product_m->get_product($id);
        $this->data_db['cat_name'] = $this->product_m->get_product_cat($this->data_db['product']['0']['subcat_id']);
        $this->load->view("pages/item", $this->data_db);
        $this->load->view("templates/footer", $this->script);
    }

}
