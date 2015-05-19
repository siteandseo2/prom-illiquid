<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Main extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    /* Main Page USER */

    public function index($page = "default") {
        if (!empty(@$this->session->userdata('user'))) {
            $data['user'] = @$this->session->userdata('user');
            $this->load->view("templates/header_user", $data);
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

    

}
