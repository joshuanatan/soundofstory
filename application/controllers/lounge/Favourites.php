<?php 
class Favourites extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model(array('M_crud', 'M_recording','M_history'));
    }
    public function index(){
        $where3 = array(
            'recording.status_recording' => 1,
            'recording_playlist.status_playlist' => 1,
            'playlist.status_playlist' => 1,
            'history_recording.id_user' => $this->session->id_user
        );
        $data['episode'] = $this->M_history->orderByHistory($where3)->result();
        $this->load->view("req/head-open");
        $this->load->view("req/styles/product-css");
        $this->load->view("req/head-close");
        $this->load->view("req/menu");
        $this->load->view("req/audio");
        /*--------------------------------------*/
        $this->load->view("mainpages/favourites", $data);
        /*--------------------------------------*/
        $this->load->view("req/close");
    }
    
}