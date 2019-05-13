<?php
class M_message extends CI_Model {
    function selectData($where)
    {
        $this->db->select('*')
            ->from('message')
            ->join('user', 'user.id_user = message.id_user_tujuan', 'inner')
            ->where($where)
            ->group_by('message.id_user_tujuan');
        $query = $this->db->get();
        return $query;
    }
    
    function SelectChat($where) {
        $this->db->select('*')
            ->from('message')
            ->join('user', 'user.id_user = message.id_user_tujuan', 'inner')
            ->where($where);
        $query = $this->db->get();
        return $query;
    }
}
?>