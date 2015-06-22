<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Product extends CI_Controller {

    public $data;
    public $data_db;
    public $data_admin;

    function __construct() {
        parent::__construct();
        $session = $this->session->userdata('admin');
        if (!empty($session)) {
            /* load header */
            $this->data['admin'] = @$this->session->userdata('admin');
            $this->data_admin['admin'] = $this->session->userdata('admin');
            $this->load->view("admin/header", $this->data);
            /* load models */
            $this->load->model('product_m');
            $this->load->model('subcategories_m');
            $this->load->model('category_m');
            $this->data['category'] = $this->category_m->category_list();
            foreach ($this->product_m->get_all_product() as $k => $v) {
                $this->data['list'][$v['id']] = $v;
            }
            foreach ($this->data['list'] as $k => $v) {
                $this->data['subcat'][$v['subcat_id']] = $this->subcategories_m->get_subcategories_name_by_id($v['subcat_id']);
            }
        } else {
            redirect(base_url('admin'));
        }
    }

    function get_product_list() {

        $this->load->view('admin/products', $this->data);
        $this->load->view('admin/footer');
    }

    /* function edit_category */

    public function edit_product() {
        if (isset($_POST['edit'])) {
            foreach ($this->input->post('edit') as $val) {
                $id = $val;
            }
            foreach ($this->input->post('cat') as $key => $value) {
                if ($id == $key)
                    $name = $value;
            }

            foreach ($this->input->post('subcat_product') as $key => $value) {
                if ($id == $key)
                    $fp_id = $value;
            }
            $this->db->query("UPDATE product SET subcat_id='$fp_id' WHERE id='$id'");
            $this->db->query("UPDATE product SET name='$name' WHERE id='$id'");
            redirect(base_url('admin/products'));
        }
        unset($this->data, $id, $fp_id, $key, $value, $name);
    }

    /* END  function edit_category */


    /* function change_type */

    public function change_type() {
        if (isset($_POST['status'])) {
            foreach ($this->input->post('status') as $key => $val) {
                if ($val == 'enable') {
                    $this->db->query("UPDATE product SET status='disable' WHERE id='$key'");
                } else {
                    $subcat_id = $this->subcategories_m->get_subcategory_by_subcat_id($key);
                    $cat_id = $this->subcategories_m->get_cat_id($subcat_id);
                    $this->db->query("UPDATE product SET status='enable' WHERE id='$key'");
                    $this->db->query("UPDATE subcategories SET status='enable' WHERE id='$subcat_id'");
                    $this->db->query("UPDATE categories SET status='enable' WHERE id='$cat_id'");
                }
            }

            redirect(base_url('admin/products'));
        }
        unset($this->data, $key, $cat_id, $subcat_id, $val);
    }

    /* END function change_type */

    /* function delete_category */

    public function delete_product() {
        if (isset($_POST['delete'])) {
            foreach ($this->input->post('delete') as $id) {
                $this->db->where('id', $id)->delete('product');
            }

            redirect(base_url('admin/products'));
        }
        unset($this->data, $id);
    }

    /* END function delete_category */

    function add_product() {
        if (isset($_POST['add_product'])) {
            unset($this->data);
            if (is_uploaded_file($_FILES["prod_photo_1"]["tmp_name"])) {
                move_uploaded_file($_FILES["prod_photo_1"]["tmp_name"], "./uploads/products/" . 1 . '_' . $_FILES["prod_photo_1"]["name"]);
                if (move_uploaded_file($_FILES["prod_photo_2"]["tmp_name"], "./uploads/products/" . 1 . '_min' . $_FILES["prod_photo_2"]["name"]))
                    $this->data['min_img1'] = '../../../uploads/products/' . 1 . '_min' . $_FILES["prod_photo_2"]["name"];
                if (move_uploaded_file($_FILES["prod_photo_3"]["tmp_name"], "./uploads/products/" . 1 . '_min' . $_FILES["prod_photo_3"]["name"]))
                    $this->data['min_img2'] = '../../../uploads/products/' . 1 . '_min' . $_FILES["prod_photo_3"]["name"];
                if (move_uploaded_file($_FILES["prod_photo_4"]["tmp_name"], "./uploads/products/" . 1 . '_min' . $_FILES["prod_photo_4"]["name"]))
                    $this->data['min_img3'] = '../../../uploads/products/' . 1 . '_min' . $_FILES["prod_photo_4"]["name"];
                $this->data['name'] = $this->input->post('name');
                $this->data['image_path'] = '../../../uploads/products/' . 1 . '_' . $_FILES["prod_photo_1"]["name"];



                $this->data['price'] = $this->input->post('price');
                $this->data['subcat_id'] = $this->input->post('subcat_id');
                $this->data['status'] = 'enable';
                $this->data['description'] = $this->input->post('description');
                $this->data['prod_min_order'] = $this->input->post('min_order');
                $this->data['currency'] = $this->input->post('currency');
                $this->data['prod_code'] = $this->input->post('code');
                $this->data['condition'] = $this->input->post('condition');
                $this->data['ball'] = $this->input->post('ball');
                $this->data['prod_quantity'] = $this->input->post('quantity');
                $this->data['id_user'] = 1;
                if ($this->product_m->add_product($this->data) == true) {
                    redirect(base_url('admin/products'));
                } else {
                    redirect(base_url('admin/product_add'));
                }
            }
        }
//        if (isset($_POST['add_product'])) {
//            if (is_uploaded_file($_FILES["prod_photo_1"]["tmp_name"])) {
//                move_uploaded_file($_FILES["prod_photo"]["tmp_name"], "./uploads/products/" . '1_' . $_FILES["prod_photo"]["name"]);
//                $this->data_db['name'] = $this->input->post('name');
//                $this->data_db['image_path'] = '../../../uploads/products/' . '1_' . $_FILES["prod_photo"]["name"];
//                $this->data_db['price'] = ($this->input->post('price'));
//                $this->data_db['subcat_id'] = ($this->input->post('subcat_id'));
//                $this->data_db['status'] = strtolower($this->input->post('status'));
//                $this->data_db['description'] = ($this->input->post('description'));
//                $this->data_db['s_description'] = ($this->input->post('s_description'));
//                $this->data_db['prod_type'] = $this->input->post('prod_type');
//                $this->data_db['currency'] = $this->input->post('prod_currency');
//                $this->data_db['prod_quantity'] = $this->input->post('prod_quantity');
//                $this->data_db['availability'] = $this->input->post('prod_is_available');
//                $this->data_db['prod_code'] = $this->input->post('prod_code');
//                $this->data_db['id_user'] = '1';
//                $this->product_m->add_product($this->data_db);
//            }
//        }
//        unset($this->data_db);
//        redirect(base_url('admin/products'));
        unset($this->data);
    }

    function products() {
        $this->load->view("admin/products", $this->data);
        $this->change_type();
        $this->delete_product();
        $this->edit_product();
        $this->load->view("admin/footer");
        unset($this->data);
    }

    function filter_product() {
        if (isset($_POST['filter'])) {
            $id = strtolower($this->input->post('subcat_id'));
            if (!empty($id))
                $this->data['list'] = $this->product_m->get_product_by_subcat_id($id);
            else
                foreach ($this->product_m->get_all_product() as $k => $v) {
                    $this->data['list'][$v['id']] = $v;
                }
            $this->load->view("admin/products", $this->data);
            $this->load->view("admin/footer");
        }
        unset($this->data, $id);
    }

}
