<?php
class M_category extends CI_Model {
    function selectData($where)
    {
        $this->db->select('*')
            ->from('category')
            ->join('user', 'user.id_user = category.id_user_category', 'inner')
            ->where($where);
        $query = $this->db->get();
        return $query;
    }
}
?>