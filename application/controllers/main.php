<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Main extends CI_Controller {

    public $data = '';

    function __construct() {
        parent::__construct();
         $this->load->model('user_model');
        $this->load->model('main_m');
        /* load header */
        if (!empty($this->session->userdata('user'))) {
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
        /* load category_m */

        $this->load->model('main_m');
        $this->load->model('category_m');
        $this->load->model('subcategories_m');
        $this->data['list'] = $this->subcategories_m->get_subcategories_list();

        $this->data['subcategory_img'] = $this->subcategories_m->get_subcategories_limit12();

        $this->data['partner'] = $this->main_m->get_partners();
        $this->data['group_list'] = $this->category_m->focus_product_list();
        $this->data['location'] = $this->main_m->get_location();
        $this->data['city'] = $this->main_m->get_city();
        /* load subcategories_m */
    }

    /* Main Page USER */

    public function index($page = "default") {


        if (!file_exists(APPPATH . '/views/pages/' . $page . '.php')) {

            if (!file_exists(APPPATH . '/views/userpages/' . $page . '.php')) {
                show_404();
            }
        } else {
            $this->data['slider'] = $this->main_m->get_slider_item();
            $this->load->view("pages/$page", $this->data);
        }        
        $this->data['script'] = "<script src='../../../js/perfect-scrollbar.jquery.js'></script><script src='../../../js/main.js'></script>";
        $this->load->view("templates/footer", $this->data);
    }

    /* END Main Page USER */
}
