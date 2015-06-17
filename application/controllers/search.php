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
        $this->load->model('user_model');
        /* load header */
        if (!empty($this->session->userdata('user'))) {
            $this->data['user'] = @$this->session->userdata('user');
            $this->data['user_category'] = $this->user_model->get_usercat_byID($this->data['user']['id']);
//            $access=3;
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
        $this->data['location'] = $this->main_m->get_location();
        $this->data['city'] = $this->main_m->get_city();
        $this->load->model('category_m');
        $this->load->model('subcategories_m');
        $this->data['list'] = $this->subcategories_m->get_subcategories_list();
        $this->data['group_list'] = $this->category_m->focus_product_list();
        if (isset($_POST['search'])) {
            
        }
    }

    function search_name() {
        if (isset($_POST['search'])) {
            $name1 = $this->input->post('name');
            if (empty($name1)) {
                redirect(base_url('search/prod'));
            } else {
                $name = explode(" ", $name1);
                foreach ($name as $item) {
                    $session_data[] = $item;
                }
                $this->session->set_userdata(array('search' => $session_data));
                redirect(base_url('search/' . $name1));
            }
        }
    }

    function get_search() {

        $link='';
        $name = $this->session->userdata('search');
        foreach ($name as $item) {
            $arr = $this->product_m->search_by($item);
            $link.=$item.' ';
        }
        $this->data['total_rows']=count($arr);
        $config['base_url'] = base_url() . 'search/' . $link;
        $config['total_rows'] = count($arr);
        $config['per_page'] = '9';
//        print_r($name);
        $this->pagination->initialize($config);
//        $name = $this->input->post('name');
//        $name = explode(" ", $name);
        foreach ($name as $item) {
            $this->data['items'] = $this->product_m->search_prod($item, $config['per_page'], $this->uri->segment(3));
        }
        $this->load->view("pages/products", $this->data);

        $this->load->view("templates/footer");
    }

}
