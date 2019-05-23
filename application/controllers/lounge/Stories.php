<?php 
class Stories extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model(array('m_crud', 'm_playlist', 'm_recording'));
    }
    public function index(){
        $this->load->view("req/head-open");
        $this->load->view("req/styles/cart-css");
        $this->load->view("req/head-close");
        $this->load->view("req/menu");
        /*--------------------------------------*/
        $this->load->view("mainpages/playlist");
        /*--------------------------------------*/
        $this->load->view("req/close");
    }
    public function detail($id){
        $where = array(
            'id_playlist' => $id,
            'status_playlist' => 1
        );
        $data['story'] = $this->m_playlist->selectData($where)->result();
        $data['episode'] = $this->m_recording->selectByPlaylist($where)->result();
        $this->load->view("req/head-open");
        $this->load->view("req/styles/product-css");
        $this->load->view("req/head-close");
        $this->load->view("req/menu");
        /*--------------------------------------*/
        $this->load->view("mainpages/playlist-detail", $data);
        /*--------------------------------------*/
        $this->load->view("req/close");
    }
    public function listen($id){
        $where = array(
            'recording.id_recording' => $id,
            'recording.status_recording' => 1
        );
        $data['episode'] = $this->m_recording->selectAll($where)->result();
        $where2 = array(
            'comment.id_recording' => $id,
            'comment.status_comment' => 1
        );
        $data['comment'] = $this->m_recording->selectComment($where2)->result();
        $this->load->view("req/head-open");
        $this->load->view("req/styles/product-css");
        $this->load->view("req/head-close");
        $this->load->view("req/menu");
        /*--------------------------------------*/
        $this->load->view("mainpages/listen", $data);
        /*--------------------------------------*/
        $this->load->view("req/close");
    }
    
    function addComment($id) {
        $getID = $this->session->userdata("id_user");
        $getIDR = $id;
        $getIsi = $this->input->post('isi');
        $date = date("Y-m-d");
        
        $data = array(
            "id_comment" => 0,
            "id_user" => $getID,
            "comment" => $getIsi,
            "id_recording" => $getIDR,
            "tgl_submit_comment" => $date,
            "status_comment" => 1
        );
        
        $where = array(
            "comment.id_user" => $getID,
            "comment" => $getIsi,
            "comment.id_recording" => $getIDR,
            "tgl_submit_comment" => $date
        );
        $this->m_crud->insertData($data, 'comment');
        
        $rep = $this->m_recording->selectComment($where)->result();
        foreach($rep as $list) {
            $idcomment = $list->id_comment;
        }
        
        $data2 = array(
            "id_comment" => $idcomment,
            "id_user_pelapor" => $getID,
            "tgl_submit_report" => $date,
            "status_report" => 1
        );
        $this->m_crud->insertData($data2, 'report');
        redirect('lounge/Stories/listen/'.$id);
    }
    
}