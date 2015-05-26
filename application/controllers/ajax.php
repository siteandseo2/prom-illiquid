<?php

class Ajax extends CI_Controller {
    public $data;
    
    function __construct() {
        parent::__construct();
        $this->load->model('category_m');
    }

    public function change_tabs($tab = '1') {        
        $this->data['category_list']=  $this->category_m->get_category_list($tab);
        $json=  json_encode($this->data['category_list']);
        echo $json;
    }

}
