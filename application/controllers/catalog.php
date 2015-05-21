<?php

class Catalog extends CI_Controller {

    public $data;
    public $data_db;

    function __construct($page = 'index') {
        parent::__construct();
        $this->load->model('catalog_m');
        $this->data['admin'] = @$this->session->userdata('admin');
        $this->load->view("admin/header", $this->data);


        /* load categories */

        $this->load->model('catalog_m');
        $this->data['cat_list'] = $this->catalog_m->category_list();

        /* load users */

        $this->load->model('user_model');
        $this->data['user'] = $this->user_model->get_user();

        /* load focus product */

        $this->data['fpl'] = $this->catalog_m->focus_product_list();
    }

    public function get_category() {
        $this->data['cat_list'] = $this->catalog_m->category_list();
        $this->load->view("admin/catalog", $this->data);
    }

    public function edit_category() {
        if (isset($_POST['edit'])) {
            foreach ($this->input->post('edit') as $val) {
                $id = $val;
            }
            foreach ($this->input->post('cat') as $key => $value) {
                if ($id == $key)
                    $name = $value;
            }
            foreach ($this->input->post('link') as $key => $value) {
                if ($id == $key)
                    $link = $value;
            }
            foreach ($this->input->post('focus_product') as $key => $value) {
                if ($id == $key)
                    $fp_id = $value;
            }
            $this->db->query("UPDATE categories SET fp_id='$fp_id' WHERE id='$id'");
            $this->db->query("UPDATE categories SET name='$name' WHERE id='$id'");
            $this->db->query("UPDATE categories SET link='$link'  WHERE id='$id'");

            redirect(base_url('admin/catalog'));
        }
    }

    public function change_type() {
        if (isset($_POST['status'])) {
            foreach ($this->input->post('status') as $key => $val) {
                if ($val == 'enable') {
                    $this->db->query("UPDATE categories SET status='disable' WHERE id='$key'");
                } else {
                    $this->db->query("UPDATE categories SET status='enable' WHERE id='$key'");
                }
            }

            redirect(base_url('admin/catalog'));
        }
    }

    public function delete_category() {
        if (isset($_POST['delete'])) {
            foreach ($this->input->post('delete') as $id) {
                $this->db->where('id', $id)->delete('categories');
            }

            redirect(base_url('admin/catalog'));
        }
    }

    function get_catalog() {
        $this->load->view("admin/catalog", $this->data);
        $this->change_type();
        $this->delete_category();
        $this->edit_category();
    }

    function add_category() {
        if (isset($_POST['add_category'])) {
            $this->data_db['name'] = $this->input->post('name');
            $this->data_db['link'] = strtolower($this->input->post('link'));
            $this->data_db['fp_id'] = strtolower($this->input->post('focus_product'));
            $this->data_db['status'] = strtolower($this->input->post('status'));
            $this->catalog_m->add_category($this->data_db);
        }
        unset($this->data_db);
        redirect(base_url('admin/catalog'));
    }

    function add_focus_product() {
        if (isset($_POST['add_focus_product'])) {
            $this->data_db['name'] = $this->input->post('name');
            $this->data_db['status'] = strtolower($this->input->post('status'));
            $this->catalog_m->add_focus_product($this->data_db);
        }
        redirect(base_url('admin/focus_product'));
    }

    public function edit_focus_product() {
        if (isset($_POST['edit_fp'])) {
            foreach ($this->input->post('edit_fp') as $val) {
                $id = $val;
            }
            foreach ($this->input->post('fp') as $key => $value) {
                if ($id == $key)
                    $name = $value;
            }
            $this->db->query("UPDATE focus_products SET name='$name' WHERE id='$id'");


            redirect(base_url('admin/focus_product'));
        }
    }

    public function change_focus_product() {
        if (isset($_POST['status'])) {
            foreach ($this->input->post('status') as $key => $val) {
                if ($val == 'enable') {
                    $this->db->query("UPDATE focus_products SET status='disable' WHERE id='$key'");
                } else {
                    $this->db->query("UPDATE focus_products SET status='enable' WHERE id='$key'");
                }
            }

            redirect(base_url('admin/focus_product'));
        }
    }

    public function delete_focus_product() {
        if (isset($_POST['delete'])) {
            foreach ($this->input->post('delete') as $id) {
                $this->db->where('id', $id)->delete('focus_products');
            }

            redirect(base_url('admin/focus_product'));
        }
    }

    function focus_product() {
        $this->load->view("admin/focus_product", $this->data);
        $this->delete_focus_product();
        $this->change_focus_product();
        $this->edit_focus_product();
    }

}
