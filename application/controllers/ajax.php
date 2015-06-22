<?php

class Ajax extends CI_Controller {

    public $data;

    function __construct() {
        parent::__construct();
        $this->load->model('category_m');
        $this->load->model('subcategories_m');
        $this->load->model('product_m');
        $this->load->model('main_m');
        $this->load->model('user_model');
        $this->script['location'] = $this->main_m->get_location();
        $this->data['location'] = $this->main_m->get_location();
        $this->data['city'] = $this->main_m->get_city();
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
        unset($categories, $json, $num, $column, $name, $value);
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
        unset($subcat_list, $json, $num, $column, $name, $value);
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
        unset($cat_list, $json, $num, $column, $name, $value, $id);
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
        unset($cat_list, $json, $num, $column, $name, $value, $id);
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
        unset($menu_list, $json, $num, $column, $name, $value, $type);
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
//        unset($menu_list, $json, $num, $column, $name, $value, $id);
    }

    function change_role() {
        if (isset($_GET['id'])) {
            if ($_GET['id'] == "1") {
                $num = 1;
                $type = 'seller';
            }
            if ($_GET['id'] == "0") {
                $num = 2;
                $type = 'buyer';
            }
            $this->data['user'] = $this->session->userdata('user');

            $session_data['id'] = $this->data['user']['id'];
            $session_data['name'] = $this->data['user']['name'];
            $session_data['surname'] = $this->data['user']['surname'];
            $session_data['patronymic'] = $this->data['user']['patronymic'];
            $session_data['email'] = $this->data['user']['email'];
            $session_data['phone'] = $this->data['user']['phone'];
            $session_data['company'] = $this->data['user']['company'];
            $session_data['password'] = $this->data['user']['password'];
            $session_data['country'] = $this->data['user']['country'];
            $session_data['city'] = $this->data['user']['city'];
            $this->data['user_category'] = 'seller';
            unset($this->data['user']);

            $session_data['usercat'] = $type;

            $this->session->set_userdata(array('user' => $session_data));
            $this->data['user'] = @$this->session->userdata('user');
            $this->data['menu'] = $this->main_m->get_menu_front($num);
            $this->load->view("templates/header_ajax", $this->data);
            unset($session_data, $type, $num);
        }
    }

}
