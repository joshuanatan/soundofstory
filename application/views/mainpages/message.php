<?php
if($this->session->userdata("id_user") == "") {
    redirect("welcome");
}
?>
<div class = "container" style = "margin-top:130px;height:650px">
    <div class="sunil-messaging col-lg-12"> 
        <div class="sunil-inbox_msg col-lg-12">
            <div class="sunil-mesgs col-lg-12" style="width:100%">
                <div class="sunil-msg_history col-lg-12" id="parent">
                    <?php foreach($message as $a){ ?>
                        <?php if($a->id_user_dari != $this->session->id_user){ ?>  
                    <div class="sunil-incoming_msg">
                        <div class="sunil-incoming_msg_img" style = "height:60px;width:60px;overflow:hidden "> <img style = "width:100%" src="<?php echo base_url();?>assets/profiles/images/<?php echo $a->foto_profile_user;?>" alt="sunil"> </div>
                        <div class="sunil-received_msg">
                            <div class="sunil-received_withd_msg">
                                <p><?php echo $a->konten;?></p>
                                <span class="sunil-time_date"><strong><?php echo $a->nama_user;?></strong> <?php echo $a->tgl_submit_message." ".$a->jam_submit_message;?></span>
                            </div>
                        </div>
                    </div>
                    <?php } 
                    else { ?> 
                    <div class="sunil-outgoing_msg">
                        <div class="sunil-sent_msg">
                            <p><?php echo $a->konten;?></p>
                            <span class="sunil-time_date"><?php echo $a->tgl_submit_message." ".$a->jam_submit_message;?></span>
                        </div>
                    </div>
                    <?php } ?>
                    <?php } ?>
                </div>
                <div class="sunil-type_msg">
                    <div class="sunil-input_msg_write">
                        <form action="javascript:sendChat()" method="post">
                            <input type="text" class="sunil-write_msg" name="msg" id="msg" placeholder="Type a message" />
                            <button class="sunil-msg_send_btn" type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url().'assets/js/jquery.js' ;?>"></script>
<script>
    function getChat($id) {
        $("#parent").empty();
        var id = $id;
        console.log(id);
        $.ajax({
            type : 'POST',
            url : "<?php echo base_url().'lounge/Chatroom/ajax/'?>",
            dataType : "JSON",
            data : {id:id},
            success : function(data) {
                $('#parent').append(data);
            }
        });
    }
    function sendChat() {
        var isi = $('input[name=msg]').val();
        //console.log(isi);
        $.ajax({
            type : 'POST',
            url : "<?php echo base_url().'lounge/Chatroom/send/' ?>",
            dataType : "JSON",
            data : {isi:isi},
            success : function(data) {
                $('#parent').append(data);
                $('#msg').val('');
            }
        });
    }
</script>