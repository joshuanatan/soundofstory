<?php
class M_playlist extends CI_Model {
    function selectData($where)
    {
        $this->db->select('*')
            ->from('playlist')
            ->join('category', 'playlist.id_category = category.id_category', 'inner')
            ->join('user', 'user.id_user = playlist.id_user', 'inner')
            ->where($where);
        $query = $this->db->get();
        return $query;
    }
    function getMaxChapter($where){
        $this->db->select("max(chapter_playlist) as 'chapter'");
        $result = $this->db->get_where("recording_playlist",$where);
        foreach($result->result() as $a){
            if($a->chapter == "") return 1;
            else return $a->chapter+1;
        }
    }
    function selectLastToNow($where){
        $this->db->order_by("tgl_submit_playlist",'DESC');
        return $this->db->get_where("playlist",$where);
    }
}
?>