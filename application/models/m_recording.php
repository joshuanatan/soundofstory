<?php
class M_recording extends CI_Model {
    function selectLast($where) {
        $this->db->select('*')
            ->from('recording')
            ->order_by("tgl_submit_recording", "desc")
            ->where($where);
        $query = $this->db->get();
        return $query;
    }
    
    function selectLast2($where) {
        $this->db->select('*')
            ->from('playlist')
            ->order_by("tgl_submit_playlist", "desc")
            ->where($where);
        $query = $this->db->get();
        return $query;
    }
    function selectAll($where)
    {
        $this->db->select('*')
            ->from('recording')
            ->join('user', 'recording.id_user = user.id_user', 'inner')
            ->join('recording_playlist', 'recording_playlist.id_recording = recording.id_recording', 'inner')
            ->join('playlist', 'recording_playlist.id_playlist = playlist.id_playlist', 'inner')
            ->where($where);
        $query = $this->db->get();
        return $query;
    }
    function selectEpisodes($where){
        $this->db->join("recording","recording.id_recording = recording_playlist.id_recording","inner");
        $result = $this->db->get_where("recording_playlist",$where);
        $id_playlist ="";
        foreach($result->result() as $a){
            $id_playlist = $a->id_playlist;
        }
        $where = array(
            "recording_playlist.id_playlist"=>$id_playlist,
            'recording.status_recording' => 1,
            'recording_playlist.status_playlist' => 1
        );
        return $this->selectAll($where);
         
    }
    function select($where)
    {
        $this->db->select('*')
            ->from('recording')
            ->join('user', 'recording.id_user = user.id_user', 'inner')
            ->where($where);
        $query = $this->db->get();
        return $query;
    }
    
    function selectByPlaylist($where)
    {
        $this->db->select('*')
            ->from('recording_playlist')
            ->join('recording', 'recording_playlist.id_recording = recording.id_recording', 'inner')
            ->where($where);
        $query = $this->db->get();
        return $query;
    }
    
    function selectByRecPlay($where)
    {
        $this->db->select('*')
            ->from('recording_playlist')
            ->join('recording', 'recording_playlist.id_recording = recording.id_recording', 'inner')
            ->join('user', 'recording_playlist.id_user = user.id_user', 'inner')
            ->join('playlist', 'recording_playlist.id_playlist = playlist.id_playlist', 'inner')
            ->where($where);
        $query = $this->db->get();
        return $query;
    }
    
    function selectByUser($where)
    {
        $this->db->select('*')
            ->from('user_recording')
            ->join('recording', 'user_recording.id_recording = recording.id_recording', 'inner')
            ->join('recording_playlist', 'recording_playlist.id_recording = recording.id_recording', 'inner')
            ->join('playlist', 'recording_playlist.id_playlist = playlist.id_playlist', 'inner')
            ->where($where);
        $query = $this->db->get();
        return $query;
    }
    
    function selectComment($where)
    {
        $this->db->select('*')
            ->from('comment')
            ->join('user', 'comment.id_user = user.id_user', 'inner')
            ->order_by("comment.tgl_submit_comment", "desc")
            ->where($where);
        $query = $this->db->get();
        return $query;
    }
    function selectTop3($where){
        $this->db->limit(3);
        $this->db->join('user', 'recording.id_user = user.id_user', 'inner');
        $this->db->join('recording_playlist', 'recording_playlist.id_recording = recording.id_recording', 'inner');
        $this->db->group_by("recording.id_recording");
        $this->db->order_by("tgl_submit_recording","DESC");
        $this->db->join('playlist', 'recording_playlist.id_playlist = playlist.id_playlist', 'inner');
       
        return $this->db->get_where("recording",$where);
    }
    
    function search($where) {
        $this->db->select('*')
            ->from('recording')
            ->join('user', 'recording.id_user = user.id_user', 'inner')
            ->join('recording_playlist', 'recording_playlist.id_recording = recording.id_recording', 'inner')
            ->join('playlist', 'recording_playlist.id_playlist = playlist.id_playlist', 'inner')
            ->join('category', 'category.id_category = playlist.id_category', 'inner')
            ->like($where);
        $query = $this->db->get();
        return $query;
    }
    function totalDuration($where){
        $this->db->join("recording_playlist","recording_playlist.id_recording = recording.id_recording","inner");
        $this->db->select("sec_to_time(sum(time_to_sec(recording.duration_recording))) as 'total_durasi'");
        $result = $this->db->get_where("recording",$where);
        foreach($result->result() as $a){
            return $a->total_durasi;
        }
    }
    function selectRecordingNotInPlaylist($where){
        $this->db->where("recording.id_recording not in (select id_recording from recording_playlist where status_playlist = ".$where["status"]["playlist"].")",null,false );
        $result = $this->db->get("recording");
        return $result;
    }
}
?>