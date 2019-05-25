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
        redirect("welcome");
    }
    
    public function edit() {
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
        $this->load->view("mainpages/edit-profile", $data);
        /*--------------------------------------*/
        $this->load->view("req/close");
    }
    
    public function save() {
        $getName = $this->input->post("nama");
        $getEmail = $this->input->post("email");
        $getPhone = $this->input->post("phone");
        $getProf = $this->input->post("prof");
        
        if($getName == "" || $getEmail == "" || $getPhone == "" || $getProf == "") {
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
        else {
            $data = array(
                'nama_user' => $getName,
                'nohp_user' => $getPhone,
                'email_user' => $getEmail
            );
            $data2 = array(
                'profesi_user' => $getProf
            );
            
            $where = array(
                'id_user' => $this->session->userdata("id_user")
            );
            
            $this->m_crud->update_data($where, $data, 'user');
            $this->m_crud->update_data($where, $data2, 'profile');
            
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
    }
    
}