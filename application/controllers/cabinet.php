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

    public $script;

    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $session = $this->session->userdata('user');
        if (!empty($session)) {
            $this->data['user'] = @$this->session->userdata('user');
            $this->data['user_category'] = $this->user_model->get_usercat_byID($this->data['user']['id']);
            $this->load->model('main_m');
            $this->load->model('category_m');
            $this->load->model('subcategories_m');
            $this->load->model('product_m');
            if ($this->data['user']['usercat'] == "seller") {
                $num = 1;
            } else {
                $num = 2;
            }
            $this->data['menu'] = $this->main_m->get_menu_front($num);
            $this->load->view("templates/header_user", $this->data);
        } else {
            redirect(base_url('login'));
        }
        $this->script['location'] = $this->main_m->get_location();
        $this->data['location'] = $this->main_m->get_location();
        $this->data['city'] = $this->main_m->get_city();
    }

    function user_data() {
        $this->script['script'] = "<script src='../../../js/validation.js'></script>"
                . "<script src='../../../js/ajax_select.js'></script>"
                . "<script src='../../../js/perfect-scrollbar.jquery.js'></script>"
                . "<script src='../../../js/autoComplete.js'></script>"
                . "<script src='../../../js/main.js'></script>"
                . "<script src='../../../js/cart.js'></script>"
                . "<script src='../../../js/ajax_select.js'></script>"
                . "<script src='../../../js/bootstrap-switch.js'></script>"
                . "<script src='../../../js/main_nav.js'></script>"
                . "<script src='../../../js/switcher.js'></script>";
        $this->load->view("pages/cabinet", $this->data);
        $this->load->view("templates/footer", $this->script);
        unset($this->script, $this->data);
    }

    function add_product() {
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
                . "<script src='../../../js/products.js'></script>";
        if ($this->data['user']['usercat'] == "seller") {
            $this->data['group_list'] = $this->category_m->focus_product_list();
            $this->load->view("pages/add_product", $this->data);
            $this->load->view("templates/footer", $this->script);
            unset($this->script, $this->data);
        } else {
            unset($this->script, $this->data);
            show_404();
        }
    }

}
