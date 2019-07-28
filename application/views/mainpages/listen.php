<?php
if($this->session->userdata("id_user") == "") {
    redirect("welcome");
} 
foreach($episode as $list) { ?>
<div class="home">
    <div class="home_container">
        <div class="home_background" style="background-image:url(<?php echo base_url();?>assets/recording/<?php echo $list->foto_playlist; ?>); background-size:contain; opacity:0.5"></div>
        <div class="home_background" style="background-color:#5ce1e6; opacity:0.5"></div>
        <div class="home_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <div class="home_title" style = "color:#545454"><?php echo $list->nama_playlist ?><span>.</span></div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product_details">
    <div class="container">
        <div class="row details_row">


            <!-- Product Content -->
            <div class="col-lg-12">
                <div class="details_content">
                    <div class="home_text"><h3 style = "color:#545454"><?php echo nl2br($list->description_playlist);?></h3></div>
                    <br/>
                    <div class="details_name">Chapter <?php echo $list->chapter_playlist;?> - <?php echo $list->judul_recording;?></div>
                    <div class="details_text">
                        <h4><?php echo nl2br($list->description_recording);?></h4>
                    </div>
                    <!-- In Stock -->
                    <div class="in_stock_container">
                        <div class="availability">Duration:</div>
                        <span style = "font-size:20px;color:black"><?php echo $list->duration_recording.' minutes' ?></span><br/><br/>
                        <div class="availability">Seen:</div>
                        <span style = "font-size:20px;color:black"><?php echo $audience.' Times' ?></span>
                    </div>
                    

                    <!-- Share -->
                    <div style = "margin-top:20px">
                        <audio controls style = "width: 100%" controlsList="nodownload">
                            <source src="<?php echo base_url().'assets/recording/'.$list->file_recording ?>" type="audio/mpeg">
                        </audio>
                    </div>
                </div>
            </div>
        </div>
        <hr/>
        <?php if(isExistsInTable("like",array("id_user" => $this->session->id_user,"id_recording" => $id_recording)) == 1):?>
        <a href = "<?php echo base_url();?>lounge/stories/like/<?php echo $id_recording;?>" class = "btn btn-primary" style = "background-color:grey; border:none"><i class = "fa fa-heart"></i> LIKE</a>
        <?php else:?>
        <a href = "<?php echo base_url();?>lounge/stories/dislike/<?php echo $id_recording;?>" class = "btn btn-primary" style = "background-color:red; border:none">LIKED</a>
        <?php endif;?>

        <?php if(isExistsInTable("user_playlist",array("id_user" => $this->session->id_user,"id_recording" => $id_recording)) == 1):?>
        <a href = "<?php echo base_url();?>lounge/stories/addToPlaylist/<?php echo $id_recording;?>" class = "btn btn-primary" style = "background-color:grey; border:none"><i class = "fa fa-plus"></i> ADD TO PLAYLIST</a>
        <?php else:?>
        <a href = "<?php echo base_url();?>lounge/stories/removeFromPlaylist/<?php echo $id_recording;?>" class = "btn btn-primary" style = "background-color:red; border:none">ADDED TO PLAYLIST</a>
        <?php endif;?>
        <br/>
        <div class="row description_row" style = "margin-bottom:20px; margin-top:20px">
            <div class="col">
                <div class="description_title_container">
                    <div class="description_title">Comments</div>
                </div>
                <br/><br/>
                <div class="row">
                    
                    <div class = "col-lg-12" style = "display:inline-block">
                        <form action="<?php echo base_url().'lounge/Stories/addComment/'.$list->id_recording; ?>" method="post">
                            <div class = "form-group">
                                <label>Your Opinion</label>
                                <textarea name="isi" class = "form-control col-lg-12"></textarea>
                            </div>
                            <input type = "submit" class = "btn btn-sm btn-primary">
                        </form>
                    </div>
                </div>
                <hr/>   
                <div class = "comment-container" style = "height: 330px; overflow-y:scroll; overflow-x:hidden"> 
                    <?php foreach($comment as $list2) { 
                    $date = date_create($list2->tgl_submit_comment);
                    ?>
                    <label><?php echo $list2->nama_user;?> - <?php echo date_format($date,"d/m/Y"); ?></label>
                    <div class="row">
                        <div class = "col-lg-1" style = "display:inline-block">
                            <img src="<?php echo base_url();?>assets/profiles/images/<?php echo $list2->foto_profile_user ?>" alt="" style = "width:100%">
                        </div>
                        <div class = "col-lg-11" style = "display:inline-block">
                            <p><?php echo $list2->comment ?></p>
                        </div>
                    </div>
                    <hr/>
                    <?php } ?>
                </div>
                <hr/>    
            </div>
        </div>
        <div class="row">
            <div class="col details_share">
                <br/>
                <h3 style = "color:black"><strong>EPISODES</strong></h3>
                <div class="product_grid">
                <?php foreach($episodes as $a){ ?> 
                    <!-- Product -->
                    <div class="product">
                        <div class="product_image">
                            <img src="<?php echo base_url();?>assets/recording/<?php echo $a->foto_recording;?>" alt="">
                        </div>
                        <div class="product_content">
                            <div class="product_title">
                                <a href="<?php echo base_url();?>lounge/stories/listen/<?php echo $a->id_recording;?>"><?php echo $a->judul_recording;?></a>
                            </div>
                            <div class="product_price">Chapter <?php echo $a->chapter_playlist;?></div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
        <hr/>
        

    </div>
</div>
<?php } ?>