<?php
class M_history extends CI_Model {
    function selectData($where)
    {
        $this->db->select('*')
            ->from('history_recording')
            ->join('recording', 'history_recording.id_recording = recording.id_recording', 'inner')
            ->join('user', 'history_recording.id_user = user.id_user', 'inner')
            ->where($where);
        $query = $this->db->get();
        return $query;
    }
    function insert($data){
        $this->db->insert("history_recording",$data);
    }
    function select()
    {
        $this->db->select('*')
            ->from('user_recording')
            ->join('recording', 'user_recording.id_recording = recording.id_recording', 'inner')
            ->join('user', 'user_recording.id_user = user.id_user', 'inner');
        $query = $this->db->get();
        return $query;
    }
}
?>