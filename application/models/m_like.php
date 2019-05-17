<?php
class M_like extends CI_Model {
    function selectData($where)
    {
        $this->db->select('*')
            ->from('like')
            ->join('recording', 'recording.id_recording = like.id_recording', 'inner')
            ->join('user', 'user.id_user = like.id_user', 'inner')
            ->where($where);
        $query = $this->db->get();
        return $query;
    }
}
?>