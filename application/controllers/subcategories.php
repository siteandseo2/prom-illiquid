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
    public $script;

    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('main_m');
        $session = $this->session->userdata('user');
        if (!empty($session)) {
            $this->data['user'] = @$this->session->userdata('user');
            $this->data['user_category'] = $this->user_model->get_usercat_byID($this->data['user']['id']);
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
        $this->load->model('main_m');
        $this->script['location'] = $this->main_m->get_location();
        $this->data['location'] = $this->main_m->get_location();
        $this->data['city'] = $this->main_m->get_city();
        $this->script['script'] = "<script src='../../../js/validation.js'></script>"
                . "<script src='../../../js/ajax_select.js'></script>"
                . "<script src='../../../js/perfect-scrollbar.jquery.js'></script>"
                . "<script src='../../../js/autoComplete.js'></script>"
                . "<script src='../../../js/main.js'></script>"
                . "<script src='../../../js/cart.js'></script>"
                . "<script src='../../../js/ajax_select.js'></script>"
                . "<script src='../../../js/bootstrap-switch.js'></script>"
                . "<script src='../../../js/main_nav.js'></script>"
                . "<script src='../../../js/switcher.js'></script>"
                . "<script src='../../../js/sidebar.js'></script>";
    }

    function get_all_subcat() {
        $this->data['subcategories'] = $this->subcategories_m->get_subcategories_list();
        $sub = $this->data['subcategories'];
        if (!empty($sub)) {
            foreach ($this->data['subcategories'] as $k => $arr) {
                $id[] = $arr['id'];
            }
            foreach ($id as $k => $v) {
                $this->data['count'][$v] = $this->product_m->count_products($v);
            }
        }
        $this->load->view("pages/subcategories", $this->data);
        $this->load->view("templates/footer", $this->script);
    }

    function get_subgategory($name = '') {
        $this->data['category'] = $this->category_m->get_category_name($name);
        $this->data['link'] = $name;
        $this->data['subcategories'] = $this->subcategories_m->get_subcategories($name);
        $sub = $this->data['subcategories'];
        if (!empty($sub)) {
            foreach ($this->data['subcategories'] as $k => $arr) {
                $id[] = $arr['id'];
            }
            foreach ($id as $k => $v) {
                $this->data['count'][$v] = $this->product_m->count_products($v);
            }
        }
        $this->load->view("pages/subcategories", $this->data);
        $this->load->view("templates/footer", $this->script);
    }

}
