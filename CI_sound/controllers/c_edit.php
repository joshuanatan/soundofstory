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
        $data['cat'] = $this->m_crud->selectData('status_category', 'category')->result();
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_editRec', $data);
    }
    
    function updateRec()
    {
        $getID = $this->input->post("id");
        $getIDR = $this->input->post("idr");
        $getTitle = $this->input->post("title");
        $getCat = $this->input->post("cat");
        
        $data = array(
            "judul_recording" => $getTitle,
            "id_user" => $getID,
            "id_category" => $getCat
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
}