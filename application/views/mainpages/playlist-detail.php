<?php
if($this->session->userdata("id_user") == "") {
    redirect("welcome");
}
?>
<div class="home" style = "height:400px">
    <div class="home_container">
        <div class="home_background"></div>
        <div class="home_content_container" style = "border-color:#545454;border-width:1px">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <?php foreach($story as $list) { ?>
                            <!--<div class="home_title" style = "color:#545454"><?php echo $list->nama_category ?><span>.</span></div><div class="home_text" style = "color:#545454"><p><?php echo $list->description_category ?></p></div>-->
                            <div class="home_title" style = "color:#545454"><?php echo $list->nama_playlist ?><span>.</span></div>
                            <br/>
                            <div class="home_text"><h4 style = "color:#545454"><?php echo nl2br($list->description_playlist);?></h4></div>
                            <?php } ?>
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
            <div class="col-lg-12">
                <div class="details_content">
                    <div class="details_name">GENRE<p><?php echo $list->nama_category ?></p></div>
                    <br/>
                    <div class="details_name">TOTAL DURATION<p><?php echo $totalDuration ?></p></div>
                    <br/>
                    <div class="details_name">PLAYS<p><?php echo $totalPlayed ?></p></div>
                    <div class="details_share">
                    </div>
                </div>
            </div>
        </div>
        <BR/>
        <?php if(isExistsInTable("user_favourite",array("id_user" => $this->session->id_user,"id_playlist" => $id_playlist)) == 1):?>
        <a href = "<?php echo base_url();?>lounge/stories/addToFavourite/<?php echo $id_playlist;?>" class = "btn btn-primary" style = "background-color:grey; border:none"><i class = "fa fa-plus"></i> ADD TO FAVORITE</a>
        <?php else:?>
        <a href = "<?php echo base_url();?>lounge/stories/removeFromFavourite/<?php echo $id_playlist;?>" class = "btn btn-primary" style = "border:none;color:black"> ADDED TO FAVORITE</a>
        <?php endif;?>
        <br/>
        <BR/>
        <h3 style = "color:black">EPISODES</h3>
        <div class="row">
            <div class="col">
                
                <div class="product_grid">

                    <!-- Product -->
                    <?php foreach($episode as $list) { ?>
                    <div class="product">
                        <div class="product_image" style = "height:300px; overflow:hidden;">
                            <img class = "align-middle" src="<?php echo base_url();?>assets/recording/<?php echo $list->foto_recording; ?>" alt="">
                        </div>
                        <div class="product_content">
                            <div class="product_title"><a href="<?php echo base_url();?>lounge/stories/listen/<?php echo $list->id_recording ?>"><?php echo $list->judul_recording ?></a></div>
                            <div class="product_price"><?php echo $list->description_recording ?></div>
                        </div>
                    </div>
                    <?php } ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>
