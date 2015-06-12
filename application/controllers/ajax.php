<?php

class Ajax extends CI_Controller {

    public $data;

    function __construct() {
        parent::__construct();
        $this->load->model('category_m');
        $this->load->model('subcategories_m');
        $this->load->model('product_m');
        $this->load->model('main_m');
    }

    public function change_tabs($tab = '1') {
        $categories = $this->category_m->get_category_list($tab);
        $json = array();
        foreach ($categories as $num => $column) {
            foreach ($column as $name => $value) {
                $json[$name][$num] = $value;
            }
        }
        echo json_encode($json);
    }

    public function filter_by_category() {
        $id = $_POST['id'];
        $subcat_list = $this->subcategories_m->get_subcategories_by_category($id);
        $json = array();
        foreach ($subcat_list as $num => $column) {
            foreach ($column as $name => $value) {
                if ($name == 'id') {
                    $name = 'link';
                }
                $json[$name][$num] = $value;
            }
        }
        echo json_encode($json);
    }

    public function filter_by_group() {
        $id = $_POST['id'];
        $cat_list = $this->category_m->get_category_listby_id($id);
        $json = array();
        foreach ($cat_list as $num => $column) {
            foreach ($column as $name => $value) {
                $json[$name][$num] = $value;
            }
        }
        echo json_encode($json);
    }

    public function filter_by_categories() {
        $id = $_POST['id'];
        $cat_list = $this->subcategories_m->get_subcategories_by_cat_id($id);
        $json = array();
        foreach ($cat_list as $num => $column) {
            foreach ($column as $name => $value) {
                $json[$name][$num] = $value;
            }
        }
        echo json_encode($json);
    }

    public function change_item_menu() {
        $type = $_POST['id'];
        $menu_list = $this->main_m->get_parent($type);
        $json = array();
        foreach ($menu_list as $num => $column) {
            foreach ($column as $name => $value) {
                if ($name == 'id') {
                    $name = 'link';
                }
                $json[$name][$num] = $value;
            }
        }
        echo json_encode($json);
    }

    public function change_location() {
        $id = $_POST['id'];
        $menu_list = $this->main_m->get_city_by_id($id);
        $json = array();
        foreach ($menu_list as $num => $column) {
            foreach ($column as $name => $value) {
                $json[$name][$num] = $value;
            }
        }
        echo json_encode($json);
    }

    function change_role() {
        if (isset($_GET['id'])) {
            if ($_GET['id'] == "1") {
                $num = 1;
            } else {
                $num = 2;
            }
            $this->data['user'] = @$this->session->userdata('user');
            $this->data['menu'] = $this->main_m->get_menu_front($num);
            $this->load->view("templates/header_user", $this->data);
        }
    }

}
