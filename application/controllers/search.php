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
    public $script;

    function __construct() {
        parent::__construct();

        $this->load->model('product_m');
        $this->load->model('main_m');
        $this->load->model('subcategories_m');
        $this->load->model('category_m');
        $this->load->model('user_model');
        /* load header */
        $session = $this->session->userdata('user');
        if (!empty($session)) {
            $this->data['user'] = @$this->session->userdata('user');
            $this->data['user_category'] = $this->user_model->get_usercat_byID($this->data['user']['id']);
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
        $this->data['subcat_side'] = $this->subcategories_m->get_subcategories_sidebar();
        $this->data['prepare'] = $this->category_m->get_category_sidebar();
        foreach ($this->data['prepare'] as $key => $value) {
            foreach ($this->data['subcat_side'] as $k => $v) {
                if ($v['cat_id'] == $value['id']) {
                    $this->data['cat_list'][$value['name']][$value['link']][$v['link']][$v['name']] = $this->product_m->count_products($v['id']);
                }
            }
        }
        /* load category_m */
        $this->data['location'] = $this->main_m->get_location();
        $this->script['location'] = $this->main_m->get_location();
        $this->data['city'] = $this->main_m->get_city();
        $this->load->model('category_m');
        $this->load->model('subcategories_m');
        $this->data['list'] = $this->subcategories_m->get_subcategories_list();
        $this->data['group_list'] = $this->category_m->focus_product_list();
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
        unset($this->script, $this->data, $name, $item, $name1, $session_data);
    }

    function get_search() {

        $link = '';
        $name = $this->session->userdata('search');
        if (empty($name)) {
            $arr = $this->product_m->search_by($name);
            $config['base_url'] = base_url() . 'search/prod';
            $this->data['prep'] = $this->product_m->search_prod($name, 9, $this->uri->segment(3));
            foreach ($this->data['prep'] as $k => $v) {
                foreach ($v as $key => $val) {
                    if ($key == 'name') {
                        $this->data['items'][$k]['trans'] = $this->translit($val);
                    }
                    $this->data['items'][$k][$key] = $val;
                }
            }
            $this->data['total_rows'] = count($arr);
        } else {
            foreach ($name as $item) {
                $arr = $this->product_m->search_by($item);
                $link.=$item . ' ';
            }
            $this->data['total_rows'] = count($arr);
            $config['base_url'] = base_url() . 'search/' . $link;
            foreach ($name as $item) {
                $this->data['prep'] = $this->product_m->search_prod($item, 9, $this->uri->segment(3));
            }
            foreach ($this->data['prep'] as $k => $v) {
                foreach ($v as $key => $val) {
                    if ($key == 'name') {
                        $this->data['items'][$k]['trans'] = $this->translit($val);
                    }
                    $this->data['items'][$k][$key] = $val;
                }
            }
        }
        if ($name)
            $this->session->unset_userdata('search');
        $config['total_rows'] = count($arr);
        $config['per_page'] = '9';
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['prev_link'] = 'Назад';
        $config['next_link'] = 'Вперед';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $this->load->view("pages/products", $this->data);
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
        $this->load->view("templates/footer", $this->script);
        unset($this->script, $this->data, $name, $item, $key, $val, $link, $arr);
    }

    function translit($str) {
        $str = trim($str);
        $rus = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я', ' ', '.', ',', '>', '<', ';', ')', '(', '*', '}', '', ', ');
        $lat = array('A', 'B', 'V', 'G', 'D', 'E', 'E', 'Gh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'Ch', 'Sh', 'Sch', 'Y', 'Y', 'Y', 'E', 'Yu', 'Ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya', '-', '_', '_', '', '', '', '', '', '', '', '', '_');
        return str_replace($rus, $lat, $str);
    }

}
