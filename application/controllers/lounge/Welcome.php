<?php 
class Welcome extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model(array('M_crud', 'M_recording', 'M_playlist', 'M_rating', 'M_report', 'M_like', 'M_message','M_history', 'M_connection', 'M_comment'));
    }
    public function req(){
        $this->load->view("req/head-open");
        $this->load->view("req/styles/main-css");
        $this->load->view("req/head-close");
        $this->load->view("req/menu");
        $this->load->view("req/audio");
    }
    public function index(){
        $where = array(
            'status_recording' => 1
        );
        $where2 = array(
            'status_playlist' => 1
        );
        $where3 = array(
            'recording.status_recording' => 1,
            'recording_playlist.status_playlist' => 1,
            'playlist.status_playlist' => 1
        );
        $data['episode'] = $this->M_recording->selectLast($where)->result();
        $data['play'] = $this->M_recording->selectLast2($where2)->result();
        $data['story'] = $this->M_playlist->selectLastToNow($where2)->result();
        $data['favourite'] = $this->M_history->orderByHistory($where3)->result();
        $this->req();
        $this->load->view("mainpages/index", $data);
        $this->close();
    }
    public function close(){
        $this->load->view("req/close");
    }
}