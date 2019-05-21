<?php 
class Profile extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model(array('m_crud', 'm_profile'));
    }
    public function index(){
        $where = array(
            'user.id_user' => $this->session->userdata("id_user")
        );
        $data['profile'] = $this->m_profile->selectData($where)->result();
        $this->load->view("req/head-open");
        $this->load->view("req/styles/cart-css");
        $this->load->view("req/styles/profile-css");
        $this->load->view("req/head-close");
        $this->load->view("req/menu");
        /*--------------------------------------*/
        $this->load->view("mainpages/profile", $data);
        /*--------------------------------------*/
        $this->load->view("req/close");
    }
    public function logout(){
        
    }
    
}