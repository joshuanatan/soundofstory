<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('M_pesan');

    }

    function insertMessage(){
        //masukin ke array
        //insert
        //redirct
        $a = $this->input->post("subject");
        $b = $this->input->post("konten");

        $data = array(
            "subject" => $a,
            "konten" =>$b,
            "id_user_dari" => $this->session->id_user,
            "status_message" => 0,
            "tgl_submit_message" => date("Y-m-d"),
            "jam_submit_message" => date("H:i:s"),
        );
        $this->M_pesan->insertMsg($data);
        redirect('lounge/buddy');
    }
}
?>