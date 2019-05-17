<?php 
class Welcome extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model(array('m_crud', 'm_recording', 'm_playlist', 'm_rating', 'm_report', 'm_like', 'm_message', 'm_connection', 'm_comment'));
    }
    public function req(){
        $this->load->view("req/head-open");
        $this->load->view("req/styles/main-css");
        $this->load->view("req/head-close");
        $this->load->view("req/menu");
    }
    public function index(){
        $data['episode'] = $this->m_crud->selectData('status_recording', 'recording')->result();
        $data['story'] = $this->m_crud->selectData('status_playlist', 'playlist')->result();
        $this->req();
        $this->load->view("mainpages/index", $data);
        $this->close();
    }
    public function close(){
        $this->load->view("req/close");
    }
    
    //punya ADMIN
    
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
        $where = array(
            'status_comment' => 1
        );
        $data['comm'] = $this->m_comment->selectData($where)->result();
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_comment', $data);
    }
    
    function Conn()
    {
        $where = array(
            'status_connection' => 1
        );
        $data['conn'] = $this->m_connection->selectData($where)->result();
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
        $where = array(
            'status_like' => 1
        );
        $data['like'] = $this->m_like->selectData($where)->result();
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
        $where = array(
            'status_report' => 1
        );
        $data['report'] = $this->m_report->selectData($where)->result();
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_report', $data);
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
        $where = array(
            'status_rating' => 1
        );
        $data['rate'] = $this->m_rating->selectData($where)->result();
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_rating', $data);
    }
    
    function Playlist()
    {
        $where = array(
            'status_playlist' => 1
        );
        $data['play'] = $this->m_playlist->selectData($where)->result();
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_playlist', $data);
    }
    
    function Rec()
    {
        $where = array(
            'recording.status_recording' => 1
        );
        $data['rec'] = $this->m_recording->select($where)->result();
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
        $where2 = array(
            'status_recording' => 1
        );
        $data['cat'] = $this->m_crud->selectData('status_category', 'category')->result();
        $data['rec'] = $this->m_recording->select($where2)->result();
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_addPlaylist', $data);
    }
    
    function tmbhRec()
    {
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('view_addRecord');
    }
    
}