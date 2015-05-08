<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller {

    function add_user() {

        if (isset($_POST)) {
            // Получаем все пост данные
            foreach ($this->input->post() as $k => $v) {
                $data[$k] = $v;
            }
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

    function get_user() {
        $this->load->view("templates/header");
        $this->load->model('user_model');
        $data['user'] = $this->user_model->get_user();
        $this->load->view("pages/registration", $data);
        $this->load->view("templates/footer");
    }

}
