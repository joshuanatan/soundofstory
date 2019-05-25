<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_edit extends CI_Controller {
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
	function editUser($id){
        
        $where = array(
            "id_user" => $id
        );
        $data['user'] = $this->M_crud->edit($where, 'user')->result();
        $this->req();
        $this->load->view('admin/req/sidebar');
        $this->load->view('admin/req/right-panel-open');
        $this->load->view('admin/view_editUser',$data);
        $this->load->view('admin/req/right-panel-close');
        $this->close();
    }
    function password(){
        $this->req();
        $this->load->view('admin/req/sidebar');
        $this->load->view('admin/req/right-panel-open');
        $this->load->view('admin/view_editPass');
        $this->load->view('admin/req/right-panel-close');
        $this->close();
    }
    function updatePassword(){
        $where = array(
            "id_user" => $this->session->id,
        );
        $data = array(
            "password_user" => md5($this->input->post("password"))
        );
        echo $this->input->post("password");
        $this->M_crud->update_data($where,$data,"user");
        redirect("admin/welcome/user");
    }
    function updateUser()
    {
        $getID = $this->input->post("id");
        $getName = $this->input->post("name");
        $getJk = $this->input->post("jk");
        $getEmail = $this->input->post("email");
        $getPhone = $this->input->post("phone");
        
        if($getID == "" || $getName == "" || $getJk == "" || $getEmail == "" || $getPhone == "") {
            $where = array(
                "id_user" => $getID
            );
            $data['user'] = $this->M_crud->edit($where, 'user')->result();
            $this->req();
            $this->load->view('admin/req/sidebar');
            $this->load->view('admin/req/right-panel-open');
            $this->load->view('admin/view_editUser',$data);
            $this->load->view('admin/req/right-panel-close');
            $this->close();
        }
        else {
            $data = array(
                "nama_user" => $getName,
                "gender_user" => $getJk,
                "email_user" => $getEmail,
                "nohp_user" => $getPhone,
            );

            $where = array(
                "id_user" => $getID
            );

            $this->M_crud->update_data($where, $data, 'user');
            redirect('admin/welcome/user');
        }
    }
    function cate($id){
        
        $where = array(
            "id_category" => $id
        );
        $data['cat'] = $this->M_crud->edit($where, 'category')->result();
        $this->req();
        $this->load->view('admin/req/sidebar');
        $this->load->view('admin/req/right-panel-open');
        $this->load->view('admin/view_editCate',$data);
        $this->load->view('admin/req/right-panel-close');
        $this->close();
    }
    function updateCate()
    {
        $getID = $this->session->userdata("id");
        $getIDC = $this->input->post("idc");
        $getName = $this->input->post("name");
        if($getID == "" || $getIDC == "" || $getName == "") {
            $where = array(
                "id_category" => $id
            );
            $data['cat'] = $this->M_crud->edit($where, 'category')->result();
            $this->req();
            $this->load->view('admin/req/sidebar');
            $this->load->view('admin/req/right-panel-open');
            $this->load->view('admin/view_editCate',$data);
            $this->load->view('admin/req/right-panel-close');
            $this->close();
        }
        else {
            $data = array(
                "nama_category" => $getName,
                "id_user_category" => $getID
            );

            $where = array(
                "id_category" => $getIDC
            );

            $this->M_crud->update_data($where, $data, 'category');
            redirect('admin/welcome/cate');
        }
    }
    function rec($id){
        $where = array(
            "id_recording" => $id
        );
        $data['rec'] = $this->M_crud->edit($where, 'recording')->result();
        $this->req();
        $this->load->view('admin/req/sidebar');
        $this->load->view('admin/req/right-panel-open');
        $this->load->view('admin/view_editRec',$data);
        $this->load->view('admin/req/right-panel-close');
        $this->close();
    }
    
    function updateRec()
    {
        $getID = $this->input->post("id");
        $getIDR = $this->input->post("idr");
        $getTitle = $this->input->post("title");
        $getDesc = $this->input->post("desc");
        $getDuration = $this->input->post("duration");
        
        if($getID == "" || $getIDR == "" || $getTitle == "" || $getDesc == "" || $getDuration == "") {
            $where = array(
                "id_recording" => $getID
            );
            $data['rec'] = $this->M_crud->edit($where, 'recording')->result();
            $this->req();
            $this->load->view('admin/req/sidebar');
            $this->load->view('admin/req/right-panel-open');
            $this->load->view('admin/view_editRec',$data);
            $this->load->view('admin/req/right-panel-close');
            $this->close();
        }
        else {
            $data = array(
                "judul_recording" => $getTitle,
                "id_user" => $getID,
                "description_recording" => $getDesc,
                "duration_recording" => $getDuration
            );

            $where = array(
                "id_recording" => $getIDR
            );

            $this->M_crud->update_data($where, $data, 'recording');
            redirect('admin/welcome/rec');
        }
    }
    function play($id){
        $where = array(
            "id_playlist" => $id
        );
        $data['play'] = $this->M_crud->edit($where, 'playlist')->result();
        $where2 = array(
            'status_recording' => 1
        );
        $data['cat'] = $this->M_crud->selectData('status_category', 'category')->result();
        $data['rec'] = $this->M_recording->select($where2)->result();
        $this->req();
        $this->load->view('admin/req/sidebar');
        $this->load->view('admin/req/right-panel-open');
        $this->load->view('admin/view_editPlaylist',$data);
        $this->load->view('admin/req/right-panel-close');
        $this->close();
    }
    
    function updatePlay()
    {
        $getID = $this->input->post("id");
        $getIDP = $this->input->post("idp");
        $getName = $this->input->post("name");
        
        if($getID == "" || $getIDP == "" || $getName == "") {
            $where = array(
                "id_playlist" => $getID
            );
            $data['play'] = $this->M_crud->edit($where, 'playlist')->result();
            $this->req();
            $this->load->view('admin/req/sidebar');
            $this->load->view('admin/req/right-panel-open');
            $this->load->view('admin/view_editPlaylist',$data);
            $this->load->view('admin/req/right-panel-close');
            $this->close();
        }
        else {
            $data = array(
                "nama_playlist" => $getName,
                "id_user" => $getID
            );

            $where = array(
                "id_playlist" => $getIDP
            );

            $this->M_crud->update_data($where, $data, 'playlist');
            redirect('admin/welcome/playlist');
        }
    }
    function rep($id){
        $where = array(
            "id_recording_playlist" => $id
        );
        $data['rp'] = $this->M_crud->edit($where, 'recording_playlist')->result();
        $this->req();
        $this->load->view('admin/req/sidebar');
        $this->load->view('admin/req/right-panel-open');
        $this->load->view('admin/view_editRP',$data);
        $this->load->view('admin/req/right-panel-close');
        $this->close();
    }
    
    function updateRP()
    {
        $getIDRP = $this->input->post("idrp");
        $getID = $this->input->post("id");
        $getIDP = $this->input->post("idp");
        $getIDR = $this->input->post("idr");
        
        if($getIDRP == "" || $getID == "" || $getIDP == "" || $getIDR == "") {
            $where = array(
                "id_recording_playlist" => $getIDRP
            );
            $data['rp'] = $this->M_crud->edit($where, 'recording_playlist')->result();
            $this->req();
            $this->load->view('admin/req/sidebar');
            $this->load->view('admin/req/right-panel-open');
            $this->load->view('admin/view_editRP',$data);
            $this->load->view('admin/req/right-panel-close');
            $this->close();
        }
        else {
            $data = array(
                "id_user" => $getID,
                "id_playlist" => $getIDP,
                "id_recording" => $getIDR
            );

            $where = array(
                "id_recording_playlist" => $getIDRP
            );

            $this->M_crud->update_data($where, $data, 'recording_playlist');
            redirect('admin/welcome/recplay');
        }
    }
    function rate($id){
        $where = array(
            "id_rating" => $id
        );
        $data['rate'] = $this->M_crud->edit($where, 'rating')->result();
        $this->req();
        $this->load->view('admin/req/sidebar');
        $this->load->view('admin/req/right-panel-open');
        $this->load->view('admin/view_editRating',$data);
        $this->load->view('admin/req/right-panel-close');
        $this->close();
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
        
        if($getIDRT == "" || $getID == "" || $getIDR == "" || $getRate == "") {
            $where = array(
                "id_rating" => $getIDRT
            );
            $data['rate'] = $this->M_crud->edit($where, 'rating')->result();
            $this->req();
            $this->load->view('admin/req/sidebar');
            $this->load->view('admin/req/right-panel-open');
            $this->load->view('admin/view_editRating',$data);
            $this->load->view('admin/req/right-panel-close');
            $this->close();
        }
        else {
            $where = array(
                "id_rating" => $getIDRT
            );

            $this->M_crud->update_data($where, $data, 'rating');
            redirect('admin/welcome/rating');
        }
    }
    function like($id){
        $where = array(
            "id_like" => $id
        );
        $data['like'] = $this->M_crud->selectData('status_like', 'like')->result();
        $this->req();
        $this->load->view('admin/req/sidebar');
        $this->load->view('admin/req/right-panel-open');
        $this->load->view('admin/view_editLike',$data);
        $this->load->view('admin/req/right-panel-close');
        $this->close();
    }
    
    function updateLike()
    {
        $getIDL = $this->input->post("idl");
        $getStatus = $this->input->post("like");
        
        if($getIDL == "" || $getStatus == "") {
            $where = array(
                "id_like" => $getIDL
            );
            $data['like'] = $this->M_crud->selectData('status_like', 'like')->result();
            $this->req();
            $this->load->view('admin/req/sidebar');
            $this->load->view('admin/req/right-panel-open');
            $this->load->view('admin/view_editLike',$data);
            $this->load->view('admin/req/right-panel-close');
            $this->close();
        }
        else {
            $data = array(
                "status_like" => $getStatus
            );

            $where = array(
                "id_like" => $getIDL
            );

            $this->M_crud->update_data($where, $data, 'like');
            redirect('admin/welcome/like');
        }
    }
    function msg($id){
        $where = array(
            "id_message" => $id
        );
        $data['msg'] = $this->M_crud->selectData('status_message', 'message')->result();
        $this->req();
        $this->load->view('admin/req/sidebar');
        $this->load->view('admin/req/right-panel-open');
        $this->load->view('admin/view_editMsg',$data);
        $this->load->view('admin/req/right-panel-close');
        $this->close();
    }
    
    function updateMsg()
    {
        $getIDM = $this->input->post("idm");
        $getIsi = $this->input->post("isi");
        $getFID = $this->input->post("fid");
        $getTID = $this->input->post("tid");
        
        if($getIDM == "" || $getIsi == "" || $getFID == "" || $getTID == "") {
            $where = array(
                "id_message" => $getIDM
            );
            $data['msg'] = $this->M_crud->selectData('status_message', 'message')->result();
            $this->req();
            $this->load->view('admin/req/sidebar');
            $this->load->view('admin/req/right-panel-open');
            $this->load->view('admin/view_editMsg',$data);
            $this->load->view('admin/req/right-panel-close');
            $this->close();
        }
        else {
            $data = array(
                "konten" => $getIsi,
                "id_user_dari" => $getFID,
                "id_user_tujuan" => $getTID,
            );

            $where = array(
                "id_message" => $getIDM
            );

            $this->M_crud->update_data($where, $data, 'message');
            redirect('admin/welcome/msg');
        }
    }
    function conn($id){
        $where = array(
            "id_connection" => $id
        );
        $data['conn'] = $this->M_crud->selectData('status_connection', 'connection')->result();
        $this->req();
        $this->load->view('admin/req/sidebar');
        $this->load->view('admin/req/right-panel-open');
        $this->load->view('admin/view_editConn',$data);
        $this->load->view('admin/req/right-panel-close');
        $this->close();
    }
    
    function updateConn()
    {
        $getIDC = $this->input->post("idc");
        $getID = $this->input->post("id");
        $getIDD = $this->input->post("idd");
        
        if($getIDC == "" || $getID == "" || $getIDD == "") {
            $where = array(
                "id_connection" => $getIDC
            );
            $data['conn'] = $this->M_crud->selectData('status_connection', 'connection')->result();
            $this->req();
            $this->load->view('admin/req/sidebar');
            $this->load->view('admin/req/right-panel-open');
            $this->load->view('admin/view_editConn',$data);
            $this->load->view('admin/req/right-panel-close');
            $this->close();
        }
        else {
            $data = array(
                "id_user" => $getID,
                "id_user_2" => $getIDD,
            );

            $where = array(
                "id_connection" => $getIDC
            );

            $this->M_crud->update_data($where, $data, 'connection');
            redirect('admin/welcome/conn');
        }
    }
    function comm($id){
        $where = array(
            "id_comment" => $id
        );
        $data['comm'] = $this->M_crud->selectData('status_comment', 'comment')->result();
        $data['rec'] = $this->M_crud->selectData('status_recording', 'recording')->result();
        $this->req();
        $this->load->view('admin/req/sidebar');
        $this->load->view('admin/req/right-panel-open');
        $this->load->view('admin/view_editComm',$data);
        $this->load->view('admin/req/right-panel-close');
        $this->close();
    }
   
    
    function updateComm()
    {
        $getIDC = $this->input->post("idc");
        $getIsi = $this->input->post("isi");
        
        if($getIDC == "" || $getIsi == "") {
            $where = array(
                "id_comment" => $getIDC
            );
            $data['comm'] = $this->M_crud->selectData('status_comment', 'comment')->result();
            $data['rec'] = $this->M_crud->selectData('status_recording', 'recording')->result();
            $this->req();
            $this->load->view('admin/req/sidebar');
            $this->load->view('admin/req/right-panel-open');
            $this->load->view('admin/view_editComm',$data);
            $this->load->view('admin/req/right-panel-close');
            $this->close();
        }
        else {
            $data = array(
                "comment" => $getIsi
            );

            $where = array(
                "id_comment" => $getIDC
            );

            $this->M_crud->update_data($where, $data, 'comment');
            redirect('admin/welcome/comm');
        }
    }
}