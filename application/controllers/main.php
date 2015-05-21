<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Main extends CI_Controller {

    public $data = '';

    function __construct() {
        parent::__construct();
    }

    /* Main Page USER */

    public function index($page = "default") {

        if (!empty($this->session->userdata('user'))) {
            $this->data['user'] = @$this->session->userdata('user');
            $this->load->view("templates/header_user", $this->data);
        } else {
            $this->load->view("templates/header");
        }
        if (!file_exists(APPPATH . '/views/pages/' . $page . '.php')) {
            show_404();
        } else {
            if ($page == "default") {
                $this->load->model('Catalog_m');
                $this->data['list'] = $this->Catalog_m->category_list();
            }
            $this->load->view("pages/$page", $this->data);         
            
        }
        $this->load->view("templates/footer");
    }

    /* END Main Page USER */
}
