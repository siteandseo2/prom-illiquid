<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('product_m');
        $this->load->library('upload');
        $this->data_user['user'] = @$this->session->userdata('user');
    }

    /* function Add user to database */

    function add_user() {

        if (isset($_POST)) {
            foreach ($this->input->post() as $k => $v) {
                $data[$k] = $v;
            }
            $data['user_type'] = 'user';
            $email = $this->input->post('email');
            if (!empty($data[$k])) {
                $this->load->model('user_model');
                $response = $this->user_model->add_user($data, $email);
            } else {
                $response = '400';
            }
            echo json_encode($response);
        }
    }

    /* END function Add user to database */


    /* function login user from database */

    function get_user() {
        if (isset($_POST['login'])) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $this->load->model('user_model');
            $data['user'] = $this->user_model->login_user($email, $password);
            if (!empty($data['user'])) {
                foreach ($data['user'] as $item) {
                    $session_data['id'] = $item['id'];
                    $session_data['name'] = $item['name'];
                    $session_data['email'] = $item['email'];
                    $session_data['company'] = $item['company'];
                    $session_data['password'] = $item['user_type'];
                }
                $this->session->set_userdata(array('user' => $session_data));
                echo redirect(base_url('cabinet'));
            } else {
                redirect(base_url('registration'));
            }
        } else {
            $this->load->view('templates/header');
            $this->load->view('pages/login');
            $this->load->view('templates/footer');
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
            if ($_FILES["prod_photo"]["size"] > 1024 * 3 * 1024) {
                echo ("Размер файла превышает три мегабайта");
                exit;
            }
            // Проверяем загружен ли файл
            if (is_uploaded_file($_FILES["prod_photo"]["tmp_name"])) {
                // Если файл загружен успешно, перемещаем его
                // из временной директории в конечную
                $this->data['name'] = $this->input->post('prod_name');
                $this->data['image_path'] = '../../../uploads/'.$_FILES["prod_photo"]["name"];
                $this->data['price'] = $this->input->post('prod_price');
                $this->data['subcat_id'] = $this->input->post('prod_subcat');
                $this->data['status'] = 'enable';
                $this->data['description'] = $this->input->post('prod_description');
                $this->data['s_description'] = $this->input->post('prod_s_description');
                $this->data['currency'] = $this->input->post('prod_currency');
                $this->data['availability'] = $this->input->post('prod_is_available');
                $this->data['prod_code'] = $this->input->post('prod_code');
                $this->data['prod_type'] = $this->input->post('prod_type');
                $this->data['prod_quantity'] = $this->input->post('prod_quantity');
                $this->data['id_user'] = $this->data_user['user']['id'];
                move_uploaded_file($_FILES["prod_photo"]["tmp_name"], "./uploads/" . $_FILES["prod_photo"]["name"]);
                if ($this->product_m->add_product($this->data) == true) {
                    redirect(base_url('default'));
                } else {
                    redirect(base_url('add_product'));
                }
            } else {
                echo("Ошибка загрузки файла");                
            }
        }
    }

}
