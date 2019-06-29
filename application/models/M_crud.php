<?php
class M_crud extends CI_Model {
    function selectData($where, $table)
    {
        $this->db->where($where, 1);
        $query = $this->db->get($table);
        return $query;
    }
    
    function selectAll($table)
    {
        return $this->db->get($table);
    }
    
    function insertData($data, $where) {
        $this->db->insert($where, $data);
        return $this->db->insert_id();
    }
    function selectJeenFaq($where){
        return $this->db->get_where("faq",$where);
    }
    function selectJeenPesan($table,$where){
        /*method ini dibuat karena method yang ada tidak fleksibel sehingga mengganti kodingannya akan membuat program menjadi tidak baik*/
        $this->db->join("user","user.id_user = pesan.id_user_add","inner");
        return $this->db->get_where($table,$where);
    }
    function edit($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    
    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    
    function getID($where)
    {
        return $this->db->get_where('user', $where);
    }
}
?>