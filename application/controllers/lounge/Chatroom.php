<?php 
class Chatroom extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model(array('m_crud', 'm_message'));
    }
    public function index(){
        $where = array(
            'id_user_dari' => $this->session->userdata("id"),
            'status_message' => 1
        );
        $data['message'] = $this->m_message->selectData($where)->result();
        $this->load->view("req/head-open");
        $this->load->view("req/styles/cart-css");
        $this->load->view("req/styles/message-css.php");
        $this->load->view("req/head-close");
        $this->load->view("req/menu");
        /*--------------------------------------*/
        $this->load->view("mainpages/message", $data);
        /*--------------------------------------*/
        $this->load->view("req/close");
    }
    
    function ajax()
    {
        $id_user = $this->input->post("id");
        $this->session->set_userdata("tujuan", $id_user);
        $where = array(
            'id_user_tujuan' => $id_user
        );
        $where2 = array(
            'id_user_dari' => $id_user
        );
        $data = $this->m_message->selectChat($where, $where2)->result();
        $html = "";
        foreach($data as $list) {
            if($id_user == $list->id_user_dari) {
                $html .= '<div class="sunil-incoming_msg">
                        <div class="sunil-incoming_msg_img"> <img src="'.base_url().'assets/profiles/images/'.$list->foto_profile_user.'" alt="sunil"> </div>
                        <div class="sunil-received_msg">
                            <div class="sunil-received_withd_msg">
                                    <p>'.$list->konten.'</p>
                                <span class="sunil-time_date"> '.$list->jam_submit_message.'    |    '.$list->tgl_submit_message.'</span>
                            </div>
                        </div>
                    </div>';
            }
            else {
                $html .= '<div class="sunil-outgoing_msg">
                        <div class="sunil-sent_msg">
                            <p>'.$list->konten.'</p>
                            <span class="sunil-time_date"> '.$list->jam_submit_message.'    |    '.$list->tgl_submit_message.'</span>
                        </div>
                    </div>';
            }
        }
        echo json_encode($html);
    }
    
    function send()
    {
        $isi = $this->input->post("isi");
        $date = date("Y-m-d");
        date_default_timezone_set('Asia/Jakarta');
        $time = date("H:i:s", time());
        $data = array(
            'id_message' => 0,
            'konten' => $isi,
            'id_user_dari' => $this->session->userdata("id"),
            'id_user_tujuan' => $this->session->userdata("tujuan"),
            'status_message' => 1,
            'tgl_submit_message' => $date,
            'jam_submit_message' => $time
        );
        $this->m_crud->insertData($data, 'message');
        $html = '<div class="sunil-outgoing_msg">
                        <div class="sunil-sent_msg">
                            <p>'.$isi.'</p>
                            <span class="sunil-time_date"> '.$time.'    |    '.$date.'</span> 
                        </div>
                    </div>';
        echo json_encode($html);
    }
}