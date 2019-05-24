<?php
if($this->session->userdata("id_user") == "") {
    redirect("welcome");
}
?>
<div class="home">
    <div class="home_slider_container">
        
        <!-- Home Slider -->
        <div class="owl-carousel owl-theme home_slider"> <!--ini buat yang premium -->
            
            <!-- Slider Item -->
            <?php 
            $count = 0;
            foreach($play as $list) {
                $color = array("#5ce1e6","#ffde59");
            if($count == 5) {
                break;
            }
            ?>
            <div class="owl-item home_slider_item">
                <div class="home_slider_background" style="background-image:url(<?php echo base_url();?>assets/recording/<?php echo $list->foto_playlist; ?>); background-size:contain; opacity:0.5"></div>
                <div class="home_slider_background" style="background-color:<?php echo $color[$count%2];?>; opacity:0.5"></div>
                
                <div class="home_slider_content_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
                                    <div class="home_slider_title" style = "color:#545454"><?php echo $list->nama_playlist ?></div>
                                    <div class="home_slider_subtitle" style = "color:#545454"><?php echo $list->description_playlist ?></div>
                                    <div class="button button_dark home_button" style = "color:#545454"><a class = "Btn btn-dark btn-outline col-lg-12" href="<?php echo base_url();?>lounge/Stories/detail/<?php echo $list->id_playlist ?>">Listen Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
                $count++;;
            } ?>
        </div>

        <!-- Home Slider Dots -->
        
        <div class="home_slider_dots_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_slider_dots">
                            <ul id="home_slider_custom_dots" class="home_slider_custom_dots">
                                <?php 
                                $count = 1;
                                foreach($play as $list) { ?>
                                    <li class="home_slider_custom_dot">0<?php echo $count; ?>.</li>
                                    
                                <?php $count++;} ?>
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
                
                <h5 style = "font-weight: lighter">Most Favourite</h5><h3 style = "font-weight:bolder;color:black; opacity:0.7" align = "left">Stories<a href = "<?php echo base_url();?>lounge/explore"><span style = "font-size:13px; font-weight:bold; margin-left:10px">SEE MORE</span></a></h3>
                <hr/>
                <div class="product_grid">

                    <!-- Product -->
                    <?php foreach($favourite as $list) { ?>
                    <div class="product">
                        <div class="product_image" style = "height:300px; overflow:hidden;"><img src="<?php echo base_url();?>assets/recording/<?php echo $list->foto_playlist ?>" alt=""></div>
                        <div class="product_content">
                            <div class="product_title"><a href="<?php echo base_url();?>lounge/stories/detail/<?php echo $list->id_playlist ?>"><?php echo $list->nama_playlist ?></a></div>
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
                
                <h5 style = "font-weight: lighter">New Release & This Week's Choice</h5><h3 style = "font-weight:bolder;color:black; opacity:0.7" align = "left">Stories<a href = "<?php echo base_url();?>lounge/explore"><span style = "font-size:13px; font-weight:bold; margin-left:10px">SEE MORE</span></a></h3>
                <hr/>
                <div class="product_grid">

                    <!-- Product -->
                    <?php foreach($story as $list) { ?>
                    <div class="product">
                        <div class="product_image" style = "height:300px; overflow:hidden;"><img src="<?php echo base_url();?>assets/recording/<?php echo $list->foto_playlist ?>" alt=""></div>
                        <div class="product_content">
                            <div class="product_title"><a href="<?php echo base_url();?>lounge/stories/detail/<?php echo $list->id_playlist ?>"><?php echo $list->nama_playlist ?></a></div>
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
                <h5 style = "font-weight: lighter">Latest</h5><h3 style = "font-weight:bolder;color:black; opacity:0.7" align = "left">Stories Episodes<a href = "<?php echo base_url();?>lounge/explore"><span style = "font-size:13px; font-weight:bold; margin-left:10px">SEE MORE</span></a></h3>
                <hr/>
                <div class="product_grid">

                    <!-- Product -->
                    <?php 
                    $counter = 0;
                    foreach($episode as $list) {
                        if($counter == 8) {
                            //tampilin 8 terakhir
                            break;
                        }
                    ?>
                    <div class="product col-lg-3">
                        <div class="product_image" style = "height:300px; overflow:hidden;">
                            <img class = "align-middle" src="<?php echo base_url();?>assets/recording/<?php echo $list->foto_recording; ?>" alt="">
                        </div>
                        
                        <div class="product_content">
                            <div class="product_title"><a href="<?php echo base_url();?>lounge/stories/listen/<?php echo $list->id_recording ?>"><?php echo $list->judul_recording ?></a></div>
                            <div class="product_price"><?php echo $list->description_recording ?></div>
                        </div>
                    </div>
                    <?php 
                        $counter++;
                    } ?>

                </div>
                    
            </div>
        </div>
    </div>
</div>
