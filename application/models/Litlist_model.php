<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Litlist_model extends CI_Model {  
    public function __construct() {
        parent::__construct();
        //this causes the database library to be autoloaded
        //loading of any other models would happen here   
    }

    //Gets list items
    public function get_litlist_items(){
    	$sql = "SELECT * FROM `n413_list`";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    //Get lit item details
    public function get_litlist_detail($id){
    	$sql = "SELECT * FROM `litlist` WHERE id = '".$id."'";
        $query = $this->db->query($sql);
        return $query->row_array();
    }
    
}