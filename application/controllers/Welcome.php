<?php 
class Welcome extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model(array('m_crud'));
    }
    public function req(){
        $this->load->view("req/head-open");
        $this->load->view("req/styles/main-css");
        $this->load->view("req/head-close");
        $this->load->view("req/menu");
    }
    public function index(){
        $data['episode'] = $this->m_crud->selectData('status_recording', 'recording')->result();
        $data['story'] = $this->m_crud->selectData('status_playlist', 'playlist')->result();
        $this->req();
        $this->load->view("mainpages/index", $data);
        $this->close();
    }
    public function close(){
        $this->load->view("req/close");
    }
    
}