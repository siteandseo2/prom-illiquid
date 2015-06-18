<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of subcategories
 *
 * @author baccardi
 */
class Subcategories extends CI_Controller {

    public $data;
    public $data_db;

    function __construct() {
        parent::__construct();
        $session = $this->session->userdata('admin');
        if (!empty($session)) {
            $this->data['admin'] = @$this->session->userdata('admin');
            $this->load->view("admin/header", $this->data);
            /* load categories */

            $this->load->model('category_m');
            $this->data['cat_list'] = $this->category_m->category_list();

            /* load model for subcategories */

            $this->load->model('subcategories_m');
            /* load subcategories list */

            $this->data['subcategories_list'] = $this->subcategories_m->get_subcategories_list();
        } else {
            redirect(base_url('admin'));
        }
    }

    /* function edit_subcat */

    public function edit_subcat() {
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
            foreach ($this->input->post('cat_product') as $key => $value) {
                if ($id == $key)
                    $fp_id = $value;
            }
            $this->db->query("UPDATE subcategories SET cat_id='$fp_id' WHERE id='$id'");
            $this->db->query("UPDATE subcategories SET name='$name' WHERE id='$id'");
            $this->db->query("UPDATE subcategories SET link='$link'  WHERE id='$id'");

            redirect(base_url('admin/subcategories'));
        }
    }

    /* END  function edit_subcat */


    /* function change_type */

    public function change_type() {
        if (isset($_POST['status'])) {
            foreach ($this->input->post('status') as $key => $val) {
                if ($val == 'enable') {
                    $this->db->query("UPDATE subcategories SET status='disable' WHERE id='$key'");
                    $this->db->query("UPDATE product SET status='disable' WHERE subcat_id='$key'");
                } else {
                    $cat_id = $this->subcategories_m->get_cat_id($key);
                    $this->db->query("UPDATE subcategories SET status='enable' WHERE id='$key'");
                    $this->db->query("UPDATE categories SET status='enable' WHERE id='$cat_id'");
                }
            }

            redirect(base_url('admin/subcategories'));
        }
    }

    /* END function change_type */

    /* function delete_subcat */

    public function delete_subcat() {
        if (isset($_POST['delete'])) {
            foreach ($this->input->post('delete') as $id) {
                $this->db->where('id', $id)->delete('subcategories');
            }

            redirect(base_url('admin/subcategories'));
        }
    }

    /* END  function delete_subcat  */

    public function get_subcat_list() {

        $this->load->view('admin/subcategories', $this->data);
        $this->delete_subcat();
        $this->change_type();
        $this->edit_subcat();
        $this->load->view('admin/footer');
    }

    /* function add subcategory */

    public function add_subcategory() {
        if (isset($_POST['add_subcategory'])) {
            if (is_uploaded_file($_FILES["prod_photo"]["tmp_name"])) {
                $this->data_db['link'] = strtolower($this->input->post('link'));
                move_uploaded_file($_FILES["prod_photo"]["tmp_name"], "./uploads/subcat_image/" . $this->data_db['link'] . $_FILES["prod_photo"]["name"]);
                $this->data_db['name'] = $this->input->post('name');
                $this->data_db['link'] = strtolower($this->input->post('link'));
                $this->data_db['image_path'] = '../../../uploads/subcat_image/' . $this->data_db['link'] . $_FILES["prod_photo"]["name"];
                $this->data_db['cat_id'] = strtolower($this->input->post('category'));
                $this->data_db['status'] = strtolower($this->input->post('status'));
                $this->subcategories_m->add_subcategory($this->data_db);
                redirect(base_url('admin/subcategories'));
            } else {
                redirect(base_url('admin/subcategories_add'));
            }
        }
    }

    /* END function add subcategory */

    /* filter by categories START */

    function filter_cat() {
        if (isset($_POST['filter'])) {
            $id = $this->input->post('data_cat');
            $this->data['subcategories_list'] = $this->subcategories_m->get_subcategories_list_by_category($id);
            $this->load->view('admin/subcategories', $this->data);
            $this->load->view('admin/footer');
        }
    }

    /* filter by categories END */
}
