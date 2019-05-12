<?php
class M_playlist extends CI_Model {
    function selectData($where)
    {
        $this->db->select('*')
            ->from('playlist')
            ->join('category', 'playlist.id_category = category.id_category', 'inner')
            ->where($where);
        $query = $this->db->get();
        return $query;
    }
}
?>