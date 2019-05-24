<?php

class Ajax extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('M_crud');
        $this->load->model('M_comment');
        $this->load->model('M_connection');
        $this->load->model('M_like');
        $this->load->model('M_message');
        $this->load->model('M_playlist');
        $this->load->model('M_profile');
        $this->load->model('M_rating');
        $this->load->model('M_recording');
        $this->load->model('M_report');
    }
    public function recordingDetail(){
        $where = array(
            "id_recording" => $this->input->post("id_recording")
        );
        $result = $this->M_recording->select($where);
        $data = array();
        foreach($result->result() as $a){
            $data["name"]   = $a->judul_recording;
            $data["duration"]   = $a->duration_recording;
            $data["cover"]   = $a->foto_recording;
            $data["audio"]   = $a->file_recording;
        }
        echo json_encode($data);
    }
    public function loadRecordingNotInPlaylist(){
        $where = array(
            "status" => array(
                "playlist" => 1
            )
        );
        $result = $this->M_recording->selectRecordingNotInPlaylist($where);
        $html = "<option value = '0' disabled selected>Choose Audio</option>";
        foreach($result->result() as $a){
            $html.="<option value = '".$a->id_recording."'>".$a->judul_recording."</option>";
        }
        echo json_encode($html);
    }
}