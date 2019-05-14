<div class = "container" style = "margin-top:130px;height:650px">
    <div class="sunil-messaging"> 
        <div class="sunil-inbox_msg">
            <div class="sunil-inbox_people">
                <div class="sunil-headind_srch">
                    <div class="sunil-recent_heading">
                        <h4>Friends</h4>
                    </div>
                    <div class="sunil-srch_bar">
                        <div class="sunil-stylish-input-group">
                            <input type="text" class="sunil-search-bar"  placeholder="Search" >
                            <span class="sunil-input-group-addon">
                                <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                            </span> </div>
                    </div>
                </div>
                <div class="sunil-inbox_chat">
                    
                    <form>
                        <ol>
                            <?php foreach($message as $list) { ?>
                            <li onclick="getChat('<?php echo $list->id_user_tujuan; ?>')">
                                <div class="sunil-chat_list active_chat">
                                    <div class="sunil-chat_people">
                                        <div class="sunil-chat_img">
                                            <img src="<?php echo base_url().'assets/profiles/images/'.$list->foto_profile_user ?>" alt="sunil">
                                        </div>
                                        <div class="sunil-chat_ib">
                                            <h5>
                                                <?php echo $list->nama_user ?> 
                                                <span class="sunil-chat_date"><?php echo $list->tgl_submit_message ?></span>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php } ?>
                        </ol>
                    </form>
                    
                </div>
            </div>
            <div class="sunil-mesgs">
                <div class="sunil-msg_history" id="parent">
                    <div class="sunil-incoming_msg">
                        <div class="sunil-incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                        <div class="sunil-received_msg">
                            <div class="sunil-received_withd_msg">
                                    <p>Test which is a new approach to have all
                                        solutions</p>
                                <span class="sunil-time_date"> 11:01 AM    |    June 9</span>
                            </div>
                        </div>
                    </div>
                    <div class="sunil-outgoing_msg">
                        <div class="sunil-sent_msg">
                            <p>Test which is a new approach to have all
                                solutions</p>
                            <span class="sunil-time_date"> 11:01 AM    |    June 9</span> 
                        </div>
                    </div>
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
            url : "<?php echo base_url().'Chatroom/ajax/'?>",
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
            url : "<?php echo base_url().'Chatroom/send/' ?>",
            dataType : "JSON",
            data : {isi:isi},
            success : function(data) {
                $('#parent').append(data);
                $('#msg').val('');
            }
        });
    }
</script>