<?php 
class Stories extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model(array('m_crud', 'm_playlist', 'm_recording'));
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
    public function detail($id){
        $where = array(
            'id_playlist' => $id,
            'status_playlist' => 1
        );
        $data['story'] = $this->m_playlist->selectData($where)->result();
        $data['episode'] = $this->m_recording->selectByPlaylist($where)->result();
        $this->load->view("req/head-open");
        $this->load->view("req/styles/product-css");
        $this->load->view("req/head-close");
        $this->load->view("req/menu");
        /*--------------------------------------*/
        $this->load->view("mainpages/playlist-detail", $data);
        /*--------------------------------------*/
        $this->load->view("req/close");
    }
    public function listen($id){
        $where = array(
            'recording.id_recording' => $id,
            'recording.status_recording' => 1
        );
        $data['episode'] = $this->m_recording->selectAll($where)->result();
        $where2 = array(
            'comment.id_recording' => $id,
            'comment.status_comment' => 1
        );
        $data['comment'] = $this->m_recording->selectComment($where2)->result();
        $this->load->view("req/head-open");
        $this->load->view("req/styles/product-css");
        $this->load->view("req/head-close");
        $this->load->view("req/menu");
        /*--------------------------------------*/
        $this->load->view("mainpages/listen", $data);
        /*--------------------------------------*/
        $this->load->view("req/close");
    }
    
}