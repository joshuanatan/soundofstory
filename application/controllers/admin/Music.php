<?php
class Music extends CI_Controller{

    public function index(){
        $params = array(
            "filename" => base_url()."assets/recording/AUD-20190314-WA0000.mp3"
        );
        $this->load->library("mp3",$params);
        $duration2 = $this->mp3->getDuration();
        $duration1 = $this->mp3->getDurationEstimate();
        //$mp3file = new MP3File(base_url()."assets/recording/AUD-20190314-WA0000.mp3");//http://www.npr.org/rss/podcast.php?id=510282
        //$duration1 = $mp3file->getDurationEstimate();//(faster) for CBR only
        //$duration2 = $mp3file->getDuration();//(slower) for VBR (or CBR)
        echo "duration: $duration1 seconds"."\n";
        echo "estimate: $duration2 seconds"."\n";
        echo $this->mp3->formatTime($duration2)."\n";
    }
}
?>