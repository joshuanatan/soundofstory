<?php
$this->session->set_userdata("id", 1);
$this->session->set_userdata("nama", "James");
?>
<div class="home">
    <div class="home_slider_container">
        
        <!-- Home Slider -->
        <div class="owl-carousel owl-theme home_slider"> <!--ini buat yang premium -->
            
            <!-- Slider Item -->
            <div class="owl-item home_slider_item">
                <div class="home_slider_background" style="background-image:url(<?php echo base_url();?>assets/images/home_slider_1.jpg)"></div>
                <div class="home_slider_content_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
                                    <div class="home_slider_title">Story Title</div>
                                    <div class="home_slider_subtitle">It is good to tell the audience what the story is or at least give them a little insight about the story hence you don't waste your audience time by make them disappointed</div>
                                    <div class="button button_light home_button"><a href="<?php echo base_url();?>stories/listen">Listen Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider Item -->
            <div class="owl-item home_slider_item">
                <div class="home_slider_background" style="background-image:url(<?php echo base_url();?>assets/images/home_slider_1.jpg)"></div>
                <div class="home_slider_content_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
                                    <div class="home_slider_title">Story Title</div>
                                    <div class="home_slider_subtitle">It is good to tell the audience what the story is or at least give them a little insight about the story hence you don't waste your audience time by make them disappointed</div>
                                    <div class="button button_light home_button"><a href="<?php echo base_url();?>stories/listen">Listen Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider Item -->
            <div class="owl-item home_slider_item">
                <div class="home_slider_background" style="background-image:url(<?php echo base_url();?>assets/images/home_slider_1.jpg)"></div>
                <div class="home_slider_content_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
                                    <div class="home_slider_title">Story Title</div>
                                    <div class="home_slider_subtitle">It is good to tell the audience what the story is or at least give them a little insight about the story hence you don't waste your audience time by make them disappointed</div>
                                    <div class="button button_light home_button"><a href="<?php echo base_url();?>stories/listen">Listen Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Home Slider Dots -->
        
        <div class="home_slider_dots_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_slider_dots">
                            <ul id="home_slider_custom_dots" class="home_slider_custom_dots">
                                <li class="home_slider_custom_dot active">01.</li>
                                <li class="home_slider_custom_dot">02.</li>
                                <li class="home_slider_custom_dot">03.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>	
        </div>

    </div>
</div>
<div class="products">
    <div class="container">
        <div class="row">
            <div class="col">
                
                <h5 style = "font-weight: lighter">Most Favourite</h5><h3 style = "font-weight:bolder;color:black; opacity:0.7" align = "left">Stories<a href = "<?php echo base_url();?>stories"><span style = "font-size:13px; font-weight:bold; margin-left:10px">SEE MORE</span></a></h3>
                <hr/>
                <div class="product_grid">

                    <!-- Product -->
                    <?php foreach($story as $list) { ?>
                    <div class="product">
                        <div class="product_image"><img src="<?php echo base_url();?>assets/images/story/<?php echo $list->foto_playlist ?>" alt=""></div>
                        <div class="product_content">
                            <div class="product_title"><a href="<?php echo base_url();?>stories/detail/<?php echo $list->id_playlist ?>"><?php echo $list->nama_playlist ?></a></div>
                            <div class="product_price"><?php echo $list->description_playlist ?></div>
                        </div>
                    </div>
                    <?php } ?>

                </div>
                    
            </div>
        </div>
    </div>
</div>
<div class="products">
    <div class="container">
        <div class="row">
            <div class="col">
                
                <h5 style = "font-weight: lighter">New Release & This Week's Choice</h5><h3 style = "font-weight:bolder;color:black; opacity:0.7" align = "left">Stories<a href = "<?php echo base_url();?>stories"><span style = "font-size:13px; font-weight:bold; margin-left:10px">SEE MORE</span></a></h3>
                <hr/>
                <div class="product_grid">

                    <!-- Product -->
                    <?php foreach($story as $list) { ?>
                    <div class="product">
                        <div class="product_image"><img src="<?php echo base_url();?>assets/images/story/<?php echo $list->foto_playlist ?>" alt=""></div>
                        <div class="product_content">
                            <div class="product_title"><a href="<?php echo base_url();?>stories/detail/<?php echo $list->id_playlist ?>"><?php echo $list->nama_playlist ?></a></div>
                            <div class="product_price"><?php echo $list->description_playlist ?></div>
                        </div>
                    </div>
                    <?php } ?>

                </div>
                    
            </div>
        </div>
    </div>
</div>  
<div class="products">
    <div class="container">
        <div class="row">
            <div class="col">
                
                <h5 style = "font-weight: lighter">Latest</h5><h3 style = "font-weight:bolder;color:black; opacity:0.7" align = "left">Stories Episodes<a href = "<?php echo base_url();?>stories"><span style = "font-size:13px; font-weight:bold; margin-left:10px">SEE MORE</span></a></h3>
                <hr/>
                <div class="product_grid">

                    <!-- Product -->
                    <?php foreach($episode as $list) { ?>
                    <div class="product">
                        <div class="product_image"><img src="<?php echo base_url();?>assets/images/recording/<?php echo $list->foto_recording ?>" alt=""></div>
                        <div class="product_content">
                            <div class="product_title"><a href="<?php echo base_url();?>stories/listen/<?php echo $list->id_recording ?>"><?php echo $list->judul_recording ?></a></div>
                            <div class="product_price"><?php echo $list->description_recording ?></div>
                        </div>
                    </div>
                    <?php } ?>

                </div>
                    
            </div>
        </div>
    </div>
</div>
