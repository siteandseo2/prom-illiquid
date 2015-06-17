<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of order
 *
 * @author baccardi
 */
class Order extends CI_Controller {

    public $data_db;
    public $data;
    public $prep;

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
            $this->data['location'] = $this->main_m->get_location();
            $this->data['city'] = $this->main_m->get_city();
            $this->data['menu'] = $this->main_m->get_menu_front($num);
            $this->load->view("templates/header_user", $this->data);
        } else {
            $this->load->view("templates/header");
        }
    }

    function add_order() {
        if (isset($_POST['send'])) {

            $this->data_db['name'] = $this->input->post('h_name');
            $this->data_db['price'] = $this->input->post('h_price');
            $this->data_db['currency'] = $this->input->post('h_currency');
            $this->data_db['quantity'] = $this->input->post('quantity');
            $this->data_db['item_id'] = $this->input->post('h_id');

            $this->prep['buyer']['name'] = $this->input->post('name');
            $this->prep['buyer']['surname'] = $this->input->post('surname');
            $this->prep['buyer']['email'] = $this->input->post('email');
            $this->prep['buyer']['phone'] = $this->input->post('phone');
            $this->prep['adr']['location'] = $this->input->post('location');
            $this->prep['adr']['city'] = $this->input->post('city');
            foreach ($this->data_db['item_id'] as $id) {
                $a[] = $this->user_model->get_user_by_id($this->product_m->get_user_by_product($id));
                foreach ($a as $num => $column) {
                    foreach ($column as $name => $value) {
                        $this->data_db['type_of_deliverance'][$id] = $this->input->post('type_of_deliverance');
                        $this->data_db['type_of_order'][$id] = $this->input->post('type_of_order');
                        $this->data_db['status'][$id] = 'Новый';
                        $this->data_db['a_status'][$id] = 'new';
                        $this->data_db['seller_data'][$id] = serialize($value);
                        $this->data_db['adress'][$id] = serialize($this->prep['adr']);
                        $this->data_db['buyer_data'][$id] = serialize($this->prep['buyer']);
                        $this->data_db['date'][$id] = date('Y-m-d H:i:s');
                    }
                }
            }

            foreach ($this->data_db as $num => $column) {
                foreach ($column as $name => $value) {
                    $json[$name][$num] = $value;
                }
            }
            
            foreach ($json as $k => $v) {
                $this->product_m->add_order($v);
            }
//            redirect(base_url('default'));
        }
    }

}
