<?php
class M_rating extends CI_Model {
    function selectData($where)
    {
        $this->db->select('*')
            ->from('rating')
            ->join('recording', 'recording.id_recording = rating.id_recording', 'inner')
            ->join('user', 'user.id_user = rating.id_user', 'inner')
            ->where($where);
        $query = $this->db->get();
        return $query;
    }
}
?>