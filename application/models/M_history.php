<?php
class M_history extends CI_Model {
    function selectData($where)
    {
        $this->db->select('*')
            ->from('history_recording')
            ->join('recording', 'history_recording.id_recording = recording.id_recording', 'inner')
            ->join('user', 'history_recording.id_user = user.id_user', 'inner')
            ->where($where);
        $query = $this->db->get();
        return $query;
    }
    function insert($data){
        $this->db->insert("history_recording",$data);
    }
    function select()
    {
        $this->db->select('*')
            ->from('user_recording')
            ->join('recording', 'user_recording.id_recording = recording.id_recording', 'inner')
            ->join('user', 'user_recording.id_user = user.id_user', 'inner');
        $query = $this->db->get();
        return $query;
    }
    function countHistory($where){
        $this->db->select("count(id_history) as 'countAudience'");
        $this->db->join("recording","recording.id_recording = history_recording.id_recording","inner");
        $this->db->join("recording_playlist","recording_playlist.id_recording = recording.id_recording","inner");
        $this->db->where($where);
        $result = $this->db->get("history_recording");
        foreach($result->result() as $a){
            return $a->countAudience;
        }
    }
    function orderByHistory($where){
        $this->db->select("*,count(id_history) as 'countAudience',sec_to_time(sum(time_to_sec(recording.duration_recording))) as 'total_durasi'");
        $this->db->join("recording","recording.id_recording = history_recording.id_recording","inner");
        $this->db->join("recording_playlist","recording_playlist.id_recording = recording.id_recording","inner");
        $this->db->join("playlist","playlist.id_playlist = recording_playlist.id_playlist","inner");
        $this->db->join("category","category.id_category = playlist.id_category","inner");
        $this->db->group_by("playlist.id_playlist");
        $this->db->where($where);
        $this->db->order_by('countAudience','DESC');
        return $this->db->get("history_recording");
    }
    function getHistory($where){
        $this->db->join("recording","recording.id_recording = history_recording.id_recording","inner");
        $this->db->join("recording_playlist","recording_playlist.id_recording = recording.id_recording","inner");
        $this->db->join("playlist","playlist.id_playlist = recording_playlist.id_playlist","inner");
        $this->db->join("category","category.id_category = playlist.id_category","inner");
        $this->db->order_by("tgl_submit_history","DESC");
        $this->db->group_by("id_history");
        return $this->db->get_where("history_recording",$where);
    }
}
?>