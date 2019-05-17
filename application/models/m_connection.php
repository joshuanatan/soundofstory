<?php
class M_connection extends CI_Model {
    function selectData($where)
    {
        $this->db->select('*')
            ->from('connection')
            ->join('user', 'user.id_user = connection.id_user', 'inner')
            ->where($where);
        $query = $this->db->get();
        return $query;
    }
}
?>