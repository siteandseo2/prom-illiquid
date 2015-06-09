<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Main extends CI_Controller {

    public $data = '';

    function __construct() {
        parent::__construct();
        $this->load->model('main_m');
        /* load header */
        if (!empty($this->session->userdata('user'))) {
            $this->data['user'] = @$this->session->userdata('user');
            $this->data['menu'] = $this->main_m->get_menu();
            $this->load->view("templates/header_user", $this->data);
        } else {
            $this->load->view("templates/header");
        }
        /* load category_m */
        $this->load->model('main_m');
        $this->load->model('category_m');
        $this->load->model('subcategories_m');
        $this->data['list'] = $this->subcategories_m->get_subcategories_list();
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
            switch ($page) {
                case 'default':
                     $this->data['slider'] = $this->main_m->get_slider_item();
                    $this->data['script'] = "<script src='../../../js/autoComplete.js'></script><script src='../../../js/perfect-scrollbar.jquery.js'></script>
<script src='../../../js/main.js'></script><script src='../../js/main_tabs.js'></script>";
                    break;
                case'registration':
                    $this->data['script'] = "<script src='../../../js/validation.js'></script>";
                    break;
                case'account':
                    $this->data['script'] = "<script src='../../../js/perfect-scrollbar.jquery.js'></script><script src='../../../js/main.js'></script>";
                    break;
                default :
                    $this->data['script'] = "<script src='../../../js/perfect-scrollbar.jquery.js'></script><script src='../../../js/main.js'></script>";
                    break;
            }

            $this->load->view("pages/$page", $this->data);
        }
        $this->load->view("templates/footer", $this->data);
    }

    /* END Main Page USER */
}
