<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_add extends CI_Controller {
    function __construct() 
    {
        parent::__construct();
        $this->load->model('m_crud');
    }
    
    function user()
    {
        $getID = "";
        $getName = $this->input->post('name');
        $getPass = $this->input->post('pass');
        $getJk = $this->input->post('jk');
        $getEmail = $this->input->post('email');
        $getPhone = $this->input->post('phone');
        $getAdd = $this->input->post('address');
        $getDesc = $this->input->post('desc');
        $date = date("Y-m-d");
        /*$config = array();
        $config['upload_path'] = 'C:/xampp/htdocs/CI_sound/assets/profiles/images/';
        $config['allowed_types'] = '*'; //'gif|jpg|png';
        if ($this->upload->do_upload('pic1')) {
            $datafile = array('upload_data' => $this->upload->data());
        }*/
        
        $target_dir = "C:/xampp/htdocs/CI_sound/assets/profiles/images/";
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
        
        $data2 = array(
            "id_user" => "",
            "alamat_user" => $getAdd,
            "description_user" => $getDesc
        );
        
        $this->m_crud->insertData($data, 'user');
        $this->m_crud->insertData($data2, 'profile');
        
        redirect('Welcome/index');
    }
    
    function cate()
    {
        $id = 0;
        $getID = $this->input->post('id');
        $getName = $this->input->post('name');
        $date = date("Y-m-d");
        
        $data = array(
            "id_category" => $id,
            "nama_category" => $getName,
            "id_user_category" => $getID,
            "tgl_submit_category" => $date,
            "status_category" => 1
        );
        
        $this->m_crud->insertData($data, 'category');
        redirect('Welcome/cate');
    }
    
    function rec()
    {
        $getID = "";
        $getName = $this->input->post('title');
        $id = $this->input->post('id');
        $cat = $this->input->post('cat');
        $date = date("Y-m-d");
        
        $target_dir = "C:/xampp/htdocs/CI_sound/assets/records/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        $file = basename($_FILES["file"]["name"]);
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        $data = array(
            "id_recording" => "",
            "judul_recording" => $getName,
            "file_recording" => $file,
            "id_user" => $id,
            "id_category" => $cat,
            "status_recording" => 1,
            "tgl_submit_recording" => $date
        );
        
        $this->m_crud->insertData($data, 'recording');
        
        redirect('Welcome/Rec');
    }
    
    function play()
    {
        $getName = $this->input->post('name');
        $getID = $this->input->post('id');
        $date = date("Y-m-d");
        
        $data = array(
            "id_playlist" => 0,
            "nama_playlist" => $getName,
            "id_user" => $getID,
            "status_playlist" => 1,
            "tgl_submit_playlist" => $date
        );
        
        $this->m_crud->insertData($data, 'playlist');
        redirect('Welcome/Playlist');
    }
    
    function recplay()
    {
        $getID = $this->input->post('id');
        $getIDR = $this->input->post('idr');
        $getIDP = $this->input->post('idp');
        $date = date("Y-m-d");
        
        $data = array(
            "id_recording_playlist" => 0,
            "id_user" => $getID,
            "id_recording" => $getIDR,
            "id_playlist" => $getIDP,
            "status_playlist" => 1,
            "tgl_submit_playlist" => $date
        );
        
        $this->m_crud->insertData($data, 'recording_playlist');
        redirect('Welcome/RecPlay');
    }
}