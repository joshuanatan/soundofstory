<?php 
class Chatroom extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model(array('m_crud', 'm_message'));
    }
    public function index(){
        $where = array(
            'id_user_dari' => $this->session->userdata("id"),
            'status_message' => 1
        );
        $data['message'] = $this->m_message->selectData($where)->result();
        $this->load->view("req/head-open");
        $this->load->view("req/styles/cart-css");
        $this->load->view("req/styles/message-css.php");
        $this->load->view("req/head-close");
        $this->load->view("req/menu");
        /*--------------------------------------*/
        $this->load->view("mainpages/message", $data);
        /*--------------------------------------*/
        $this->load->view("req/close");
    }
    
    function ajax()
    {
        $id_user = $this->input->post("id");
        $where = array(
            'id_user_tujuan' => $id_user
        );
        $data = $this->m_message->selectChat($where)->result();
        echo json_encode($data);
    }
    
}