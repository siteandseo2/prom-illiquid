<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() {
        parent::__construct();
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
                $this->session->set_userdata(array('user'=>$session_data));
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
    
}
