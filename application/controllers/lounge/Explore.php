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
    
    public function search() {
        $getKey = $this->input->post("key");
        $from = $this->input->post("from");
        if($from == 1) {
            $where = array(
                'judul_recording' => $getKey
            );
            $data['episode'] = $this->m_recording->search($where)->result();
            $this->load->view("req/head-open");
            $this->load->view("req/styles/cart-css");
            $this->load->view("req/head-close");
            $this->load->view("req/menu");
            /*--------------------------------------*/
            $this->load->view("mainpages/episodes", $data);
            /*--------------------------------------*/
            $this->load->view("req/close");
        }
        if($from == 2) {
            $where = array(
                'nama_playlist' => $getKey
            );
            $data['episode'] = $this->m_recording->search($where)->result();
            $this->load->view("req/head-open");
            $this->load->view("req/styles/cart-css");
            $this->load->view("req/head-close");
            $this->load->view("req/menu");
            /*--------------------------------------*/
            $this->load->view("mainpages/episodes", $data);
            /*--------------------------------------*/
            $this->load->view("req/close");
        }
        if($from == 3) {
            $where = array(
                'nama_category' => $getKey
            );
            $data['episode'] = $this->m_recording->search($where)->result();
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
    
}