<?php 
class Explore extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model(array('m_crud', 'm_recording'));
    }
    public function index(){
        $where = array(
            'status_recording' => 1
        );
        $data['episode'] = $this->m_recording->selectAll($where)->result();
        $this->load->view("req/head-open");
        $this->load->view("req/styles/cart-css");
        $this->load->view("req/head-close");
        $this->load->view("req/menu");
        /*--------------------------------------*/
        $this->load->view("mainpages/episodes", $data);
        /*--------------------------------------*/
        $this->load->view("req/close");
    }
    
}