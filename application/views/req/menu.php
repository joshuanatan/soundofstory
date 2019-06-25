<header class="header">
<div class="header_container">
			<div class="container">
				<div class="row">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start">
                        <div class="logo" style = "margin-left:10px;width:20%;margin:10px"><a href="<?php echo base_url();?>lounge/welcome"><img style = "width:100%" src = "<?php echo base_url();?>assets/images/logosos.png"></a></div>
                        <nav class="main_nav">
                            <ul>
                                <li>
                                    <a href="<?php echo base_url();?>lounge/welcome" style = "font-size:14px">Lounge</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>lounge/explore" style = "font-size:14px">Explore</a>
                                </li>
                                <?php if($this->session->premium == 1):?>
                                <li class="hassubs">
                                    <a href="#" style = "font-size:14px">Stories</a>
                                    <ul style = "width:200px">
                                        <li><a href="<?php echo base_url();?>lounge/history" style = "font-size:14px">Episode's Journey</a></li>
                                        <li><a href="<?php echo base_url();?>lounge/favourites" style = "font-size:14px">Favourites</a></li>
                                    </ul>
                                </li>
                                <?php endif;?>
                                <li>
                                    <a href="<?php echo base_url();?>lounge/buddy" style = "font-size:14px">Buddy</a>
                                </li>
                                <li class="hassubs">
                                    <a href="#" style = "font-size:14px"><?php echo $this->session->nama_user;?></a>
                                    <ul style = "width:200px">
                                        <li><a href="<?php echo base_url();?>lounge/profile">Profile</a></li>
                                        <li><a href="<?php echo base_url();?>lounge/profile/logout">Logout</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>lounge/contact/" style = "font-size:14px">Contact Us</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>lounge/faq/" style = "font-size:14px">FAQ</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="header_extra ml-auto">
                            <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

</header>

<!-- Menu -->
<!--
<div class="menu menu_mm trans_300">
    <div class="menu_container menu_mm">
        <div class="page_menu_content">
                    
            <ul class="page_menu_nav menu_mm">
                <li class="page_menu_item has-children menu_mm">
                    <a href="index.php">Lounge</a>
                </li>
                <li class="page_menu_item has-children menu_mm">
                    <a href="index.php">Explore</a>
                </li>
                <li class="page_menu_item has-children menu_mm">
                    <a href="playlist.php">Stories</a>
                </li>
                <li class="page_menu_item has-children menu_mm">
                    <a href="playlist.php">Buddy</a>
                </li>
                <li class="page_menu_item has-children menu_mm">
                    <a href="#">Kshiti Ghelanix<i class="fa fa-angle-down"></i></a>
                    <ul class="page_menu_selection menu_mm">
                        <li class="page_menu_item menu_mm"><a href="profile.php">Profile</a></li>
                        <li class="page_menu_item menu_mm"><a href="logout.php">Logout</a></li>
                    </ul>
                </li>
                <li class="page_menu_item has-children menu_mm">
                    <a href="#">Contact Us</a>
                </li>
                <li class="page_menu_item has-children menu_mm">
                    <a href="#">FAQ</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>

</div>
-->