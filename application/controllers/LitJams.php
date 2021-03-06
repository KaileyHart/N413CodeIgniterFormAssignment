<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Litjams extends CI_Controller {  
    public function __construct() {
        parent::__construct();
        $this->load->model('litlist_model');  
        $this->load->model('litform_model');   
    }    

    public function index(){
        $data["page_title"] = "AMP JAMS | Lit LIST";
        $data["this_page"] = "litlist";
        $data["records"] = $this->litlist_model->get_litlist_items();
        $this->load->view('templates/head', $data);
        $this->load->view('litlist', $data);
    }
    
    public function litlist(){
        $data["page_title"] = "AMP JAMS | Lit LIST";
        $data["this_page"] = "litlist";
        $data["records"] = $this->litlist_model->get_litlist_items();
        $this->load->view('templates/head', $data);
        $this->load->view('litlist', $data);
    }
    
    public function detail($id){
        $detail = $this->litlist_model->get_litlist_detail($id);
        $data["page_title"] = "AMP JAMS | ".$detail["item"];
        $data["this_page"] = "litlist";
        $data["row"] = $detail;
        $this->load->view('templates/head', $data);
        $this->load->view('detail', $data);
    }
    
    public function litform(){
        $data["page_title"] = "AMP JAMS | Lit FORM";
        $data["this_page"] = "contact";
        $this->load->view('templates/head', $data);
        $this->load->view('litform', $data);
    }
    
    public function contact_post(){
        $contact = $this->input->post();
        $messages = $this->litform_model->contact_post($contact);
        echo json_encode($messages);
    }
    
}


