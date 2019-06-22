<?php 
class Faq extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model(array('M_crud'));
    }
    public function index(){
        $data['faq'] = $this->M_crud->selectData('status_faq', 'faq')->result();
        $this->load->view("req/head-open");
        $this->load->view("req/styles/cart-css");
        $this->load->view("req/head-close");
        $this->load->view("req/menu");
        $this->load->view("req/audio");
        /*--------------------------------------*/
        $this->load->view("mainpages/faq", $data);
        /*--------------------------------------*/
        $this->load->view("req/close");
    }
}