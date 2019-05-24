<?php 
class History extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model(array('M_crud', 'M_recording','M_history'));
    }
    public function index(){
        $where = array(
            'history_recording.id_user' => $this->session->id_user
        );
        $data['episode'] = $this->M_history->getHistory($where)->result();
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