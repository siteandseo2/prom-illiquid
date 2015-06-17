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
         $this->load->model('user_model');
        if (!empty($this->session->userdata('user'))) {
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
        
        $this->data['location'] = $this->main_m->get_location();
        $this->data['city'] = $this->main_m->get_city();
    }

    function user_data() {
        $this->load->view("pages/cabinet", $this->data);
        $this->load->view("templates/footer", $this->data);
    }

    function add_product() {
        if ($this->data['user']['usercat'] == "seller") {
            $this->data['group_list'] = $this->category_m->focus_product_list();
            $this->load->view("pages/add_product", $this->data);
            $this->load->view("templates/footer", $this->data);
        } else {
            show_404();
        }
    }

}
