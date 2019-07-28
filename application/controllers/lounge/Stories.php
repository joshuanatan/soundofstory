<?php 
class Stories extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model(array('M_crud', 'M_playlist', 'M_recording','M_history'));
    }
    public function index(){
        

        $this->load->view("req/head-open");
        $this->load->view("req/styles/cart-css");
        $this->load->view("req/head-close");
        $this->load->view("req/menu");
        $this->load->view("req/audio");
        /*--------------------------------------*/
        $this->load->view("mainpages/playlist");
        /*--------------------------------------*/
        $this->load->view("req/close");
    }
    public function detail($id){
        
        $this->session->action = 1; //buat di pake waktu jagain history
        $where = array(
            'id_playlist' => $id,
            'status_playlist' => 1
        );
        $data['story'] = $this->M_playlist->selectData($where)->result();
        $data['episode'] = $this->M_recording->selectByPlaylist($where)->result();
        $data['totalDuration'] = $this->M_recording->totalDuration($where);
        $where = array(
            'id_playlist' => $id,
            'status_playlist' => 1
        );
        $data['totalPlayed'] = $this->M_history->countHistory($where);
        $data["id_playlist"] = $id;
        $this->load->view("req/head-open");
        $this->load->view("req/styles/product-css");
        $this->load->view("req/head-close");
        $this->load->view("req/menu");
        $this->load->view("req/audio");
        /*--------------------------------------*/
        $this->load->view("mainpages/playlist-detail", $data);
        /*--------------------------------------*/
        $this->load->view("req/close");
    }
    public function listen($id){
        $data = array(
            "id_user" => $this->session->id_user,
            "id_recording" =>  $id
        );
        if($this->session->action == 0){
            $this->session->action = 1;
        }
        else{
            $this->M_history->insert($data);
        }
        $where = array(
            'recording.id_recording' => $id,
            'recording.status_recording' => 1
        );
        $data['episode'] = $this->M_recording->selectAll($where)->result();
        $where2 = array(
            'comment.id_recording' => $id,
            'comment.status_comment' => 1
        );
        $data['comment'] = $this->M_recording->selectComment($where2)->result();
        $where = array(
            'recording_playlist.id_recording' => $id,
            'recording.status_recording' => 1,
            'recording_playlist.status_playlist' => 1
        );
        $data['episodes'] = $this->M_recording->selectEpisodes($where)->result();
        $where = array(
            "history_recording.id_recording" => $id
        );
        $data['audience'] = $this->M_history->countHistory($where);
        $data["id_recording"] = $id;
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
        $this->M_crud->insertData($data, 'comment');
        
        $rep = $this->M_recording->selectComment($where)->result();
        foreach($rep as $list) {
            $idcomment = $list->id_comment;
        }
        
        $data2 = array(
            "id_comment" => $idcomment,
            "id_user_pelapor" => $getID,
            "tgl_submit_report" => $date,
            "status_report" => 1
        );
        $this->M_crud->insertData($data2, 'report');
        $this->session->action = 0;
        redirect('lounge/Stories/listen/'.$id);
    }
    public function like($id_recording){
        $data = array(
            "id_user" => $this->session->id_user,
            "id_recording" => $id_recording,
            "status_like" => 0,
            "tgl_submit_like" => date("d-m-Y")
        );
        insertRow("like",$data);
        $this->session->action = 0;
        redirect("lounge/stories/listen/".$id_recording);
    }
    public function dislike($id_recording){
        $where = array(
            "id_user" => $this->session->id_user,
            "id_recording" => $id_recording,
        );
        deleteRow("like",$where);
        $this->session->action = 0;
        redirect("lounge/stories/listen/".$id_recording);
    }
    public function addToPlaylist($id_recording){
        $data = array(
            "id_user" => $this->session->id_user,
            "id_recording" => $id_recording,
        );
        insertRow("user_playlist",$data);
        $this->session->action = 0;
        redirect("lounge/stories/listen/".$id_recording);
    }
    public function removeFromPlaylist($id_recording){
        $where = array(
            "id_user" => $this->session->id_user,
            "id_recording" => $id_recording,
        );
        deleteRow("user_playlist",$where);
        $this->session->action = 0;
        redirect("lounge/stories/listen/".$id_recording);
    }
    public function addToFavourite($id_playlist){
        $data = array(
            "id_user" => $this->session->id_user,
            "id_playlist" => $id_playlist
        );
        insertRow("user_favourite",$data);
        redirect("lounge/stories/detail/".$id_playlist);
    }
    public function removeFromFavourite($id_playlist){
        $where = array(
            "id_user" => $this->session->id_user,
            "id_playlist" => $id_playlist
        );
        deleteRow("user_favourite",$where);
        redirect("lounge/stories/detail/".$id_playlist);
    }
    public function showPlaylist(){
        $where = array(
            "id_user" => $this->session->id_user
        );
        $result = selectRowOrderBy("user_playlist",$where,array("coloumn" => "id_user_playlist","direction" => "DESC"));
        $field = array(
            "id_recording"
        );
        $data["recording"] = foreachMultipleResult($result,$field,$field);
        for($a = 0; $a<count($data["recording"]);$a++){
            $where = array(
                "id_recording" => $data["recording"][$a]["id_recording"]
            );
            $result = selectRow("recording",$where);
            $field = array(
                "judul_recording","foto_recording"
            );
            $foreach_result = foreachResult($result,$field,$field);
            $data["recording"][$a]["judul_recording"] = $foreach_result["judul_recording"];
            $data["recording"][$a]["foto_recording"] = $foreach_result["foto_recording"];

            $result = selectRow("recording_playlist",$where);
            $field = array(
                "chapter_playlist"
            );
            $foreach_result = foreachResult($result,$field,$field);
            $data["recording"][$a]["chapter"] = $foreach_result["chapter_playlist"];
        }
        $this->load->view("req/head-open");
        $this->load->view("req/styles/cart-css");
        $this->load->view("req/head-close");
        $this->load->view("req/menu");
        $this->load->view("req/audio");
        /*--------------------------------------*/
        $this->load->view("mainpages/user_playlist", $data);
        /*--------------------------------------*/
        $this->load->view("req/close");
    }
    public function showFavorites(){
    
        $where = array(
            "id_user" => $this->session->id_user
        );
        $result = selectRow("user_favourite",$where);
        $field = array(
            "id_playlist"
        );
        $data["playlist"] = foreachMultipleResult($result,$field,$field);
        for($a = 0; $a<count($data["playlist"]); $a++){
            $where = array(
                "id_playlist" => $data["playlist"][$a]["id_playlist"]
            );
            $field = array(
                "nama_playlist","foto_playlist"
            );  
            $result = selectRow("playlist",$where);
            $foreach_result = foreachResult($result,$field,$field);
            $data["playlist"][$a]["nama_playlist"] = $foreach_result["nama_playlist"];
            $data["playlist"][$a]["foto_playlist"] = $foreach_result["foto_playlist"];
        }
        $this->load->view("req/head-open");
        $this->load->view("req/styles/cart-css");
        $this->load->view("req/head-close");
        $this->load->view("req/menu");
        $this->load->view("req/audio");
        /*--------------------------------------*/
        $this->load->view("mainpages/user_favorites", $data);
        /*--------------------------------------*/
        $this->load->view("req/close");
    }
}