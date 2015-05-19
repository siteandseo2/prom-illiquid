<?php

class Catalog extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function get_category() {
        $this->load->model('catalog_m');
        $data['cat_list'] = $this->catalog_m->category_list();
        $this->load->view("admin/header");
        $this->load->view("admin/catalog", $data);
    }

    function edit_category() {
        if (isset($_POST['edit'])) {
            foreach ($this->input->post('edit') as $val) {
                $id = $val;
            }
            foreach ($this->input->post('cat') as $key => $value) {
                if ($id == $key)
                    $name = $value;
            }
            $this->db->query("UPDATE categories SET name='$name' WHERE id='$id'");
            $this->load->view("admin/header");
            redirect(base_url('admin/catalog'));
        }
    }

    function change_type() {
        if (isset($_POST['type'])) {
            foreach ($this->input->post('type') as $key => $val) {
                if ($val == 'enable') {
                    $this->db->query("UPDATE categories SET type='disable' WHERE id='$key'");
                } else {
                    $this->db->query("UPDATE categories SET type='enable' WHERE id='$key'");
                }
            }
            $this->load->view("admin/header");
            redirect(base_url('admin/catalog'));
        }       
    }
     function delete_category() {
        if (isset($_POST['delete'])) {
            foreach ($this->input->post('delete') as $id) {
                $this->db->where('id', $id)->delete('categories');
            }
            $this->load->view("admin/header");
            redirect(base_url('admin/catalog'));
        }
    }
}
