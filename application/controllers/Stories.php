<?php 
class Stories extends CI_Controller{
    public function __construct(){
        parent::__construct();

    }
    public function index(){
        $this->load->view("req/head-open");
        $this->load->view("req/styles/cart-css");
        $this->load->view("req/head-close");
        $this->load->view("req/menu");
        /*--------------------------------------*/
        $this->load->view("mainpages/playlist");
        /*--------------------------------------*/
        $this->load->view("req/close");
    }
    public function detail(){
        $this->load->view("req/head-open");
        $this->load->view("req/styles/product-css");
        $this->load->view("req/head-close");
        $this->load->view("req/menu");
        /*--------------------------------------*/
        $this->load->view("mainpages/playlist-detail");
        /*--------------------------------------*/
        $this->load->view("req/close");
    }
    public function listen(){
        $this->load->view("req/head-open");
        $this->load->view("req/styles/product-css");
        $this->load->view("req/head-close");
        $this->load->view("req/menu");
        /*--------------------------------------*/
        $this->load->view("mainpages/listen");
        /*--------------------------------------*/
        $this->load->view("req/close");
    }
    
}