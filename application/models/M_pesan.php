<?php
defined('BASEPATH') OR exit('No direct script allowed');

class M_pesan extends CI_Model{
    
    function insertMsg($data){
        $this->db->insert("pesan",$data);
    }
}
?>