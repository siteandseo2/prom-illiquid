<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of edit_menu
 *
 * @author baccardi
 */
class Menu extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function edit_menu() {
        if (isset($_POST['edit'])) {
            foreach ($this->input->post('edit') as $val) {
                $id = $val;
            }

            foreach ($this->input->post('name') as $key => $value) {
                if ($id == $key)
                    $name = $value;
            }
            echo $name;

            foreach ($this->input->post('link') as $key => $value) {
                if ($id == $key)
                    $link = $value;
            }
            echo $link;


            foreach ($this->input->post('parent') as $key => $value) {
                if ($id == $key)
                    $p_id = $value;
            }
            echo $p_id;

            foreach ($this->input->post('parent2') as $key => $value) {
                if ($id == $key)
                    $p_id2 = $value;
            }
            echo $p_id2;

            $this->db->query("UPDATE menu SET name='$name' WHERE id='$id'");
            $this->db->query("UPDATE menu SET link='$link'  WHERE id='$id'");
            $this->db->query("UPDATE menu SET p_id='$p_id' WHERE id='$id'");
            $this->db->query("UPDATE menu SET p_id2='$p_id2' WHERE id='$id'");

//
            redirect(base_url('admin/main'));
        }
    }

    /* END  function edit_menu */


    /* function change_type */

    public function change_type() {
        if (isset($_POST['status'])) {
            foreach ($this->input->post('status') as $key => $val) {
                if ($val == 'enable') {
                    $this->db->query("UPDATE menu SET status='disable' WHERE id='$key'");
                    $this->db->query("UPDATE menu SET status='disable' WHERE p_id='$key'");
                    $a = $this->db->query("SELECT id FROM menu  WHERE p_id='$key'");
                    foreach ($a->result() as $items) {
                        $this->db->query("UPDATE menu SET status='disable' WHERE p_id2='$items->id'");
                    }
                } else {
                    $a = $this->db->query("SELECT id FROM menu  WHERE p_id='$key'");
                    foreach ($a->result() as $items) {
                        $this->db->query("UPDATE menu SET status='enable' WHERE p_id2='$items->id'");
                    }
                    $this->db->query("UPDATE menu SET status='enable' WHERE id='$key'");
                    $this->db->query("UPDATE menu SET status='enable' WHERE p_id='$key'");
                }
            }
            redirect(base_url('admin/main'));
        } if (isset($_POST['status2'])) {
            foreach ($this->input->post('status2') as $key => $val) {
                if ($val == 'enable') {
                    $this->db->query("UPDATE menu SET status='disable' WHERE id='$key'");
                    $this->db->query("UPDATE menu SET status='disable' WHERE p_id2='$key'");
                } else {
                    $a = $this->db->query("SELECT p_id FROM menu  WHERE id='$key'");
                    foreach ($a->result() as $items) {
                        $this->db->query("UPDATE menu SET status='enable' WHERE id='$items->p_id'");
                    }
                    $this->db->query("UPDATE menu SET status='enable' WHERE id='$key'");
                    $this->db->query("UPDATE menu SET status='enable' WHERE p_id2='$key'");
                }
            }
            redirect(base_url('admin/main'));
        }
        if (isset($_POST['status3'])) {
            foreach ($this->input->post('status3') as $key => $val) {
                if ($val == 'enable') {
                    $this->db->query("UPDATE menu SET status='disable' WHERE id='$key'");
                } else {
                    $a = $this->db->query("SELECT p_id2 FROM menu  WHERE id='$key'");
                    foreach ($a->result() as $items) {
                        $this->db->query("UPDATE menu SET status='enable' WHERE id='$items->p_id2'");
                        $b = $this->db->query("SELECT p_id FROM menu  WHERE id='$items->p_id2'");
                        foreach ($b->result() as $it) {
                            $this->db->query("UPDATE menu SET status='enable' WHERE id='$it->p_id'");
                        }
                    }
                    $this->db->query("UPDATE menu SET status='enable' WHERE id='$key'");
                }
            }
            redirect(base_url('admin/main'));
        }
    }

    /* END function change_type */

    /* function delete_menu */

    public function delete_menu() {
        if (isset($_POST['delete'])) {
            foreach ($this->input->post('delete') as $id) {
                $a = $this->db->where('p_id', $id)->select("id")->get('menu');
                foreach ($a->result() as $items) {
                    $this->db->where('p_id2', $items->id)->delete('menu');
                }
                $this->db->where('id', $id)->delete('menu');
                $this->db->where('p_id', $id)->delete('menu');
                $this->db->where('p_id2', $id)->delete('menu');
            }
            foreach ($this->input->post('link') as $key => $value) {
                if ($id == $key)
                    $link = $value;
            }
            if (file_exists(APPPATH . '/views/userpages/' . $link . '.php')) {
                $fp = unlink('application/views/userpages/' . $link . '.php');
                if ($fp) {
                    echo 'ok';
                }
            }
            redirect(base_url('admin/main'));
        }
    }

    /* END  function delete_menu  */

    public function get_menu_list() {
        $this->delete_menu();
        $this->change_type();
        $this->edit_menu();
        redirect(base_url('admin/main'));
    }

}
