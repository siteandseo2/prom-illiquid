<?php

class Ajax extends CI_Controller {
    public $data;
    
    function __construct() {
        parent::__construct();
        $this->load->model('category_m');
    }

    public function change_tabs($tab = '1') {        
        $categories=  $this->category_m->get_category_list($tab);
        echo json_encode($categories);         
    }

}
