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

    function __construct() {
        parent::__construct();
        $this->data['admin'] = @$this->session->userdata('admin');
        $this->load->view("admin/header", $this->data);
        /* load categories */

        $this->load->model('catalog_m');
        $this->data['cat_list'] = $this->catalog_m->category_list();

        /* load model for subcategories */

        $this->load->model('subcategories_m');
        /* load subcategories list */

        $this->data['subcategories_list'] = $this->subcategories_m->get_subcategories_list();
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
            foreach ($this->input->post('focus_product') as $key => $value) {
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

    function get_subcat_list() {
        $this->load->view('admin/subcategories', $this->data);
        $this->delete_subcat();
        $this->change_type();
        $this->edit_subcat();
        $this->load->view('admin/footer');
    }

}
