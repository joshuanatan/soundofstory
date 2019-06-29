<?php
class M_report extends CI_Model {
    function selectData($where)
    {
        $this->db->select('*')
            ->from('report')
            ->join('user', 'user.id_user = report.id_user_pelapor', 'inner')
            ->where($where);
        $query = $this->db->get();
        return $query;
    }
}
?>