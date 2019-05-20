<?php 
class History extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model(array('m_crud', 'm_recording'));
    }
    public function index(){
        $where = array(
            'user_recording.id_user' => $this->session->userdata("id")
        );
        $data['episode'] = $this->m_recording->selectByUser($where)->result();
        $this->load->view("req/head-open");
        $this->load->view("req/styles/product-css");
        $this->load->view("req/head-close");
        $this->load->view("req/menu");
        /*--------------------------------------*/
        $this->load->view("mainpages/stories", $data);
        /*--------------------------------------*/
        $this->load->view("req/close");
    }
    
}