<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    function __construct() 
    {
        parent::__construct();
        $this->load->model('m_crud');
    }
    
    function index()
	{
		$this->load->view('view_admin_login');
	}
    
    function login()
    {
        $getEmail = $this->input->post('email');
        $getPass = $this->input->post('pass');
        $where = array(
            'email_user' => $getEmail,
            'password_user' => md5($getPass)
        );
        $data = $this->m_crud->edit($where, 'user')->result();
        $num = $this->m_crud->edit($where, 'user')->num_rows();
        if($num == 0) {
            //gagal login
        }
        else {
            foreach($data as $list) {
                $nama = $list->nama_user;
                $email = $list->email_user;
                $foto = $list->foto_profile_user;
                $id = $list->id_user;
                $this->session->set_userdata("id", $id);
                $this->session->set_userdata("nama", $nama);
                $this->session->set_userdata("foto", $foto);
                $this->session->set_userdata("email", $email);
                
                redirect('Welcome/user');
            }
        }
        
    }
    
    function registerAdmin()
    {
        $this->load->view('view_admin_register');
    }
    
    function register()
    {
        $getID = "";
        $getName = $this->input->post('name');
        $getPass = $this->input->post('pass');
        $getJk = $this->input->post('jk');
        $getEmail = $this->input->post('email');
        $getPhone = $this->input->post('phone');
        $getAdd = $this->input->post('address');
        $getBod = $this->input->post('bod');
        $getDesc = $this->input->post('desc');
        $getProf = $this->input->post('prof');
        $date = date("Y-m-d");
        $bod = date('Y-m-d', strtotime($getBod));
        /*$config = array();
        $config['upload_path'] = 'C:/xampp/htdocs/CI_sound/assets/profiles/images/';
        $config['allowed_types'] = '*'; //'gif|jpg|png';
        if ($this->upload->do_upload('pic1')) {
            $datafile = array('upload_data' => $this->upload->data());
        }*/
        
        $target_dir = "C:/xampp/htdocs/soundofstory/assets/profiles/images/";
        $target_file = $target_dir . basename($_FILES["pic1"]["name"]);
        $photo = basename($_FILES["pic1"]["name"]);
        if (move_uploaded_file($_FILES["pic1"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["pic1"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        $data = array(
            "id_user" => "",
            "nama_user" => $getName,
            "password_user" => md5($getPass),
            "gender_user" => $getJk,
            "email_user" => $getEmail,
            "nohp_user" => $getPhone,
            "foto_profile_user" => $photo,
            "status_user" => 1,
            "tgl_submit_user" => $date
        );
        $this->m_crud->insertData($data, 'user');
        $where = array(
            'email_user' => $getEmail
        );
        $get = $this->m_crud->getID($where)->result();
        foreach($get as $lst) {
            $id = $lst->id_user;
        }
        $data2 = array(
            "id_user" => $id,
            "alamat_user" => $getAdd,
            "description_user" => $getDesc,
            "tgl_lahir_user" => $bod,
            "profesi_user" => $getProf
        );
        $this->m_crud->insertData($data2, 'profile');
        
        redirect('admin');
    }
    
    function logout() 
    {
        $this->session->sess_destroy();
        redirect('admin');
    }
}