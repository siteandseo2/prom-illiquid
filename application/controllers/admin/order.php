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

    function __construct() {
        parent::__construct();
        if (!empty($this->session->userdata('admin'))) {
            $this->data['admin'] = $this->session->userdata('admin');
            $this->load->view("admin/header", $this->data);
        }


        /* load menu */



        /* load categories */
        $this->load->model('category_m');

        /* load users */

        $this->load->model('user_model');

        /* load focus product */


        /* load subcategories list */
        $this->load->model('subcategories_m');


        /* load main_m */
        $this->load->model('main_m');
        /* load product_m */
        $this->load->model('product_m');
        $this->data['count_order'] = $this->product_m->get_new_order();
    }

    function order_status() {
        if (isset($_POST)) {
            foreach ($this->input->post('status') as $key => $val) {
                if ($val == 'new') {
                    $this->db->query("UPDATE orders SET a_status='view' WHERE id='$key'");
                }
            }
        }
        redirect(base_url('admin/new_orders'));
    }

}