<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of subcategories_front
 *
 * @author baccardi
 */
class Subcategories_front extends CI_Controller {

    public $data;

    function __construct() {
        parent::__construct();
        if (!empty($this->session->userdata('user'))) {
            $this->data['user'] = @$this->session->userdata('user');
            $this->load->view("templates/header_user", $this->data);
        } else {
            $this->load->view("templates/header");
        }
        $this->load->model('subcategories_m');
        $this->load->model('category_m');
        $this->load->model('product_m');
    }

    function get_subgategory($name = '') {
        $this->data['category'] = $this->category_m->get_category_name($name);
        $this->data['link'] = $name;
        $this->data['subcategories'] = $this->subcategories_m->get_subcategories($name);
        if (!empty($this->data['subcategories'])) {
            foreach ($this->data['subcategories'] as $k => $arr) {
                $id[] = $arr['id'];
            }
            foreach ($id as $k => $v) {
                $this->data['count'][$v] = $this->product_m->count_products($v);
            }
        }
        $this->load->view("pages/subcategories", $this->data);
        $this->load->view("templates/footer");
    }

}
