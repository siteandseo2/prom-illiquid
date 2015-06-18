<?php

class Product extends CI_Controller {

    public $data = '';
    public $data_db = '';
    public $subcat_id = '';
    public $script = '';

    function __construct() {
        parent::__construct();
        $this->load->model('main_m');
        $this->load->model('user_model');

        /* load header */
        $session = $this->session->userdata('user');
        if (!empty($session)) {
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

        $this->load->model('subcategories_m');
        $this->load->model('category_m');
        $this->load->model('product_m');
        $this->load->model('user_model');
        /* load sidebar_data */
        $this->data_db['subcat'] = $this->subcategories_m->get_subcategories_list();
        $this->data_db['prepare'] = $this->category_m->category_list();
        foreach ($this->data_db['prepare'] as $key => $value) {
            foreach ($this->data_db['subcat'] as $k => $v) {
                if ($v['cat_id'] == $value['id']) {
                    $this->data_db['cat_list'][$value['name']][$value['link']][$v['link']][$v['name']] = $this->product_m->count_products($v['id']);
                }
            }
        }
        /* load model product */
        $this->data['location'] = $this->main_m->get_location();
        $this->data['city'] = $this->main_m->get_city();
        $this->script['location'] = $this->main_m->get_location();
        $this->script['script'] = "<script src='../../../js/validation.js'></script>"
                . "<script src='../../../js/ajax_select.js'></script>"
                . "<script src='../../../js/perfect-scrollbar.jquery.js'></script>"
                . "<script src='../../../js/autoComplete.js'></script>"
                . "<script src='../../../js/main.js'></script>"
                . "<script src='../../../js/cart.js'></script>"
                . "<script src='../../../js/ajax_select.js'></script>"
                . "<script src='../../../js/bootstrap-switch.js'></script>"
                . "<script src='../../../js/main_nav.js'></script>"
                . "<script src='../../../js/switcher.js'></script>"
                . "<script src='../../../js/sidebar.js'></script>";
    }

    function get_all_product() {
        $config['base_url'] = base_url() . 'prod/all';
        $config['total_rows'] = $this->product_m->count_prod();
        $this->data_db['total_rows'] = $this->product_m->count_prod();
        $config['per_page'] = '9';
        $this->pagination->initialize($config);
        $this->data_db['items'] = $this->product_m->get_all_product($config['per_page'], $this->uri->segment(3));
        $this->load->view("pages/products", $this->data_db);
        $this->load->view("templates/footer", $this->script);
    }

    function get_products($link) {
        if ($link == '$1') {
            redirect(base_url() . 'prod/all');
        }
        $config['base_url'] = base_url() . 'products/' . $link;
        $config['total_rows'] = count($this->product_m->get_products_byLINK($link));
        $this->data_db['total_rows'] = count($this->product_m->get_products_byLINK($link));
        $config['per_page'] = '9';

        $this->pagination->initialize($config);
        $this->data_db['prep'] = $this->product_m->get_products($link, $config['per_page'], $this->uri->segment(3));
        $arr_names = $this->product_m->get_product_name($link, $config['per_page'], $this->uri->segment(3));
        foreach($this->data_db['prep'] as $k=>$v){
            foreach($v as $key=>$val){
                if($key=='name'){
                     $this->data_db['items'][$k]['trans']=  $this->translit($val);
                }
                $this->data_db['items'][$k][$key]=$val;
                
            }
        }
//       array_push($this->data_db['items'], $arr);
//        echo '<pre>';
//        print_r($this->data_db['items']);
//        echo '</pre>';
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
        $this->script['script'] = "<script src='../../../js/validation.js'></script>"
                . "<script src='../../../js/ajax_select.js'></script>"
                . "<script src='../../../js/perfect-scrollbar.jquery.js'></script>"
                . "<script src='../../../js/autoComplete.js'></script>"
                . "<script src='../../../js/main.js'></script>"
                . "<script src='../../../js/cart.js'></script>"
                . "<script src='../../../js/ajax_select.js'></script>"
                . "<script src='../../../js/bootstrap-switch.js'></script>"
                . "<script src='../../../js/main_nav.js'></script>"
                . "<script src='../../../js/switcher.js'></script>"
                . "<script src='../../../js/sidebar.js'></script>"
                . "<script src='../../../js/jquery.fancybox.pack.js'></script>"
                . "<script src='../../../js/product_settings.js'></script>";
        $this->data_db['product'] = $this->product_m->get_product($id);
        $this->data_db['cat_name'] = $this->product_m->get_product_cat($this->data_db['product']['0']['subcat_id']);
        $this->data_db['subcat_name'] = $this->product_m->get_cat_name($this->data_db['cat_name']['0']['link']);

        $this->data_db['prepare_data'] = $this->user_model->get_user_by_id($this->data_db['product']['0']['id_user']);
        foreach ($this->data_db['prepare_data'] as $key => $value) {
            foreach ($value as $k => $v) {
                $this->data_db['user_data'][$k] = $v;
            }
        }
        $this->load->view("pages/item", $this->data_db);
        $this->load->view("templates/footer", $this->script);
    }

    function translit($str) {
        $rus = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я', ' ');
        $lat = array('A', 'B', 'V', 'G', 'D', 'E', 'E', 'Gh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'Ch', 'Sh', 'Sch', 'Y', 'Y', 'Y', 'E', 'Yu', 'Ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya', '-');
        return str_replace($rus, $lat, $str);
    }

}
?>

