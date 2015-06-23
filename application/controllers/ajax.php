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

    /* function Add user to database */

    function add_user() {
        if (isset($_POST)) {
            $this->data['usercat'] = $this->input->post('usercat');
            $this->data['user_type'] = 'user';
            $this->data['name'] = $this->input->post('name');
            $this->data['surname'] = $this->input->post('surname');
            $this->data['patronymic'] = $this->input->post('patronymic');
            $this->data['password'] = $this->input->post('password');
            if ($this->data['usercat'] == 'buyer') {
                $this->data['company'] = "NULL";
                $this->data['email'] = $this->input->post('email');
                $this->data['phone'] = $this->input->post('phone');
                $this->data['country'] = $this->input->post('country');
                $location_id = $this->input->post('location');
                $this->data['location'] = $this->user_model->get_location($location_id);
                $city = $this->input->post('city');
                $this->data['city'] = $this->user_model->get_city($city);
                $this->data['street'] = $this->input->post('street');
                $this->data['building'] = $this->input->post('building');
                $email = $this->input->post('email');
            } else {
                $email = $this->input->post('company_email');
                $this->data['company'] = $this->input->post('company');
                $this->data['email'] = $this->input->post('company_email');
                $this->data['phone'] = $this->input->post('company_phone');
                $this->data['phone_more'] = $this->input->post('company_phone_more');
                $this->data['country'] = $this->input->post('company_country');
                $location_id = $this->input->post('location');
                $this->data['location'] = $this->user_model->get_location($location_id);
                $city = $this->input->post('company_city');
                $this->data['city'] = $this->user_model->get_city($city);
                $this->data['street'] = $this->input->post('company_street');
                $this->data['building'] = $this->input->post('company_building');
            }
            if (!empty($this->data)) {
//                    date_default_timezone_set('Etc/UTC');
                $mail = new PHPMailer();
                $mail->isSMTP();
                $mail->Encoding = '7bit';
                $mail->CharSet = 'utf-8';
                $mail->setLanguage('ru', 'mailer/language');
                $mail->Host = 'smtp.gmail.com';
                $mail->Port = 587;
                $mail->SMTPSecure = 'tls';
                $mail->SMTPAuth = true;
                $mail->Username = 'illiquid.siteandseo@gmail.com';
                $mail->Password = 'illiquid2015';
                $mail->FromName = "PROM_ILLIQUID";
                $mail->setFrom('PROM_ILLIQUID', '');
                $mail->addReplyTo('PROM_ILLIQUID', '');
                $mail->addAddress($email, '');
                $mail->Subject = 'Данные для входа';
                $mail->Body = 'Ваш логин: ' . $email . '<br/> Ваш Пароль: ' . $this->input->post('password');
                $mail->AltBody = 'Ваш логин: ' . $email . ' <br/> Ваш Пароль: ' . $this->input->post('password');
                $mail->addAttachment('img/logo-regular.png');
                if ($mail->send()) {
                    
                }
                $response = $this->user_model->add_user($this->data, $email);
            } else {
                $response = '400';
            }
            echo json_encode($response);
            unset($response, $this->data, $city, $email, $location_id);
        }
    }

    /* END function Add user to database */
}
