<?php
class M_crud extends CI_Model {
    function selectData($where, $table)
    {
        $this->db->where($where, 1);
        $query = $this->db->get($table);
        return $query;
    }
    
    function insertData($data, $where) {
        $this->db->insert($where, $data);
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
}
?>