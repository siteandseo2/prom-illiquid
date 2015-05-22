<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin
 *
 * @author baccardi
 */
class Admin extends CI_Controller {

    public $data;

    function __construct($page = 'index') {
        parent::__construct();
        if (!empty($this->session->userdata('admin'))) {
            $this->data['admin'] = $this->session->userdata('admin');
            $this->load->view("admin/header", $this->data);
        } else {
            $this->load->view("pages/auth_admin");
        }


        /* load categories */

        $this->load->model('catalog_m');
        $this->data['cat_list'] = $this->catalog_m->category_list();

        /* load users */

        $this->load->model('user_model');
        $this->data['user'] = $this->user_model->get_user();

        /* load focus product */

        $this->data['fpl'] = $this->catalog_m->focus_product_list();
    }

    /*  function login admin  */

    function get_admin() {
        if (!empty($this->session->userdata('admin'))) {
            redirect(base_url('admin/index'));
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $this->load->model('user_model');
            $data['admin'] = $this->user_model->login_user($email, $password);
            if (!empty($data['admin'])) {
                foreach ($data['admin'] as $item) {
                    $session_data['name'] = $item['name'];
                    $session_data['email'] = $item['email'];
                    $session_data['user_type'] = $item['user_type'];
                }
                $this->session->set_userdata(array('admin' => $session_data));
                redirect(base_url('admin/index'));
            } else {
                $this->load->view("pages/auth_admin");
            }
        }
    }

    /* END function login admin  */

    /* Main Page ADMIN */

    function admin_pages($page = 'index') {
        if (!empty(@$this->session->userdata('admin'))) {
            if (!file_exists(APPPATH . '/views/admin/' . $page . '.php')) {
                show_404();
            } else {
                $this->load->view("admin/$page", $this->data);
            }
        } else {
            $this->load->view("pages/auth_admin");
        }
    }

    /* END Main Page ADMIN */


    /*  function exit user  */

    function exit_user() {
        if (isset($_POST['logout'])) {
            $this->session->unset_userdata('admin');
            redirect(base_url());
        }
    }

    /* END function exit user  */
}
