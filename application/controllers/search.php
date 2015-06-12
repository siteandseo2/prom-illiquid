<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Search
 *
 * @author baccardi
 */
class Search extends CI_Controller {

    public $data;

    function __construct() {
        parent::__construct();
        $this->load->model('product_m');
        $this->load->model('main_m');
        $this->load->model('subcategories_m');
        $this->load->model('category_m');
        /* load header */
        if (!empty($this->session->userdata('user'))) {
            $this->data['user'] = @$this->session->userdata('user');
            $this->data['menu'] = $this->main_m->get_menu();
            $this->load->view("templates/header_user", $this->data);
        } else {
            $this->load->view("templates/header");
        }
        /* load sidebar_data */
        $this->data['subcat'] = $this->subcategories_m->get_subcategories_list();
        $this->data['prepare'] = $this->category_m->category_list();
        foreach ($this->data['prepare'] as $key => $value) {
            foreach ($this->data['subcat'] as $k => $v) {
                if ($v['cat_id'] == $value['id']) {
                    $this->data['cat_list'][$value['name']][$value['link']][$v['link']][$v['name']] = $this->product_m->count_products($v['id']);
                }
            }
        }
        /* load category_m */
        $this->load->model('category_m');
        $this->load->model('subcategories_m');
        $this->data['list'] = $this->subcategories_m->get_subcategories_list();
        $this->data['group_list'] = $this->category_m->focus_product_list();       
    }

    function get_search() {
        if (isset($_POST['search'])) {
            $name = $this->input->post('name');
            $name = explode(" ", $name);
            foreach ($name as $item) {
                $this->data['items'] = $this->product_m->search_prod($item);
            }
            $this->load->view("pages/products", $this->data);
            $this->load->view("templates/footer");
        }
    }

}
