<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Main extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    /* Main Page */

    public function index($page = "default") {
        $this->load->view("templates/header");        
        if (!file_exists(APPPATH . '/views/pages/' . $page . '.php')) {
            show_404();
        } else {
            $this->load->view("pages/$page");
        }
        $this->load->view("templates/footer");
    }

}
