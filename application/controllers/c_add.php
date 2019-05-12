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
        
        $data2 = array(
            "id_user_recording" => 0,
            "id_user" => $id,
        );
        
        $data3 = array(
            "id_history" => 0,
            "id_user" => 1,
            "id_recording" => 1,
            "status_history" => 1,
            "tgl_submit_history" => $date
        );
        
        $this->m_crud->insertData($data, 'recording');
        //$this->m_crud->insertData($data2, 'user_recording');
        //$this->m_crud->insertData($data3, 'history_recording');
        
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
    
    function rate()
    {
        $getID = $this->input->post('id');
        $getIDR = $this->input->post('idr');
        $getRate = $this->input->post('rate');
        $date = date("Y-m-d");
        
        $data = array(
            "id_rating" => 0,
            "id_user" => $getID,
            "id_recording" => $getIDR,
            "jumlah_rating" => $getRate,
            "status_rating" => 1,
            "tgl_submit_rating" => $date
        );
        
        $this->m_crud->insertData($data, 'rating');
        redirect('Welcome/Rating');
    }
    
    function like()
    {
        $getID = $this->input->post('id');
        $getIDR = $this->input->post('idr');
        $getLike = $this->input->post('like');
        $date = date("Y-m-d");
        
        $data = array(
            "id_like" => 0,
            "id_user" => $getID,
            "id_recording" => $getIDR,
            "status_like" => $getLike,
            "tgl_submit_like" => $date
        );
        
        $this->m_crud->insertData($data, 'like');
        redirect('Welcome/Like');
    }
    
    function msg()
    {
        $getFID = $this->input->post('fid');
        $getTID = $this->input->post('tid');
        $getIsi = $this->input->post('isi');
        $date = date("Y-m-d");
        date_default_timezone_set('Asia/Jakarta');
        $time = date("H:i:s", time());
        
        $data = array(
            "id_message" => 0,
            "konten" => $getIsi,
            "id_user_dari" => $getFID,
            "id_user_tujuan" => $getTID,
            "status_message" => 1,
            "tgl_submit_message" => $date,
            "jam_submit_message" => $time
        );
        
        $this->m_crud->insertData($data, 'message');
        redirect('Welcome/Msg');
    }
    
    function conn()
    {
        $getID = $this->input->post('id');
        $getIDD = $this->input->post('idd');
        $date = date("Y-m-d");
        
        $data = array(
            "id_connection" => 0,
            "id_user" => $getID,
            "id_user_2" => $getIDD,
            "status_connection" => 1,
            "tgl_submit_connection" => $date
        );
        
        $this->m_crud->insertData($data, 'connection');
        redirect('Welcome/Conn');
    }
    
    function comm()
    {
        $getID = $this->input->post('id');
        $getIDR = $this->input->post('idr');
        $getIsi = $this->input->post('isi');
        $date = date("Y-m-d");
        
        $data = array(
            "id_comment" => 0,
            "id_user" => $getID,
            "comment" => $getIsi,
            "id_recording" => $getIDR,
            "tgl_submit_comment" => $date,
            "status_comment" => 1
        );
        
        $data2 = array(
            "id_comment" => 0,
            "id_user_pelapor" => $getID,
            "tgl_submit_report" => $date,
            "status_report" => 1
        );
        
        $this->m_crud->insertData($data, 'comment');
        $this->m_crud->insertData($data2, 'report');
        redirect('Welcome/Comm');
    }
    
}