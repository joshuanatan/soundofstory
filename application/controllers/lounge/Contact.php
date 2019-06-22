<?php 
class Contact extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model(array('M_crud'));
    }
    public function index(){
        $this->load->view("req/head-open");
        $this->load->view("req/styles/cart-css");
        $this->load->view("req/head-close");
        $this->load->view("req/menu");
        $this->load->view("req/audio");
        /*--------------------------------------*/
        $this->load->view("mainpages/contact");
        /*--------------------------------------*/
        $this->load->view("req/close");
    }
    
    public function send() {
        $nama = $this->input->post("nama");
        $email = $this->input->post("email");
        $sub = $this->input->post("sub");
        $hp = $this->input->post("hp");
        $isi = $this->input->post("isi");
        $date = date("Y-m-d");
        
        $data = array(
            "id_contact" => 0,
            "nama_contact" => $nama,
            "email_contact" => $email,
            "hp_contact" => $hp,
            "subject_contact" => $sub,
            "tgl_submit_contact" => $date,
            "isi_contact" => $isi,
            "status_contact" => 1
        );
        
        $this->M_crud->insertData($data, 'contact');
        redirect('lounge/contact');
    }
}