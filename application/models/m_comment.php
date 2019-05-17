<?php
class M_comment extends CI_Model {
    function selectData($where)
    {
        $this->db->select('*')
            ->from('comment')
            ->join('recording', 'recording.id_recording = comment.id_recording', 'inner')
            ->join('user', 'user.id_user = comment.id_user', 'inner')
            ->where($where);
        $query = $this->db->get();
        return $query;
    }
}
?>