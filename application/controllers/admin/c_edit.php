<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_edit extends CI_Controller {
    function __construct() 
    {
        parent::__construct();
        $this->load->model('m_crud');
    }
	
    function editUser($id)
    {
        $where = array(
            "id_user" => $id
        );
        $data['user'] = $this->m_crud->edit($where, 'user')->result();
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_editUser', $data);
    }
    
    function updateUser()
    {
        $getID = $this->input->post("id");
        $getName = $this->input->post("name");
        $getJk = $this->input->post("jk");
        $getEmail = $this->input->post("email");
        $getPhone = $this->input->post("phone");
        
        $data = array(
            "nama_user" => $getName,
            "gender_user" => $getJk,
            "email_user" => $getEmail,
            "nohp_user" => $getPhone,
        );
        
        $where = array(
            "id_user" => $getID
        );
        
        $this->m_crud->update_data($where, $data, 'user');
        redirect('Welcome/index');
    }
    
    function cate($id)
    {
        $where = array(
            "id_category" => $id
        );
        $data['cat'] = $this->m_crud->edit($where, 'category')->result();
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_editCate', $data);
    }
    
    function updateCate()
    {
        $getID = $this->input->post("id");
        $getIDC = $this->input->post("idc");
        $getName = $this->input->post("name");
        
        $data = array(
            "nama_category" => $getName,
            "id_user_category" => $getID
        );
        
        $where = array(
            "id_category" => $getIDC
        );
        
        $this->m_crud->update_data($where, $data, 'category');
        redirect('Welcome/Cate');
    }
    
    function rec($id)
    {
        $where = array(
            "id_recording" => $id
        );
        $data['rec'] = $this->m_crud->edit($where, 'recording')->result();
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_editRec', $data);
    }
    
    function updateRec()
    {
        $getID = $this->input->post("id");
        $getIDR = $this->input->post("idr");
        $getTitle = $this->input->post("title");
        $getDesc = $this->input->post("desc");
        $getDuration = $this->input->post("duration");
        
        $data = array(
            "judul_recording" => $getTitle,
            "id_user" => $getID,
            "description_recording" => $getDesc,
            "duration_recording" => $getDuration
        );
        
        $where = array(
            "id_recording" => $getIDR
        );
        
        $this->m_crud->update_data($where, $data, 'recording');
        redirect('Welcome/Rec');
    }
    
    function play($id)
    {
        $where = array(
            "id_playlist" => $id
        );
        $data['play'] = $this->m_crud->edit($where, 'playlist')->result();
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_editPlaylist', $data);
    }
    
    function updatePlay()
    {
        $getID = $this->input->post("id");
        $getIDP = $this->input->post("idp");
        $getName = $this->input->post("name");
        
        $data = array(
            "nama_playlist" => $getName,
            "id_user" => $getID
        );
        
        $where = array(
            "id_playlist" => $getIDP
        );
        
        $this->m_crud->update_data($where, $data, 'playlist');
        redirect('Welcome/Playlist');
    }
    
    function rep($id)
    {
        $where = array(
            "id_recording_playlist" => $id
        );
        $data['rp'] = $this->m_crud->edit($where, 'recording_playlist')->result();
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_editRP', $data);
    }
    
    function updateRP()
    {
        $getIDRP = $this->input->post("idrp");
        $getID = $this->input->post("id");
        $getIDP = $this->input->post("idp");
        $getIDR = $this->input->post("idr");
        
        $data = array(
            "id_user" => $getID,
            "id_playlist" => $getIDP,
            "id_recording" => $getIDR
        );
        
        $where = array(
            "id_recording_playlist" => $getIDRP
        );
        
        $this->m_crud->update_data($where, $data, 'recording_playlist');
        redirect('Welcome/RecPlay');
    }
    
    function rate($id)
    {
        $where = array(
            "id_rating" => $id
        );
        $data['rate'] = $this->m_crud->edit($where, 'rating')->result();
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_editRating', $data);
    }
    
    function updateRate()
    {
        $getIDRT = $this->input->post("idrate");
        $getID = $this->input->post("id");
        $getIDR = $this->input->post("idr");
        $getRate = $this->input->post('rate');
        $data = array(
            "id_user" => $getID,
            "id_recording" => $getIDR,
            "jumlah_rating" => $getRate,
        );
        
        $where = array(
            "id_rating" => $getIDRT
        );
        
        $this->m_crud->update_data($where, $data, 'rating');
        redirect('Welcome/Rating');
    }
    
    function like($id)
    {
        $where = array(
            "id_like" => $id
        );
        $data['like'] = $this->m_crud->selectData('status_like', 'like')->result();
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_editLike', $data);
    }
    
    function updateLike()
    {
        $getIDL = $this->input->post("idl");
        $getStatus = $this->input->post("like");
        $data = array(
            "status_like" => $getStatus
        );
        
        $where = array(
            "id_like" => $getIDL
        );
        
        $this->m_crud->update_data($where, $data, 'like');
        redirect('Welcome/Like');
    }
    
    function msg($id)
    {
        $where = array(
            "id_message" => $id
        );
        $data['msg'] = $this->m_crud->selectData('status_message', 'message')->result();
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_editMsg', $data);
    }
    
    function updateMsg()
    {
        $getIDM = $this->input->post("idm");
        $getIsi = $this->input->post("isi");
        $getFID = $this->input->post("fid");
        $getTID = $this->input->post("tid");
        $data = array(
            "konten" => $getIsi,
            "id_user_dari" => $getFID,
            "id_user_tujuan" => $getTID,
        );
        
        $where = array(
            "id_message" => $getIDM
        );
        
        $this->m_crud->update_data($where, $data, 'message');
        redirect('Welcome/Msg');
    }
    
    function conn($id)
    {
        $where = array(
            "id_connection" => $id
        );
        $data['conn'] = $this->m_crud->selectData('status_connection', 'connection')->result();
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_editConn', $data);
    }
    
    function updateConn()
    {
        $getIDC = $this->input->post("idc");
        $getID = $this->input->post("id");
        $getIDD = $this->input->post("idd");
        $data = array(
            "id_user" => $getID,
            "id_user_2" => $getIDD,
        );
        
        $where = array(
            "id_connection" => $getIDC
        );
        
        $this->m_crud->update_data($where, $data, 'connection');
        redirect('Welcome/Conn');
    }
    
    function comm($id)
    {
        $where = array(
            "id_comment" => $id
        );
        $data['comm'] = $this->m_crud->selectData('status_comment', 'comment')->result();
        $data['rec'] = $this->m_crud->selectData('status_recording', 'recording')->result();
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_editComm', $data);
    }
    
    function updateComm()
    {
        $getIDC = $this->input->post("idc");
        $getIsi = $this->input->post("isi");
        
        $data = array(
            "comment" => $getIsi
        );
        
        $where = array(
            "id_comment" => $getIDC
        );
        
        $this->m_crud->update_data($where, $data, 'comment');
        redirect('Welcome/Comm');
    }
}