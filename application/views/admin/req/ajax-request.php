<script>
function loadRecordingDetail(){
    $(document).ready(function(){
        var id_recording = $("#idRec").val();
        $.ajax({
            url:"<?php echo base_url();?>admin/ajax/recordingDetail",
            data:{id_recording:id_recording},
            dataType:"JSON",
            type:"POST",
            success:function(respond){
                $("#name").val(respond["name"]);
                $("#duration").val(respond["duration"]);
                $("#image").attr("src","<?php echo base_url();?>assets/recording/"+respond["cover"]);
                $("#source").attr("href","<?php echo base_url();?>assets/recording/"+respond["audio"]);
            }
        });
    });
    
}
</script>
<script>
function loadRecordingNotInPlaylist(){
    $(document).ready(function(){
        var id_playlist = $("#id_playlist").val();
        //alert(id_playlist); 
        $("#name").val("");
        $("#duration").val("");
        $("#image").attr("src","");
        $("#source").attr("href","");
        $.ajax({
            url:"<?php echo base_url();?>admin/ajax/loadRecordingNotInPlaylist",
            type: "POST",
            dataType:"JSON",
            data:{id_playlist:id_playlist},
            success:function(respond){
                $("#idRec").html(respond);
            }
        });
    }); 
}
</script>