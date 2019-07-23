    <?php
    if($this->session->userdata("id_user") == "") {
        redirect("welcome");
    }
    ?>
    <br/>
    <br/>
    <br/>
    <?php echo $this->session->premium;if($this->session->premium == 1):?>
    <div class="products">
        <div class="container">
            <div class="row">
                <div class = "col-lg-4" style = "" style = "padding-top:50%">

                    <h2 style = "font-weight:bolder;color:black; opacity:0.7; margin-top:50%" align = "left">SOS EXCLUSIVE</h2>
                    <a href = "<?php echo base_url();?>lounge/explore">
                        <span style = "font-size:13px;">SEE MORE</span>
                    </a>
                </div>
                <div class="col-lg-8">
                    
                    <div class="product_grid">

                        <!-- Product -->
                        <?php foreach($favourite as $list) { ?>
                        <div class="product">
                            <div class="product_image" style = "height:150px; overflow:hidden;"><img src="<?php echo base_url();?>assets/images/story/<?php echo $list->foto_playlist ?>" alt=""></div>
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
    <?php endif;?>
    <div class="products">
        <div class="container">
            <div class="row">
                <div class = "col-lg-4" style = "" style = "padding-top:50%">
                    <h2 style = "font-weight:bolder;color:black; opacity:0.7; margin-top:50%" align = "left">NEW RELEASES</h2>
                    <a href = "<?php echo base_url();?>lounge/explore">
                        <span style = "font-size:13px;">SEE MORE</span>
                    </a>
                </div>
                <div class="col-lg-8">
                    <div class="product_grid">

                        <!-- Product -->
                        <?php foreach($story as $list) { ?>
                        <div class="product">
                            <div class="product_image" style = "height:150px; overflow:hidden;"><img src="<?php echo base_url();?>assets/images/story/<?php echo $list->foto_playlist ?>" alt=""></div>
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
                <div class = "col-lg-4" style = "" style = "padding-top:50%">
                    <h2 style = "font-weight:bolder;color:black; opacity:0.7; margin-top:50%" align = "left">BEST OF BESTS</h2>
                    <a href = "<?php echo base_url();?>lounge/explore">
                        <span style = "font-size:13px;">SEE MORE</span>
                    </a>
                </div>
                <div class="col-lg-8">
                    
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
                            <div class="product_image" style = "height:150px; overflow:hidden;">
                                <img class = "align-middle" src="<?php echo base_url();?>assets/recording/<?php echo $list->foto_recording; ?>" alt="">
                            </div>
                            
                            <div class="product_content">
                                <div class="product_title"><a href="<?php echo base_url();?>lounge/stories/listen/<?php echo $list->idrecording ?>"><?php echo $list->judul_recording ?></a></div>
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
    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <h2 style = "font-weight:bolder;color:black; opacity:0.7" align = "left">OUR STORIES</h2>
                    <a href = "<?php echo base_url();?>lounge/explore">
                        <span style = "font-size:13px;">SEE MORE</span>
                    </a>
                    <br/>
                    <br/>
                    <div class="product_grid">

                        <!-- Product -->
                        <?php 
                        $counter = 0;
                        foreach($list_story as $list) {
                            if($counter == 8) {
                                //tampilin 8 terakhir
                                break;
                            }
                        ?>
                        <div class="product col-lg-3">
                            <div class="product_image" style = "height:100%; overflow:hidden;">
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
</div>
<hr/>
<div class = "container" style = "width:100%;">
    <div class = "row">
        <div class="col-lg-12 contact_col">
            <div class="get_in_touch">
                <div class="section_title"></div>
                <div class="section_subtitle"></div>
                <div class="contact_form_container">
                    <form action="<?php echo base_url();?>lounge/message/insertAsk" method = "POST" id="contact_form" class="contact_form">
                        <div>
                            <!-- Subject -->
                            <label for="contact_company">Subject</label>
                            <input type = "text" name="subject" placeholder="Subject" id="contact_company" class="contact_input">
                        </div>
                        <div>
                            <label for="contact_textarea">Message*</label>
                            <textarea name="konten" placeholder="Message for Us" id="contact_textarea" class="contact_input contact_textarea" required="required"></textarea>
                        </div>
                        <button class="button contact_button"><span>Send Message</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br/><br/>