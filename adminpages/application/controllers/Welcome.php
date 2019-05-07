<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    function __construct() 
    {
        parent::__construct();
        $this->load->model('m_crud');
    }
    
    function index()
	{
		$this->load->view('view_admin_login');
	}
    
    function register()
    {
        $this->load->view('view_admin_register');
    }
    
	function user()
	{
        $data['user'] = $this->m_crud->selectData('status_user', 'user')->result();
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_user', $data);
	}
    
    function Cate()
    {
        $data['cat'] = $this->m_crud->selectData('status_category', 'category')->result();
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_category', $data);
    }
    
    function Comm()
    {
        $data['comm'] = $this->m_crud->selectData('status_comment', 'comment')->result();
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_comment', $data);
    }
    
    function Conn()
    {
        $data['conn'] = $this->m_crud->selectData('status_connection', 'connection')->result();
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_connection', $data);
    }
    
    function Msg()
    {
        $data['msg'] = $this->m_crud->selectData('status_message', 'message')->result();
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_msg', $data);
    }
    
    function Like()
    {
        $data['like'] = $this->m_crud->selectData('status_like', 'like')->result();
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_like', $data);
    }
    
    function UserRec()
    {
        $data['ur'] = $this->m_crud->selectAll('user_recording')->result();
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_userRec', $data);
    }
    
    function RecPlay()
    {
        $data['rep'] = $this->m_crud->selectData('status_playlist', 'recording_playlist')->result();
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_recPlay', $data);
    }
    
    function Report()
    {
        $data['report'] = $this->m_crud->selectData('status_report', 'report')->result();
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_report', $data);
    }
    
    function Profile()
    {
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_profile');
    }
    
    function History()
    {
        $data['hist'] = $this->m_crud->selectData('status_history', 'history_recording')->result();
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_history', $data);
    }
    
    function Rating()
    {
        $data['rate'] = $this->m_crud->selectData('status_rating', 'rating')->result();
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_rating', $data);
    }
    
    function Playlist()
    {
        $data['play'] = $this->m_crud->selectData('status_playlist', 'playlist')->result();
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_playlist', $data);
    }
    
    function Rec()
    {
        $data['rec'] = $this->m_crud->selectData('status_recording', 'recording')->result();
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_record', $data);
    }
    
    function tmbhUser()
    {
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_addUser');
    }
    
    function tmbhCate()
    {
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_addCategory');
    }
    
    function tmbhComm()
    {
        $data['rec'] = $this->m_crud->selectData('status_recording', 'recording')->result();
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_addComm', $data);
    }
    
    function tmbhConn()
    {
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_addConn');
    }
    
    function tmbhMsg()
    {
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_addMsg');
    }
    
    function tmbhLike()
    {
        $data['rec'] = $this->m_crud->selectData('status_recording', 'recording')->result();
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_addLike', $data);
    }
    
    function tmbhUserRec()
    {
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_addUserRec');
    }
    
    function tmbhRecPlay()
    {
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_addRecPlay');
    }
    
    function tmbhReport()
    {
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_addReport');
    }
    
    function tmbhProfile()
    {
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_addProfile');
    }
    
    function tmbhHistory()
    {
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_addHistory');
    }
    
    function tmbhRating()
    {
        $data['rec'] = $this->m_crud->selectData('status_recording', 'recording')->result();
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_addRating', $data);
    }
    
    function tmbhPlaylist()
    {
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_addPlaylist');
    }
    
    function tmbhRec()
    {
        $data['cat'] = $this->m_crud->selectData('status_category', 'category')->result();
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_addRecord', $data);
    }
}