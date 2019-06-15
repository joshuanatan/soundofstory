<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_add extends CI_Controller {
    function __construct() 
    {
        parent::__construct();
        $this->load->model('M_crud');
        $this->load->model('M_comment');
        $this->load->model('M_connection');
        $this->load->model('M_like');
        $this->load->model('M_message');
        $this->load->model('M_playlist');
        $this->load->model('M_profile');
        $this->load->model('M_rating');
        $this->load->model('M_recording');
        $this->load->model('M_report');
    
    }
    private function req(){
        $this->load->view("admin/req/html-open");
        $this->load->view("admin/req/stylesheet");
        $this->load->view("admin/req/data-table-css");
        $this->load->view("admin/req/head-close");
    }
    private function close(){
        $this->load->view("admin/req/script");
        $this->load->view("admin/req/data-table-js");
        $this->load->view("admin/req/html-close");
    }
    function user()
    {
        $getID = "";
        $getName = $this->input->post('name');
        $getPass = $this->input->post('pass');
        $getJk = $this->input->post('jk');
        $getEmail = $this->input->post('email');
        $getPhone = $this->input->post('phone');
        $getAdd = "-";
        $getDesc = "-";
        $date = date("Y-m-d");

        $config['upload_path'] = "./assets/profiles/images/";
        $config['allowed_types'] = 'gif|jpg|png'; 
        $config['max_size'] = 0;
        $config['max_width'] = 2048;
        $config['max_height'] = 2048;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('pic1')) {
            $datafiles = $this->upload->data();
            echo "pass".$getPass;
            $datafile = $datafiles['file_name'];
        }
        else{
            echo $this->upload->display_errors();
            $datafile = "default.jpg";
        }
        $data = array(
            "id_user" => "",
            "nama_user" => $getName,
            "password_user" => md5($getPass),
            "gender_user" => $getJk,
            "email_user" => $getEmail,
            "nohp_user" => $getPhone,
            "foto_profile_user" => $datafile,
            "status_user" => 1,
            "tgl_submit_user" => $date
        );
        
        
        $id_user = $this->M_crud->insertData($data, 'user');
        
        $data2 = array(
            "id_user" => $id_user,
            "alamat_user" => $getAdd,
            "description_user" => $getDesc
        );
        $this->M_crud->insertData($data2, 'profile');
        
        //redirect('admin/welcome/user');
    }
    
    function premium($id) {
        $where = array(
            'id_user' => $id
        );
        $data = array(
            'premium' => 1
        );
        
        $this->m_crud->update_data($where, $data, 'user');
        redirect('admin/welcome');
    }
    
    function cate()
    {
        $id = 0;
        $getID = $this->session->userdata("id");
        $getName = $this->input->post('name');
        $date = date("Y-m-d");
        
        if($getID == "" || $getName == "") {
            $this->req();
            $this->load->view('admin/req/sidebar');
            $this->load->view('admin/req/right-panel-open');
            $this->load->view('admin/view_addCategory');
            $this->load->view('admin/req/right-panel-close');
            $this->close();
        }
        else {
            $data = array(
                "id_category" => $id,
                "nama_category" => $getName,
                "id_user_category" => $getID,
                "tgl_submit_category" => $date,
                "status_category" => 1
            );
        
            $this->M_crud->insertData($data, 'category');
            redirect('admin/welcome/cate');
        }
    }
    
    function rec()
    {
        $getID = "";
        $getName = $this->input->post('title');
        $getDesc = $this->input->post('desc');
        $getDuration = $this->input->post('duration');
        $date = date("Y-m-d");
        
        if($getName == "" || $getDesc == "" || $getDuration == "") {
            $this->req();
            $this->load->view('admin/req/sidebar');
            $this->load->view('admin/req/right-panel-open');
            $this->load->view('admin/view_addRecord');
            $this->load->view('admin/req/right-panel-close');
            $this->close();
        }
        
        else {
            $config['upload_path'] ="./assets/recording";
            $config['allowed_types'] = '*';
            $config['max_size'] = 2048000;
            $config['overwrite'] = TRUE;
            $config['max_width'] = 2048;
            $config['max_height'] = 2048;
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('pic1')) {
                $imagefile = $this->upload->data('file_name');
                
            }
            else{
                echo $this->upload->display_errors();
            }

            if ($this->upload->do_upload('file')) {
                $recordfile = $this->upload->data('file_name');
                $params = array(
                    "filename" => base_url()."assets/recording/".$recordfile
                );
                $this->load->library("mp3",$params);
                $duration2 = $this->mp3->getDuration();
                $getDuration = $this->mp3->formatTime($duration2);
            }
            else{
                echo $this->upload->display_errors();
            }

            $data = array(
                "id_recording" => "",
                "judul_recording" => $getName,
                "file_recording" => $recordfile,
                "foto_recording" => $imagefile,
                "description_recording" => $getDesc,
                "duration_recording" => $getDuration,
                "id_user" => $this->session->userdata("id"),
                "status_recording" => 1,
                "tgl_submit_recording" => $date
            );

            $this->M_crud->insertData($data, 'recording');

            redirect('admin/welcome/Rec');
        }
    }
    
    //playlist
    function play()
    {
        $getName = $this->input->post('name');
        $getCat = $this->input->post('cat');
        $getDesc = $this->input->post('desc');
        $getID = $this->session->userdata("id");
        $date = date("Y-m-d");
        $rec = $this->input->post("rec[]");
        
        if($getName == "" || $getCat == "" || $getDesc == "" || $getID == "") {
            $where2 = array(
                'status_recording' => 1
            );
            $data['cat'] = $this->M_crud->selectData('status_category', 'category')->result();
            $data['rec'] = $this->M_recording->select($where2)->result();
            $this->req();
            $this->load->view('admin/req/sidebar');
            $this->load->view('admin/req/right-panel-open');
            $this->load->view('admin/view_addPlaylist',$data);
            $this->load->view('admin/req/right-panel-close');
            $this->close();
        }
        else {
            //upload foto
            $config['upload_path'] ="./assets/images/story";
            $config['allowed_types'] = '*';
            $config['max_size'] = 2048000;
            $config['overwrite'] = TRUE;
            $config['max_width'] = 2048;
            $config['max_height'] = 2048;
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('pic1')) {
                $imagefile = $this->upload->data('file_name');
            }
            else{
                echo $this->upload->display_errors();
            }

            $data = array(
                "id_playlist" => 0,
                "nama_playlist" => $getName,
                "foto_playlist" => $imagefile,
                "description_playlist" => $getDesc,
                "id_category" => $getCat,
                "id_user" => $getID,
                "status_playlist" => 1,
                "tgl_submit_playlist" => $date
            );
            $this->M_crud->insertData($data, 'playlist');

            $where = array(
                "nama_playlist" => $getName,
                "id_category" => $getCat,
                "id_user" => $getID,
                "status_playlist" => 1,
                "tgl_submit_playlist" => $date
            );
            $idp = $this->M_crud->edit($where, 'playlist')->result();
            foreach($idp as $asas) {
                $id_playlist = $asas->id_playlist;
            }

            foreach($rec as $list) {
                $data2 = array(
                    "id_recording_playlist" => 0,
                    "id_user" => $getID,
                    "id_recording" => $list,
                    "id_playlist" => $id_playlist,
                    "status_playlist" => 1,
                    "tgl_submit_playlist" => $date
                );

                $this->M_crud->insertData($data2, 'recording_playlist');
            }


            redirect('admin/welcome/playlist');
        }
    }
    
    function recplay()
    {
        $getIDR = $this->input->post('idr');
        $getIDP = $this->input->post('idp');
        $date = date("Y-m-d");
        
        if($getIDR == "" || $getIDP == "") {
            $where = array(
                "recording" => array(
                    "recording.status_recording" => 1
                ),
                "playlist" => array(
                    "playlist.status_playlist" => 1
                )
            );
            $data = array(
                "recording" => $this->M_recording->select($where["recording"]),
                "playlist" => $this->M_playlist->selectData($where["playlist"]),
            );
            $this->req();
            $this->load->view('admin/req/sidebar');
            $this->load->view('admin/req/right-panel-open');
            $this->load->view('admin/view_addRecPlay',$data);
            $this->load->view('admin/req/right-panel-close');
            $this->close();
        }
        else {
            $where = array(
                "id_recording" => $getIDR,
                "status_playlist" => 1,
            );
            $max = $this->M_playlist->getMaxChapter($where);
            $data = array(
                "id_recording_playlist" => 0,
                "id_user" => $this->session->id,
                "id_recording" => $getIDR,
                "id_playlist" => $getIDP,
                "status_playlist" => 1,
                "tgl_submit_playlist" => $date,
                "chapter_playlist" => $max
            );

            $this->M_crud->insertData($data, 'recording_playlist');
            redirect('admin/welcome/recplay');
        }
    }
    
    function rate()
    {
        $getID = $this->input->post('id');
        $getIDR = $this->input->post('idr');
        $getRate = $this->input->post('rate');
        $date = date("Y-m-d");
        
        if($getID == "" || $getIDR == "" || $getRate == "") {
            $data['rec'] = $this->M_crud->selectData('status_recording', 'recording')->result();
            $this->req();
            $this->load->view('admin/req/sidebar');
            $this->load->view('admin/req/right-panel-open');
            $this->load->view('admin/view_addRating',$data);
            $this->load->view('admin/req/right-panel-close');
            $this->close();
        }
        else {
            $data = array(
                "id_rating" => 0,
                "id_user" => $getID,
                "id_recording" => $getIDR,
                "jumlah_rating" => $getRate,
                "status_rating" => 1,
                "tgl_submit_rating" => $date
            );

            $this->M_crud->insertData($data, 'rating');
            redirect('admin/welcome/rating');
        }
    }
    
    function like()
    {
        $getID = $this->input->post('id');
        $getIDR = $this->input->post('idr');
        $getLike = $this->input->post('like');
        $date = date("Y-m-d");
        
        if($getID == "" || $getIDR == "" || $getLike == "") {
            $data['rec'] = $this->M_crud->selectData('status_recording', 'recording')->result();
            $this->req();
            $this->load->view('admin/req/sidebar');
            $this->load->view('admin/req/right-panel-open');
            $this->load->view('admin/view_addLike',$data);
            $this->load->view('admin/req/right-panel-close');
            $this->close();
        }
        else {
            $data = array(
                "id_like" => 0,
                "id_user" => $getID,
                "id_recording" => $getIDR,
                "status_like" => $getLike,
                "tgl_submit_like" => $date
            );

            $this->M_crud->insertData($data, 'like');
            redirect('admin/welcome/like');
        }
    }
    
    function msg()
    {
        $getFID = $this->input->post('fid');
        $getTID = $this->input->post('tid');
        $getIsi = $this->input->post('isi');
        $date = date("Y-m-d");
        date_default_timezone_set('Asia/Jakarta');
        $time = date("H:i:s", time());
        
        if($getFID == "" || $getTID == "" || $getIsi == "") {
            $this->req();
            $this->load->view('admin/req/sidebar');
            $this->load->view('admin/req/right-panel-open');
            $this->load->view('admin/view_addMsg');
            $this->load->view('admin/req/right-panel-close');
            $this->close();
        }
        else {
            $data = array(
                "id_message" => 0,
                "konten" => $getIsi,
                "id_user_dari" => $getFID,
                "id_user_tujuan" => $getTID,
                "status_message" => 1,
                "tgl_submit_message" => $date,
                "jam_submit_message" => $time
            );

            $this->M_crud->insertData($data, 'message');
            redirect('admin/welcome/msg');
        }
    }
    
    function conn()
    {
        $getID = $this->input->post('id');
        $getIDD = $this->input->post('idd');
        $date = date("Y-m-d");
        
        if($getID == "" || $getIDD == "") {
            $this->req();
            $this->load->view('admin/req/sidebar');
            $this->load->view('admin/req/right-panel-open');
            $this->load->view('admin/view_addConn');
            $this->load->view('admin/req/right-panel-close');
            $this->close();
        }
        else {
            $data = array(
                "id_connection" => 0,
                "id_user" => $getID,
                "id_user_2" => $getIDD,
                "status_connection" => 1,
                "tgl_submit_connection" => $date
            );

            $this->M_crud->insertData($data, 'connection');
            redirect('admin/welcome/conn');
        }
    }
    
    function comm()
    {
        $getID = $this->input->post('id');
        $getIDR = $this->input->post('idr');
        $getIsi = $this->input->post('isi');
        $date = date("Y-m-d");
        
        if($getID == "" || $getIDR == "" || $getIsi == "") {
            $data['rec'] = $this->M_crud->selectData('status_recording', 'recording')->result();
            $this->req();
            $this->load->view('admin/req/sidebar');
            $this->load->view('admin/req/right-panel-open');
            $this->load->view('admin/view_addComm', $data);
            $this->load->view('admin/req/right-panel-close');
            $this->close();
        }
        else {
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

            $this->M_crud->insertData($data, 'comment');
            $this->M_crud->insertData($data2, 'report');
            redirect('admin/welcome/comm');
        }
    }
    
    function faq()
    {
        $getQuestion = $this->input->post('question');
        $getAnswer = $this->input->post('answer');
        $date = date("Y-m-d");
        
        if($getQuestion == "" || $getAnswer == "") {
            $this->req();
            $this->load->view('admin/req/sidebar');
            $this->load->view('admin/req/right-panel-open');
            $this->load->view('admin/view_addFaq');
            $this->load->view('admin/req/right-panel-close');
            $this->close();
        }
        else {
            $data = array(
                "id_faq" => 0,
                "question_faq" => $getQuestion,
                "answer_faq" => $getAnswer,
                "status_faq" => 1
            );

            $this->M_crud->insertData($data, 'faq');
            redirect('admin/welcome/faq');
        }
    }
}