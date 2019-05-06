<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_delete extends CI_Controller {
    function __construct() 
    {
        parent::__construct();
        $this->load->model('m_crud');
    }
    
    function user($id)
    {
        
        $data = array(
            "status_user" => 0
        );
        
        $where = array(
            "id_user" => $id
        );
        
        $this->m_crud->update_data($where, $data, 'user');
        redirect('Welcome/index');
    }
    
    function cate($id)
    {
        
        $data = array(
            "status_category" => 0
        );
        
        $where = array(
            "id_category" => $id
        );
        
        $this->m_crud->update_data($where, $data, 'category');
        redirect('Welcome/cate');
    }
    
    function rec($id)
    {
        
        $data = array(
            "status_recording" => 0
        );
        
        $where = array(
            "id_recording" => $id
        );
        
        $this->m_crud->update_data($where, $data, 'recording');
        redirect('Welcome/rec');
    }
    
    function play($id)
    {
        
        $data = array(
            "status_playlist" => 0
        );
        
        $where = array(
            "id_playlist" => $id
        );
        
        $this->m_crud->update_data($where, $data, 'playlist');
        redirect('Welcome/Playlist');
    }
    
    function rep($id)
    {
        
        $data = array(
            "status_playlist" => 0
        );
        
        $where = array(
            "id_recording_playlist" => $id
        );
        
        $this->m_crud->update_data($where, $data, 'recording_playlist');
        redirect('Welcome/RecPlay');
    }
    
    function rate($id)
    {
        
        $data = array(
            "status_rating" => 0
        );
        
        $where = array(
            "id_rating" => $id
        );
        
        $this->m_crud->update_data($where, $data, 'rating');
        redirect('Welcome/Rating');
    }
    
    function history($id)
    {
        
        $data = array(
            "status_history" => 0
        );
        
        $where = array(
            "id_history" => $id
        );
        
        $this->m_crud->update_data($where, $data, 'history_recording');
        redirect('Welcome/History');
    }
    
    function like($id)
    {
        
        $data = array(
            "status_like" => 0
        );
        
        $where = array(
            "id_like" => $id
        );
        
        $this->m_crud->update_data($where, $data, 'like');
        redirect('Welcome/Like');
    }
    
    function msg($id)
    {
        
        $data = array(
            "status_message" => 0
        );
        
        $where = array(
            "id_message" => $id
        );
        
        $this->m_crud->update_data($where, $data, 'message');
        redirect('Welcome/Msg');
    }
    
    function conn($id)
    {
        
        $data = array(
            "status_connection" => 0
        );
        
        $where = array(
            "id_connection" => $id
        );
        
        $this->m_crud->update_data($where, $data, 'connection');
        redirect('Welcome/Conn');
    }
    
    function comm($id)
    {
        
        $data = array(
            "status_comment" => 0
        );
        
        $where = array(
            "id_comment" => $id
        );
        
        $this->m_crud->update_data($where, $data, 'comment');
        redirect('Welcome/Comm');
    }
}