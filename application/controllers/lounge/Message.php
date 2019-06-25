<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('M_pesan');

    }

    function insertBuddy(){
        //masukin ke array
        //insert
        //redirct
        $a = $this->input->post("subject");
        $b = $this->input->post("konten");

        $data = array(
            "sumber_message" => "BUDDY",
            "subject" => $a,
            "konten" =>$b,
            "id_user_add" => $this->session->id_user,
            "status_message" => 0,
        );
        $this->M_pesan->insertMsg($data);
        redirect('lounge/buddy');
    }
    function insertAsk(){
        //masukin ke array
        //insert
        //redirct
        $a = $this->input->post("subject");
        $b = $this->input->post("konten");

        $data = array(
            "sumber_message" => "ASK",
            "subject" => $a,
            "konten" =>$b,
            "id_user_add" => $this->session->id_user,
            "status_message" => 0,
        );
        $this->M_pesan->insertMsg($data);
        redirect('lounge/contact');
    }
}
?>