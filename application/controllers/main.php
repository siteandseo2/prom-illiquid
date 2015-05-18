<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Main extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    /* Main Page USER */

    public function index($page = "default") {
        if (!empty($this->session->userdata('email'))) {
            $this->load->view("templates/header_user");
        } else {
            $this->load->view("templates/header");
        }
        if (!file_exists(APPPATH . '/views/pages/' . $page . '.php')) {
            show_404();
        } else {
            if ($page == "default") {
                $this->load->model('Catalog_m');
                $data['list'] = $this->Catalog_m->category_list();
            }
            $this->load->view("pages/$page", $data);
        }
        $this->load->view("templates/footer");
    }

    /* END Main Page USER */


    /* Main Page ADMIN */

    public function admin($page = 'index') {
        if ($this->session->userdata('user_type') == 'admin') {
            if (!file_exists(APPPATH . '/views/admin/' . $page . '.php')) {
                show_404();
            } else {
                $this->load->view("admin/header");
                $this->load->view("admin/$page");
            }
        } else {
            $this->load->view("pages/auth_admin");
        }
    }

    /* END Main Page ADMIN */
}
