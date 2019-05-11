<?php 
class Profile extends CI_Controller{
    public function __construct(){
        parent::__construct();

    }
    public function index(){
        $this->load->view("req/head-open");
        $this->load->view("req/styles/cart-css");
        $this->load->view("req/styles/profile-css");
        $this->load->view("req/head-close");
        $this->load->view("req/menu");
        /*--------------------------------------*/
        $this->load->view("mainpages/profile");
        /*--------------------------------------*/
        $this->load->view("req/close");
    }
    public function logout(){
        
    }
    
}