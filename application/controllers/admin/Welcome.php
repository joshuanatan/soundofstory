<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function __construct(){
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
    private function req_login(){
        $this->load->view("admin/req/html-open");
        $this->load->view("admin/req/stylesheet");
        $this->load->view("admin/req/data-table");
        $this->load->view("admin/req/head-close");
    }
    private function close_login(){
        $this->load->view("admin/req/script");
        $this->load->view("admin/req/data-table-js");
        $this->load->view("admin/req/html-close");
    }
    function index(){
        $this->req_login();
        $this->load->view('admin/view_admin_login');
        $this->close_login();
    }
    function login(){
        $getEmail = $this->input->post('email');
        $getPass = $this->input->post('pass');
        $where = array(
            'email_user' => $getEmail,
            'password_user' => md5($getPass)
        );
        $data = $this->M_crud->edit($where, 'user')->result();
        $num = $this->M_crud->edit($where, 'user')->num_rows();
        if($num == 0) {
            redirect("admin/welcome");
        }
        else {
            foreach($data as $list) {
                $nama = $list->nama_user;
                $email = $list->email_user;
                $foto = $list->foto_profile_user;
                $id = $list->id_user;
                $this->session->set_userdata("id", $id);
                $this->session->set_userdata("nama", $nama);
                $this->session->set_userdata("foto", $foto);
                $this->session->set_userdata("email", $email);
                
                redirect('lounge/welcome/user');
            }
        }
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
    
    function user(){
        $data['user'] = $this->M_crud->selectData('status_user', 'user')->result();
        $this->req();
        $this->load->view('admin/req/sidebar');
        $this->load->view('admin/req/right-panel-open');
        $this->load->view('admin/view_user', $data);
        $this->load->view('admin/req/right-panel-close');
        $this->close();
	}
    function cate(){
        $data['cat'] = $this->M_crud->selectData('status_category', 'category')->result();
        $this->req();
        $this->load->view('admin/req/sidebar');
        $this->load->view('admin/req/right-panel-open');
        $this->load->view('admin/view_category', $data);
        $this->load->view('admin/req/right-panel-close');
        $this->close();
	}
    function comm(){
        $where = array(
            'status_comment' => 1
        );
        $data['comm'] = $this->M_comment->selectData($where)->result();
        $this->req();
        $this->load->view('admin/req/sidebar');
        $this->load->view('admin/req/right-panel-open');
        $this->load->view('admin/view_comment', $data);
        $this->load->view('admin/req/right-panel-close');
        $this->close();
	}
    
    function conn(){
        $where = array(
            'status_connection' => 1
        );
        $data['conn'] = $this->M_connection->selectData($where)->result();
        $this->req();
        $this->load->view('admin/req/sidebar');
        $this->load->view('admin/req/right-panel-open');
        $this->load->view('admin/view_connection', $data);
        $this->load->view('admin/req/right-panel-close');
        $this->close();
	}
    
    function msg(){
        $data['msg'] = $this->M_crud->selectData('status_message', 'message')->result();
        $this->req();
        $this->load->view('admin/req/sidebar');
        $this->load->view('admin/req/right-panel-open');
        $this->load->view('admin/view_msg', $data);
        $this->load->view('admin/req/right-panel-close');
        $this->close();
	}
    function like(){
        $where = array(
            'status_like' => 1
        );
        $data['like'] = $this->M_like->selectData($where)->result();
        $this->req();
        $this->load->view('admin/req/sidebar');
        $this->load->view('admin/req/right-panel-open');
        $this->load->view('admin/view_like', $data);
        $this->load->view('admin/req/right-panel-close');
        $this->close();
	}
    
    function userrec(){
        $data['ur'] = $this->M_crud->selectAll('user_recording')->result();
        $this->req();
        $this->load->view('admin/req/sidebar');
        $this->load->view('admin/req/right-panel-open');
        $this->load->view('admin/view_userRec', $data);
        $this->load->view('admin/req/right-panel-close');
        $this->close();
	}
    function recplay(){
        $data['rep'] = $this->M_crud->selectData('status_playlist', 'recording_playlist')->result();
        $this->req();
        $this->load->view('admin/req/sidebar');
        $this->load->view('admin/req/right-panel-open');
        $this->load->view('admin/view_recPlay', $data);
        $this->load->view('admin/req/right-panel-close');
        $this->close();
	}
    
    function report(){
        $where = array(
            'status_report' => 1
        );
        $data['report'] = $this->M_report->selectData($where)->result();
        $this->req();
        $this->load->view('admin/req/sidebar');
        $this->load->view('admin/req/right-panel-open');
        $this->load->view('admin/view_report', $data);
        $this->load->view('admin/req/right-panel-close');
        $this->close();
	}
    function history(){
        $data['hist'] = $this->M_crud->selectData('status_history', 'history_recording')->result();
        $this->req();
        $this->load->view('admin/req/sidebar');
        $this->load->view('admin/req/right-panel-open');
        $this->load->view('admin/view_history', $data);
        $this->load->view('admin/req/right-panel-close');
        $this->close();
	}
    function rating(){
        $where = array(
            'status_rating' => 1
        );
        $data['rate'] = $this->M_rating->selectData($where)->result();
        $this->req();
        $this->load->view('admin/req/sidebar');
        $this->load->view('admin/req/right-panel-open');
        $this->load->view('admin/view_rating', $data);
        $this->load->view('admin/req/right-panel-close');
        $this->close();
	}
    function playlist(){
        $where = array(
            'status_playlist' => 1
        );
        $data['play'] = $this->M_playlist->selectData($where)->result();
        $this->req();
        $this->load->view('admin/req/sidebar');
        $this->load->view('admin/req/right-panel-open');
        $this->load->view('admin/view_playlist', $data);
        $this->load->view('admin/req/right-panel-close');
        $this->close();
	}
    function rec(){
        $where = array(
            'recording.status_recording' => 1
        );
        $data['rec'] = $this->M_recording->select($where)->result();
        $this->req();
        $this->load->view('admin/req/sidebar');
        $this->load->view('admin/req/right-panel-open');
        $this->load->view('admin/view_record', $data);
        $this->load->view('admin/req/right-panel-close');
        $this->close();
	}
    
    function tmbhUser(){
        
        $this->req();
        $this->load->view('admin/req/sidebar');
        $this->load->view('admin/req/right-panel-open');
        $this->load->view('admin/view_addUser');
        $this->load->view('admin/req/right-panel-close');
        $this->close();
	}
    
    
    function tmbhCate(){
        
        $this->req();
        $this->load->view('admin/req/sidebar');
        $this->load->view('admin/req/right-panel-open');
        $this->load->view('admin/view_addCategory');
        $this->load->view('admin/req/right-panel-close');
        $this->close();
	}
    function tmbhComm(){
        $data['rec'] = $this->M_crud->selectData('status_recording', 'recording')->result();
        $this->req();
        $this->load->view('admin/req/sidebar');
        $this->load->view('admin/req/right-panel-open');
        $this->load->view('admin/view_addComm', $data);
        $this->load->view('admin/req/right-panel-close');
        $this->close();
	}
    function tmbhConn(){
        
        $this->req();
        $this->load->view('admin/req/sidebar');
        $this->load->view('admin/req/right-panel-open');
        $this->load->view('admin/view_addConn');
        $this->load->view('admin/req/right-panel-close');
        $this->close();
	}
    function tmbhMsg(){
        
        $this->req();
        $this->load->view('admin/req/sidebar');
        $this->load->view('admin/req/right-panel-open');
        $this->load->view('admin/view_addMsg');
        $this->load->view('admin/req/right-panel-close');
        $this->close();
	}
    function tmbhLike(){
        
        $data['rec'] = $this->M_crud->selectData('status_recording', 'recording')->result();
        $this->req();
        $this->load->view('admin/req/sidebar');
        $this->load->view('admin/req/right-panel-open');
        $this->load->view('admin/view_addLike',$data);
        $this->load->view('admin/req/right-panel-close');
        $this->close();
    }
    function tmbhUserRec(){
        
        $this->req();
        $this->load->view('admin/req/sidebar');
        $this->load->view('admin/req/right-panel-open');
        $this->load->view('admin/view_addUserRec');
        $this->load->view('admin/req/right-panel-close');
        $this->close();
	}
    function tmbhRecPlay(){
        
        $this->req();
        $this->load->view('admin/req/sidebar');
        $this->load->view('admin/req/right-panel-open');
        $this->load->view('admin/view_addRecPlay');
        $this->load->view('admin/req/right-panel-close');
        $this->close();
	}
    function tmbhReport(){
        
        $this->req();
        $this->load->view('admin/req/sidebar');
        $this->load->view('admin/req/right-panel-open');
        $this->load->view('admin/view_addReport');
        $this->load->view('admin/req/right-panel-close');
        $this->close();
	}
    function tmbhProfile(){
        
        $this->req();
        $this->load->view('admin/req/sidebar');
        $this->load->view('admin/req/right-panel-open');
        $this->load->view('admin/view_addProfile');
        $this->load->view('admin/req/right-panel-close');
        $this->close();
	}
    
    function tmbhHistory(){
        
        $this->req();
        $this->load->view('admin/req/sidebar');
        $this->load->view('admin/req/right-panel-open');
        $this->load->view('admin/view_addHistory');
        $this->load->view('admin/req/right-panel-close');
        $this->close();
	}
    
    function tmbhRating(){
        $data['rec'] = $this->M_crud->selectData('status_recording', 'recording')->result();
        $this->req();
        $this->load->view('admin/req/sidebar');
        $this->load->view('admin/req/right-panel-open');
        $this->load->view('admin/view_addRating',$data);
        $this->load->view('admin/req/right-panel-close');
        $this->close();
	}
    
    function tmbhPlaylist(){
        $where2 = array(
            'status_recording' => 1
        );
        $data['cat'] = $this->M_crud->selectData('status_category', 'category')->result();
        $data['rec'] = $this->M_recording->select($where2)->result();
        $this->req();
        $this->load->view('admin/req/sidebar');
        $this->load->view('admin/req/right-panel-open');
        $this->load->view('admin/view_addPlaylist',$data);
        $this->load->view('admin/req/right-panel-close');
        $this->close();
    }
    
    function tmbhRec(){
        
        $this->req();
        $this->load->view('admin/req/sidebar');
        $this->load->view('admin/req/right-panel-open');
        $this->load->view('admin/view_addRecord');
        $this->load->view('admin/req/right-panel-close');
        $this->close();
	}
    function register()
    {
        $getID = "";
        $getName = $this->input->post('name');
        $getPass = $this->input->post('pass');
        $getJk = $this->input->post('jk');
        $getEmail = $this->input->post('email');
        $getPhone = $this->input->post('phone');
        $getAdd = $this->input->post('address');
        $getBod = $this->input->post('bod');
        $getDesc = $this->input->post('desc');
        $getProf = $this->input->post('prof');
        $date = date("Y-m-d");
        $bod = date('Y-m-d', strtotime($getBod));
        /*$config = array();
        $config['upload_path'] = 'C:/xampp/htdocs/CI_sound/assets/profiles/images/';
        $config['allowed_types'] = '*'; //'gif|jpg|png';
        if ($this->upload->do_upload('pic1')) {
            $datafile = array('upload_data' => $this->upload->data());
        }*/
        
        $target_dir = base_url()."/assets/profiles/images/";
        $target_file = $target_dir . basename($_FILES["pic1"]["name"]);
        $photo = basename($_FILES["pic1"]["name"]);
        if (move_uploaded_file($_FILES["pic1"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["pic1"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        $data = array(
            "id_user" => "",
            "nama_user" => $getName,
            "password_user" => md5($getPass),
            "gender_user" => $getJk,
            "email_user" => $getEmail,
            "nohp_user" => $getPhone,
            "foto_profile_user" => $photo,
            "status_user" => 1,
            "tgl_submit_user" => $date
        );
        $this->M_crud->insertData($data, 'user');
        $where = array(
            'email_user' => $getEmail
        );
        $get = $this->M_crud->getID($where)->result();
        foreach($get as $lst) {
            $id = $lst->id_user;
        }
        $data2 = array(
            "id_user" => $id,
            "alamat_user" => $getAdd,
            "description_user" => $getDesc,
            "tgl_lahir_user" => $bod,
            "profesi_user" => $getProf
        );
        $this->M_crud->insertData($data2, 'profile');
        
        redirect('admin/welcome');
    }
    
    function logout() 
    {
        $this->session->sess_destroy();
        redirect('admin/welcome');
    }
}