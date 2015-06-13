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
class Subcategories extends CI_Controller {

    public $data;

    function __construct() {
        parent::__construct();

        $this->load->model('main_m');
        if (!empty($this->session->userdata('user'))) {
            $this->data['user'] = @$this->session->userdata('user');
//            $access=3;
            if ($this->data['user']['usercat'] == "seller") {
                $num = 1;
            } else {
                $num = 2;
            }
            $this->data['menu'] = $this->main_m->get_menu_front($num);
            $this->load->view("templates/header_user", $this->data);
        } else {
            $this->load->view("templates/header");
        }
        $this->load->model('subcategories_m');
        $this->load->model('category_m');
        $this->load->model('product_m');
    }

    function get_all_subcat() {
        $this->data['subcategories'] = $this->subcategories_m->get_subcategories_list();
        if (!empty($this->data['subcategories'])) {
            foreach ($this->data['subcategories'] as $k => $arr) {
                $id[] = $arr['id'];
            }
            foreach ($id as $k => $v) {
                $this->data['count'][$v] = $this->product_m->count_products($v);
            }
        }
        $this->load->view("pages/subcategories", $this->data);
        $this->load->view("templates/footer", $this->data);
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
        $this->load->view("templates/footer", $this->data);
    }

}
