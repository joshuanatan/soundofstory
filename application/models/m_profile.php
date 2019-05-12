<?php
class M_profile extends CI_Model {
    function selectData($where)
    {
        $this->db->select('*')
            ->from('user')
            ->join('profile', 'profile.id_user = user.id_user', 'inner')
            ->where($where);
        $query = $this->db->get();
        return $query;
    }
}
?>