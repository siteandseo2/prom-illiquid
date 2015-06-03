<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cabinet
 *
 * @author baccardi
 */
class Cabinet extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!empty($this->session->userdata('user'))) {
            $this->data['user'] = @$this->session->userdata('user');            
            $this->data['script'] = "<script src='../../../js/perfect-scrollbar.jquery.js'></script><script src='../../../js/main.js'></script><script src='../../../js/validation.js'></script><script src='../../js/products.js' type='text/javascript'></script>";
            $this->load->view("templates/header_user", $this->data);
            $this->load->model('category_m');
            $this->load->model('subcategories_m');
            $this->load->model('product_m');            
        } else {
            redirect(base_url('login'));
        }
    }

    function user_data() {
        $this->load->view("pages/cabinet", $this->data);
        $this->load->view("templates/footer", $this->data);
    }

    function add_product() {
        
        $this->data['group_list']=$this->category_m->focus_product_list();
        $this->load->view("pages/add_product", $this->data);
        $this->load->view("templates/footer", $this->data);
    }

}
