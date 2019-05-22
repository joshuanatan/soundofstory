<?php 
class Welcome extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model(array('m_crud', 'm_recording', 'm_playlist', 'm_rating', 'm_report', 'm_like', 'm_message', 'm_connection', 'm_comment'));
    }
    public function req(){
        $this->load->view("req/head-open");
        $this->load->view("req/styles/main-css");
        $this->load->view("req/head-close");
        $this->load->view("req/menu");
    }
    public function index(){
        $where = array(
            'status_recording' => 1
        );
        $data['episode'] = $this->m_recording->selectLast($where)->result();
        $data['story'] = $this->m_crud->selectData('status_playlist', 'playlist')->result();
        $this->req();
        $this->load->view("mainpages/index", $data);
        $this->close();
    }
    public function close(){
        $this->load->view("req/close");
    }
    
    
    
}