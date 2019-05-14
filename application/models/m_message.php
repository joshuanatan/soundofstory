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
    
    function SelectChat($where, $where2) {
        $this->db->select('*')
            ->from('message')
            ->join('user', 'user.id_user = message.id_user_dari', 'inner')
            ->where($where)
            ->or_where($where2);
        $query = $this->db->get();
        return $query;
    }
}
?>