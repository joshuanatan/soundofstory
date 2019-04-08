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
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_comment');
    }
    
    function Conn()
    {
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_connection');
    }
    
    function Msg()
    {
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_msg');
    }
    
    function Like()
    {
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_like');
    }
    
    function UserRec()
    {
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_userRec');
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
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_report');
    }
    
    function Profile()
    {
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_profile');
    }
    
    function History()
    {
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_history');
    }
    
    function Rating()
    {
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_rating');
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
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_addComment');
    }
    
    function tmbhConn()
    {
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_addConnection');
    }
    
    function tmbhMsg()
    {
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_addMsg');
    }
    
    function tmbhLike()
    {
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_addLike');
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
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_addRating');
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