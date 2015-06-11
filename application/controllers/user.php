<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller {

    public $data;

    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('product_m');
        $this->load->model('main_m');
        $this->data_user['user'] = @$this->session->userdata('user');
        if (!empty($this->session->userdata('user'))) {
            $this->data['user'] = @$this->session->userdata('user');
            if ($this->data['user']['usercat'] == "seller") {
                $num = 1;
            } else {
                $num = 2;
            }
            $this->data['menu'] = $this->main_m->get_menu_front($num);
            $this->load->view("templates/header_user", $this->data);
        } else {
            $this->load->view("templates/header");
        }
    }

    /* function Add user to database */

    function add_user() {
        unset($this->data);
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
                $this->data['city'] = $this->input->post('city');
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
                $this->data['city'] = $this->input->post('company_city');
                $this->data['street'] = $this->input->post('company_street');
                $this->data['building'] = $this->input->post('company_building');
            }
            if (!empty($this->data)) {
                $response = $this->user_model->add_user($this->data, $email);
            } else {
                $response = '400';
            }
            echo json_encode($response);
        }
    }

    /* END function Add user to database */


    /* function login user from database */

    function get_user() {
//        $this->data['script'] = "<script src='../../../js/validation.js'></script>";        
        $this->load->view('pages/login');
        $this->load->view('templates/footer', $this->data);
        if (isset($_POST['login'])) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $this->load->model('user_model');
            $this->data['user'] = $this->user_model->login_user($email, $password);
            if (!empty($this->data['user'])) {
                foreach ($this->data['user'] as $item) {
                    $session_data['id'] = $item['id'];
                    $session_data['name'] = $item['name'];
                    $session_data['surname'] = $item['surname'];
                    $session_data['patronymic'] = $item['patronymic'];
                    $session_data['email'] = $item['email'];
                    $session_data['usercat'] = $item['usercat'];
                    $session_data['company'] = $item['company'];
                    $session_data['password'] = $item['user_type'];
                    $session_data['country'] = $item['country'];
                    $session_data['city'] = $item['city'];
                }
                $this->session->set_userdata(array('user' => $session_data));
                redirect(base_url('cabinet'));
            }
        }
    }

    /* END function login user from database  */


    /*  function exit user  */

    function exit_user() {
        if (isset($_POST['logout'])) {
            $this->session->unset_userdata('user');
            redirect(base_url());
        }
    }

    /* END function exit user  */

    function add_product() {
        if (isset($_POST)) {
            unset($this->data);
            if (is_uploaded_file($_FILES["prod_photo_1"]["tmp_name"])) {
                move_uploaded_file($_FILES["prod_photo_1"]["tmp_name"], "./uploads/products/" . $this->data_user['user']['id'] . '_' . $_FILES["prod_photo_1"]["name"]);
                move_uploaded_file($_FILES["prod_photo_2"]["tmp_name"], "./uploads/products/" . $this->data_user['user']['id'] . '_min' . $_FILES["prod_photo_2"]["name"]);
                move_uploaded_file($_FILES["prod_photo_3"]["tmp_name"], "./uploads/products/" . $this->data_user['user']['id'] . '_min' . $_FILES["prod_photo_3"]["name"]);
                move_uploaded_file($_FILES["prod_photo_4"]["tmp_name"], "./uploads/products/" . $this->data_user['user']['id'] . '_min' . $_FILES["prod_photo_4"]["name"]);
                $this->data['name'] = $this->input->post('prod_name');
                $this->data['image_path'] = '../../../uploads/products/' . $this->data_user['user']['id'] . '_' . $_FILES["prod_photo_1"]["name"];
                $this->data['min_img1'] = '../../../uploads/products/' . $this->data_user['user']['id'] . '_min' . $_FILES["prod_photo_2"]["name"];
                $this->data['min_img2'] = '../../../uploads/products/' . $this->data_user['user']['id'] . '_min' . $_FILES["prod_photo_3"]["name"];
                $this->data['min_img3'] = '../../../uploads/products/' . $this->data_user['user']['id'] . '_min' . $_FILES["prod_photo_4"]["name"];
                $this->data['price'] = $this->input->post('prod_price');
                $this->data['subcat_id'] = $this->input->post('prod_subcat');
                $this->data['status'] = 'enable';
                $this->data['description'] = $this->input->post('prod_description');
                $this->data['prod_min_order'] = $this->input->post('prod_min_order');
                $this->data['currency'] = $this->input->post('prod_currency');
                $this->data['prod_code'] = $this->input->post('prod_code');
                $this->data['condition'] = $this->input->post('prod_condition');
                $this->data['ball'] = $this->input->post('ball');
                $this->data['prod_quantity'] = $this->input->post('prod_quantity');
                $this->data['id_user'] = $this->data_user['user']['id'];
                if ($this->product_m->add_product($this->data) == true) {
                    redirect(base_url('default'));
                } else {
                    redirect(base_url('add_product'));
                }
            }
        }
    }

    function account_user($id) {
        unset($this->data);
        $this->data['user'] = $this->session->userdata('user');
        $this->data['location'] = $this->main_m->get_location();
        if (empty($this->session->userdata('user'))) {
            redirect(base_url());
        } else {
            $this->data['user_data2'] = $this->user_model->get_user_by_id($id);
            if ($this->data['user_data2'] == true) {
                foreach ($this->data['user_data2'] as $key => $val) {
                    foreach ($val as $k => $v) {
                        $this->data['user_data'][$k] = $v;
                    }
                }
                $this->load->view('pages/account', $this->data);
                $this->load->view('templates/footer', $this->data);
            } else {
                redirect(base_url('account') . '/' . $this->data['user']['id']);
            }
        }
    }

    function company_info($id) {
        unset($this->data);
        $this->data['user'] = $this->session->userdata('user');
        if ($this->data['user']['id'] == $id) {
            redirect(base_url('account'));
        }
        $this->data['location'] = $this->main_m->get_location();
        if (empty($this->session->userdata('user'))) {
            redirect(base_url());
        } else {
            $this->data['user_data2'] = $this->user_model->get_user_by_id($id);
            if ($this->data['user_data2'] == true) {
                foreach ($this->data['user_data2'] as $key => $val) {
                    foreach ($val as $k => $v) {
                        $this->data['user_data'][$k] = $v;
                    }
                }
                if ($this->data['user']['usercat'] == 'seller') {
                    $this->load->view('pages/company_info', $this->data);
                } else {
                    $this->load->view('pages/view_company', $this->data);
                }
                $this->load->view('templates/footer', $this->data);
            } else {
                redirect(base_url('company_info') . '/' . $this->data['user']['id']);
            }
        }
    }

}
