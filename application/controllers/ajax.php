<?php

class Ajax extends CI_Controller {

    public $data;

    function __construct() {
        parent::__construct();
        $this->load->model('category_m');
        $this->load->model('subcategories_m');
        $this->load->model('product_m');
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
    public function filter_by_category(){
        $id=$_GET['id'];
        $subcat_list=$this->subcategories_m->get_subcategories_by_category($id);
        $json=array();
        foreach ($subcat_list as $num => $column){             
            foreach($column as $name =>$value){
                $json[$name][$num]=$value;
            }
        }
        echo json_encode($json);        
    }
    public function filter_by_group(){
        $id=$_POST['id'];      
        $cat_list=$this->category_m->get_category_listby_id($id);
        $json=array();
        foreach ($cat_list as $num => $column){             
            foreach($column as $name =>$value){
                $json[$name][$num]=$value;
            }
        }
        print_r($json);
//        echo json_encode($json);        
    }
    

}
