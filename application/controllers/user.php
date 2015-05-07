<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller {

//    public $err;
//    public $company;
//    public $id;
//    protected $email;
//    protected $name;
//    protected $password;
//    private function Valid($param, $e = true) {
//
//        if (!empty($param)) {
//            $elem = trim(strip_tags($param));
//            if ($e == true) {
//                $elem = preg_replace("/[^a-zA-ZА-Яа-я0-9\s]/", "", $elem);
//                if (preg_match("/[a-zA-ZА-Яа-я0-9]/", $elem)) {
//                    return $elem;
//                }
//            } else {
//                if (preg_match('/\S+@\S+\.\S+/', $elem)) {
//                    return $elem;
//                }
//            }
//        } else {
//            $this->err .= "Заполните все поля формы";
//        }
//        return $this->err;
//    }
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
