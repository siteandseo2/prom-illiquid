<?php

class Product extends CI_Controller {

    public $data = '';
    public $data_db = '';
    public $subcat_id = '';
    public $script = '';

    function __construct() {
        parent::__construct();
        $this->load->model('main_m');
        /* load header */
        if (!empty($this->session->userdata('user'))) {
            $this->data['user'] = @$this->session->userdata('user');
            $this->data['menu'] = $this->main_m->get_menu();
            $this->load->view("templates/header_user", $this->data);
        } else {
            $this->load->view("templates/header");
        }
        /* load model product */
        $this->load->model('subcategories_m');
        $this->load->model('category_m');
        $this->load->model('product_m');
        $this->load->model('user_model');
        $this->data['products'] = $this->product_m->get_all_product();
        $this->script['script'] = "<script src='../../../js/jquery.fancybox.pack.js'></script><script src='../../../js/perfect-scrollbar.jquery.js'></script><script src='../../../js/product_settings.js'></script><script src='../../../js/main.js'></script>";
    }

    function get_all_product() {
        $this->data['items'] = $this->product_m->get_all_product();
        $this->load->view("pages/products", $this->data);
        $this->load->view("templates/footer", $this->script);
    }

    function get_products($link) {
        $this->data_db['items'] = $this->product_m->get_products($link);
        $this->data_db['subcat_name'] = $this->product_m->get_subcat_name($link);
        $this->data_db['cat_name'] = $this->product_m->get_cat_name($link);
        $this->data_db['link'] = $link;
        $this->data_db['subcat'] = $this->subcategories_m->get_subcategories_list();
        $this->data_db['prepare'] = $this->category_m->category_list();
        foreach ($this->data_db['prepare'] as $key => $value) {
            foreach ($this->data_db['subcat'] as $k => $v) {
                if ($v['cat_id'] == $value['id']) {
                    $this->data_db['cat_list'][$value['name']][$value['link']][$v['link']][$v['name']] = $this->product_m->count_products($v['id']);
                }
            }
        }
        $this->load->view("pages/products", $this->data_db);
        $this->load->view("templates/footer", $this->script);
    }

    function get_product($id) {
        $this->data_db['product'] = $this->product_m->get_product($id);
        $this->data_db['cat_name'] = $this->product_m->get_product_cat($this->data_db['product']['0']['subcat_id']);
        $this->data_db['subcat_name'] = $this->product_m->get_cat_name($this->data_db['cat_name']['0']['link']);
        $this->data_db['subcat'] = $this->subcategories_m->get_subcategories_list();
        $this->data_db['prepare'] = $this->category_m->category_list();
        foreach ($this->data_db['prepare'] as $key => $value) {
            foreach ($this->data_db['subcat'] as $k => $v) {
                if ($v['cat_id'] == $value['id']) {
                    $this->data_db['cat_list'][$value['name']][$value['link']][$v['link']][$v['name']] = $this->product_m->count_products($v['id']);
                }
            }
        }
        $this->data_db['prepare_data'] = $this->user_model->get_user_by_id($this->data_db['product']['0']['id_user']);
        foreach ($this->data_db['prepare_data'] as $key => $value) {
            foreach ($value as $k => $v) {
                $this->data_db['user_data'][$k] = $v;
            }
        }
        $this->load->view("pages/item", $this->data_db);
        $this->load->view("templates/footer", $this->script);
    }

}
?>

