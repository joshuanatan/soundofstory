<?php
class Welcome extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("M_recording");
    }
    public function index(){
        $where = array(
            'recording.status_recording' => 1
        );
        $data['episode'] = $this->M_recording->selectTop3($where)->result();
        $this->load->view("landing/index",$data);
    }
    public function login(){
        $this->load->view("landing/login");
    }
    public function register(){
        $this->load->view("landing/registration");
    }
}