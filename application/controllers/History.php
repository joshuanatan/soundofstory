<?php 
class History extends CI_Controller{
    public function __construct(){
        parent::__construct();

    }
    public function index(){
        $this->load->view("req/head-open");
        $this->load->view("req/styles/product-css");
        $this->load->view("req/head-close");
        $this->load->view("req/menu");
        /*--------------------------------------*/
        $this->load->view("mainpages/stories");
        /*--------------------------------------*/
        $this->load->view("req/close");
    }
    
}