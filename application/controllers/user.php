<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller {

    function add_user() {

        if (isset($_POST['register'])) {
            $data['name'] = $_POST['name'];
            $data['email'] = $_POST['email'];
            $data['password'] = $_POST['password'];
            $data['company'] = $_POST['company'];
            $this->load->model('user_model');
            $this->user_model->add_user($data);
        } else {
            $this->load->view("templates/header");
            $this->load->view("pages/registration");
            $this->load->view("templates/footer");
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
