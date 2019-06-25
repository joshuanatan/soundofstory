<?php
class Welcome extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("M_recording");
        $this->load->model("M_crud");
    }
    public function index(){
        $this->session->sess_destroy();
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
    public function signin(){
        $where = array(
            "email_user" => $this->input->post("email_user"),
            "password_user" => md5($this->input->post("password_user"))
        );
        $result = $this->M_crud->selectData($where,"user");
        if($result->num_rows() > 0 ){
            foreach($result->result() as $a){
                $this->session->id_user = $a->id_user;
                $this->session->nama_user = $a->nama_user;
                $this->session->email_user = $a->email_user;
                $this->session->foto_profile_user = $a->foto_profile_user;
                $this->Session->premium = $a->premium;
            }
            redirect("lounge/welcome");
        }   
        else redirect("welcome/login");
    }
    public function signup(){

        $name = array(
            "nama_user","password_user","gender_user","email_user","nohp_user","foto_profile_user","status_user","tgl_submit_user"
        );
        $where = array(
            "email_user" => $this->input->post("email_user")
        );
        $result = $this->M_crud->selectData($where,"user");
        if($result->num_rows() > 0){
            echo "<script type='text/javascript'>alert('EMAIL HAS BEEN USED');</script>";
            $this->load->view("landing/registration");
        }
        else{
            $data = array(
                $name[0] => $this->input->post($name[0]),
                $name[1] => md5($this->input->post($name[1])),
                $name[2] => $this->input->post($name[2]),
                $name[3] => $this->input->post($name[3]),
                $name[4] => $this->input->post($name[4]),
                $name[5] => "defaultprofile.png",
                $name[6] => 1,
                $name[7] => date("Y-m-d")
            );
            $this->M_crud->insertData($data,"user");
            redirect("welcome/login");
        }
    }
}