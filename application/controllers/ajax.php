<?php

class Ajax extends CI_Controller {

    public $data;

    function __construct() {
        parent::__construct();
        $this->load->model('category_m');
    }

    public function change_tabs($tab = '1') {
        $categories = $this->category_m->get_category_list($tab);
        $json=array();
        foreach ($categories as $num => $column){             
            foreach($column as $name =>$value){
                $json[$name][$num]=$value;
            }
        }
        echo json_encode($json);
    }

}
