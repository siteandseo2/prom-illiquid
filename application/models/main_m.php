<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Main
 *
 * @author baccardi
 */
class Main_m extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_menu() {
        $main = $this->db->where('status', 'enable')->where('type', 'r')->get('menu');
        foreach ($main->result_array() as $row) {
            $arr1[$row['name']] = [$row['id']];
            $level1 = $this->db->where('status', 'enable')->where('p_id', $row['id'])->get('menu');
            foreach ($level1->result_array() as $r) {
                $arr1[$row['name']][$row['id']][$r['link']] = [$r['name']];
                $level2 = $this->db->where('status', 'enable')->where('p_id2', $r['id'])->get('menu');
                foreach ($level2->result_array() as $p) {
                    $arr1[$row['name']][$row['id']][$r['link']][$r['name']][$p['link']] = $p['name'];
                }
            }
        }
        return $arr1;
    }

    function get_parent($type) {
        $main = $this->db->where('type', $type)->select('id, name')->get('menu');
        return $main->result_array();
    }

    function insert_item($data) {
        $query = $this->db->insert('menu', $data);
    }

    function get_fst_l() {
        $main = $this->db->where('type', 'r')->get('menu');
        return $main->result_array();
    }

    function get_snd_l() {
        $main = $this->db->where('type', 'd')->get('menu');
        return $main->result_array();
    }

    function get_trd_l() {
        $main = $this->db->where('type', 'dd')->get('menu');
        return $main->result_array();
    }

}
