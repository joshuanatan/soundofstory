<?php
class M_recording extends CI_Model {
    function selectAll($where)
    {
        $this->db->select('*')
            ->from('recording')
            ->join('recording_playlist', 'recording_playlist.id_recording = recording.id_recording', 'inner')
            ->join('playlist', 'recording_playlist.id_playlist = playlist.id_playlist', 'inner')
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
            ->where($where);
        $query = $this->db->get();
        return $query;
    }
}
?>