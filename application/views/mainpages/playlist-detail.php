<div class="home">
    <div class="home_container">
        <div class="home_background" style="background-image:url(<?php echo base_url();?>assets/images/categories.jpg)"></div>
        <div class="home_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <?php foreach($story as $list) { ?>
                            <div class="home_title"><?php echo $list->nama_category ?><span>.</span></div>
                            <div class="home_text"><p><?php echo $list->description_category ?></p></div>
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


            <!-- Product Content -->
            <?php foreach($story as $list) { ?>
            <div class="col-lg-12">
                <div class="details_content">
                    <div class="details_name"><?php echo $list->nama_playlist ?></div>
                    <!-- In Stock -->
                    <div class="in_stock_container">
                        <div class="availability">Audience:</div>
                        <span>30 Audience</span>
                    </div>
                    <div class="details_text">
                        <p><?php echo $list->description_playlist ?></p>
                    </div>

                    <!-- Share -->
                    <div class="details_share">
                        <span>Share:</span>
                        <ul>
                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        
        <div class="row">
            <div class="col">
                
                <div class="product_grid">

                    <!-- Product -->
                    <?php foreach($episode as $list) { ?>
                    <div class="product">
                        <div class="product_image"><img src="<?php echo base_url();?>assets/images/recording/<?php echo $list->foto_recording ?>" alt=""></div>
                        <div class="product_content">
                            <div class="product_title"><a href="<?php echo base_url();?>stories/<?php echo $list->id_recording ?>"><?php echo $list->judul_recording ?></a></div>
                            <div class="product_price"><?php echo $list->description_recording ?></div>
                        </div>
                    </div>
                    <?php } ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>
