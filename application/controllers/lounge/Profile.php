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
        $this->load->view("req/audio");
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
        $this->load->view("req/audio");
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
            $where = array(
                'id_user' => $this->session->userdata("id_user")
            );
            $config = array(
                "upload_path" => "./assets/profiles/images/",
                "allowed_types" => "jpg|png|jpeg|gif"
            );
            $this->load->library("upload",$config);
            if($this->upload->do_upload("file")){
                $fileData = $this->upload->data();
                $data = array(
                    "foto_profile_user" => $fileData["file_name"]
                );
                $this->m_crud->update_data($where, $data, 'user');
            }
            $data = array(
                'nama_user' => $getName,
                'nohp_user' => $getPhone,
                'email_user' => $getEmail
            );
            $data2 = array(
                'profesi_user' => $getProf
            );
            
            
            $this->m_crud->update_data($where, $data, 'user');
            $this->m_crud->update_data($where, $data2, 'profile');
            
            $where = array(
                'user.id_user' => $this->session->userdata("id_user")
            );
            
            $data['profile'] = $this->m_profile->selectData($where)->result();
            redirect("lounge/profile");
        }
    }
    public function changePass(){
        $where = array(
            'user.id_user' => $this->session->userdata("id_user")
        );
        $data = array(
            "password_user" => md5($this->input->post("password"))
        );
        $this->m_crud->update_data($where, $data, 'user');
        redirect("lounge/profile");
    }
    
}