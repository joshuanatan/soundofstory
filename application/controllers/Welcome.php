<?php 
class Welcome extends CI_Controller{
    public function __construct(){
        parent::__construct();

    }
    public function req(){
        $this->load->view("req/head-open");
        $this->load->view("req/styles/main-css");
        $this->load->view("req/head-close");
        $this->load->view("req/menu");
    }
    public function index(){
        $this->req();
        $this->load->view("mainpages/index");
        $this->close();
    }
    public function close(){
        $this->load->view("req/close");
    }
    
}