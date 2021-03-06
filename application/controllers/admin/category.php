<?php

class Category extends CI_Controller {

    public $data;
    public $data_db;

    function __construct($page = 'index') {
        parent::__construct();
        if(!empty($this->session->userdata('admin'))){
        $this->load->model('category_m');
        $this->data['admin'] = @$this->session->userdata('admin');
        $this->load->view("admin/header", $this->data);

        /* load categories */

        $this->load->model('category_m');
        $this->load->model('subcategories_m');
        $this->data['cat_list'] = $this->category_m->category_list();

        /* load focus product */

        $this->data['fpl'] = $this->category_m->focus_product_list();
    }else{
          redirect(base_url('admin'));
    }
    }
    /* START METHOD's for categories
     *
     * 
     * function edit_category */

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

            redirect(base_url('admin/category'));
        }
    }

    /* END  function edit_category */


    /* function change_type */

    public function change_type() {
        if (isset($_POST['status'])) {
            foreach ($this->input->post('status') as $key => $val) {
                if ($val == 'enable') {
                    $id=$this->subcategories_m->get_subcategory_by_cat_id($key);
                    $this->db->query("UPDATE categories SET status='disable' WHERE id='$key'");
                    $this->db->query("UPDATE subcategories SET status='disable' WHERE cat_id='$key'");
                    $this->db->query("UPDATE product SET status='disable' WHERE subcat_id='$id'");
                    
                } else {
                    $this->db->query("UPDATE categories SET status='enable' WHERE id='$key'");
                    $this->db->query("UPDATE subcategories SET status='enable' WHERE cat_id='$key'");
                }
            }

            redirect(base_url('admin/category'));
        }
    }

    /* END function change_type */

    /* function delete_category */

    public function delete_category() {
        if (isset($_POST['delete'])) {
            foreach ($this->input->post('delete') as $id) {
                $this->db->where('id', $id)->delete('categories');
            }

            redirect(base_url('admin/category'));
        }
    }

    /* END function delete_category */

    /* function get_category */

    function get_category() {
        $this->load->view("admin/category", $this->data);
        $this->change_type();
        $this->delete_category();
        $this->edit_category();
        $this->load->view("admin/footer");
    }

    /* END function get_category */
    /* function add_category */

    function add_category() {
        if (isset($_POST['add_category'])) {
            $this->data_db['name'] = $this->input->post('name');
            $this->data_db['link'] = strtolower($this->input->post('link'));
            $this->data_db['fp_id'] = strtolower($this->input->post('focus_product'));
            $this->data_db['status'] = strtolower($this->input->post('status'));
            $this->category_m->add_category($this->data_db);
        }
        unset($this->data_db);
        redirect(base_url('admin/category'));
    }

    /* END function add_category */


    /* START METHOD's for focus_Product
     *
     * 
     *  function add_focus_product  */

    function add_focus_product() {
        if (isset($_POST['add_focus_product'])) {
            $this->data_db['name'] = $this->input->post('name');
            $this->data_db['status'] = strtolower($this->input->post('status'));
            $this->category_m->add_focus_product($this->data_db);
        }
        redirect(base_url('admin/focus_product'));
    }

    /* END  function add_focus_product */


    /* function edit_focus_product */

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

    /* END function edit_focus_product */


    /* function change_focus_product */

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

    /* END function change_focus_product */


    /* function delete_focus_product */

    public function delete_focus_product() {
        if (isset($_POST['delete'])) {
            foreach ($this->input->post('delete') as $id) {
                $this->db->where('id', $id)->delete('focus_products');
            }

            redirect(base_url('admin/focus_product'));
        }
    }

    /* END function delete_focus_product */


    /* function focus_product */

    function focus_product() {
        $this->load->view("admin/focus_product", $this->data);
        $this->delete_focus_product();
        $this->change_focus_product();
        $this->edit_focus_product();
        $this->load->view("admin/footer");
    }

    /* END  function focus_product */




    /**/

    /**/
}
