<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_delete extends CI_Controller {
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
    
    function user($id)
    {
        
        $data = array(
            "status_user" => 0
        );
        
        $where = array(
            "id_user" => $id
        );
        
        $this->M_crud->update_data($where, $data, 'user');
        redirect('admin/welcome/user');
    }
    
    function cate($id)
    {
        
        $data = array(
            "status_category" => 0
        );
        
        $where = array(
            "id_category" => $id
        );
        
        $this->M_crud->update_data($where, $data, 'category');
        redirect('admin/welcome/cate');
    }
    
    function rec($id)
    {
        
        $data = array(
            "status_recording" => 0
        );
        
        $where = array(
            "id_recording" => $id
        );
        
        $this->M_crud->update_data($where, $data, 'recording');
        redirect('admin/welcome/rec');
    }
    
    function play($id)
    {
        
        $data = array(
            "status_playlist" => 0
        );
        
        $where = array(
            "id_playlist" => $id
        );
        
        $this->M_crud->update_data($where, $data, 'playlist');
        redirect('admin/welcome/playlist');
    }
    
    function rep($id)
    {
        
        $data = array(
            "status_playlist" => 0
        );
        
        $where = array(
            "id_recording_playlist" => $id
        );
        
        $this->M_crud->update_data($where, $data, 'recording_playlist');
        redirect('admin/welcome/recplay');
    }
    
    function rate($id)
    {
        
        $data = array(
            "status_rating" => 0
        );
        
        $where = array(
            "id_rating" => $id
        );
        
        $this->M_crud->update_data($where, $data, 'rating');
        redirect('admin/welcome/rating');
    }
    
    function history($id)
    {
        
        $data = array(
            "status_history" => 0
        );
        
        $where = array(
            "id_history" => $id
        );
        
        $this->M_crud->update_data($where, $data, 'history_recording');
        redirect('admin/welcome/history');
    }
    
    function like($id)
    {
        
        $data = array(
            "status_like" => 0
        );
        
        $where = array(
            "id_like" => $id
        );
        
        $this->M_crud->update_data($where, $data, 'like');
        redirect('admin/welcome/like');
    }
    
    function msg($id)
    {
        
        $data = array(
            "status_message" => 0
        );
        
        $where = array(
            "id_message" => $id
        );
        
        $this->M_crud->update_data($where, $data, 'message');
        redirect('admin/welcome/msg');
    }
    
    function conn($id)
    {
        
        $data = array(
            "status_connection" => 0
        );
        
        $where = array(
            "id_connection" => $id
        );
        
        $this->M_crud->update_data($where, $data, 'connection');
        redirect('admin/welcome/conn');
    }
    
    function comm($id)
    {
        
        $data = array(
            "status_comment" => 0
        );
        
        $where = array(
            "id_comment" => $id
        );
        
        $this->M_crud->update_data($where, $data, 'comment');
        redirect('admin/welcome/comm');
    }
}