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
class Search  extends CI_Controller{
     function __construct() {
         parent::__construct();
         $this->load->model('product_m');
     }
     function get_search(){
         if(isset($_POST['search'])){
             $name=$this->input->post('name');
             $data['pr']=$this->product_m->search_prod($name);
             echo '<pre>';
             print_r($data['pr']);
             echo '</pre>';
         }
     }
}
