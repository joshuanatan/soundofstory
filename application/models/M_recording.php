<?php
class M_recording extends CI_Model {
    function selectLast($where) {
        $this->db->select('*')
            ->from('recording')->join("recording_playlist","recording_playlist.id_recording = recording.id_recording","inner")->join("playlist","playlist.id_playlist = recording_playlist.id_playlist","inner")
            ->order_by("recording.id_recording", "desc")
            ->where($where)->where("playlist.status_premium <=", $this->session->premium)->group_by("recording.id_recording")->where("playlist.status_playlist",1);
        $query = $this->db->get();
        return $query;
    }
    function selectFavourites($where){ /*hanya untuk yang di index aja pakenya karena harus munculin dari yang top sampe yang tercupu*/
        
        $query = $this->db->query("SELECT *, count(history_recording.id_history) as a,recording.id_recording as idrecording FROM recording INNER JOIN recording_playlist ON recording_playlist.id_recording = recording.id_recording INNER JOIN playlist ON playlist.id_playlist = recording_playlist.id_playlist left outer join history_recording on history_recording.id_recording = recording.id_recording WHERE status_recording = 1 AND playlist.status_premium <= 1 AND playlist.status_playlist = 1 group by history_recording.id_recording ORDER BY a DESC");
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
        $this->db->order_by("recording.id_recording","DESC");
        $this->db->join('playlist', 'recording_playlist.id_playlist = playlist.id_playlist', 'inner');
       
        return $this->db->get_where("recording",$where);
    }
    
    function search($where) {
        $this->db->select('*,count(id_history) as a,recording.id_recording as idrecording')
            ->from('recording')
            ->join('user', 'recording.id_user = user.id_user', 'inner')
            ->join('recording_playlist', 'recording_playlist.id_recording = recording.id_recording', 'inner')
            ->join('playlist', 'recording_playlist.id_playlist = playlist.id_playlist', 'inner')->join("history_recording","history_recording.id_recording = recording.id_recording","left outer")
            ->join('category', 'category.id_category = playlist.id_category', 'inner')->where("playlist.status_premium <=", $this->session->premium)->where("recording.status_recording",1)->where("playlist.status_playlist",1)->group_by("recording.id_recording")
            ->like($where)->order_by('recording.id_recording','DESC');
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