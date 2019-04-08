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
}