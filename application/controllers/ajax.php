<?php

class Ajax extends CI_Controller {

    public $data;

    function __construct() {
        parent::__construct();
        $this->load->model('category_m');
        $this->load->model('subcategory_m');
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
//    public function filter_by_category($id){
//        $subcat_list=$this->subcategory_m->get_subcategories_list_by_category($id);
//        $json=array();
//        foreach ($subcat_list as $num => $column){             
//            foreach($column as $name =>$value){
//                $json[$name][$num]=$value;
//            }
//        }
//        echo json_encode($json);        
//    }
//    public function filter_by_subcategory($id){
//        $product_list=$this->product_m->get_product_by_subcat_id($id);
//        $json=array();
//        foreach ($product_list as $num => $column){             
//            foreach($column as $name =>$value){
//                $json[$name][$num]=$value;
//            }
//        }
//        echo json_encode($json);        
//    }

}
