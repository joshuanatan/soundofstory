<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<!-- Author Meta -->
	<meta name="author" content="Colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>CellOn</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,300,500" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/landing/css/linearicons.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/landing/css/owl.carousel.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/landing/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/landing/css/nice-select.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/landing/css/magnific-popup.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/landing/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/landing/css/main.css">
	</head>
	<body>
	<div class="oz-body-wrap">
		<!-- Start Header Area -->
		<header class="default-header">
			<div class="container-fluid">
				<div class="header-wrap">
					<div class="header-top d-flex justify-content-between align-items-center">
						
						<div class="main-menubar d-flex align-items-right">
							<nav class="">
                                <a href="<?php echo base_url();?>welcome/index">Home</a>
								<a href="<?php echo base_url();?>welcome/login">Sign In</a>
								<a href="<?php echo base_url();?>welcome/register">Sign Up</a>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
		
		<section class="contact-area pt-100 pb-100 relative">
			<div class="container">
				<div class="row justify-content-center text-center">
					<div class="single-contact col-lg-6 col-md-8">
						<img src = "<?php echo base_url();?>assets/images/logosos.png" style ="width:100%">
					</div>
                </div>
				<div class="row justify-content-center text-center">
					<div class="single-contact col-lg-6 col-md-8">
						<h2 class="text-black"><span>WELCOME</span> BACK</h2>
						<p class="text-black" style = "color:black">
							It feels great to meet you again
						</p>
					</div>
                </div>
                <br/>
				<form action="<?php echo base_url();?>welcome/signin" method="post">
                    <div class = "form-group">
                        <h6 style = "color:black">Email</h6>
                        <input type = "Email" class = "form-control" placeholder="Email ex: username@example.com" name = "email_user">
                    </div>
                    
                    <div class = "form-group">
                        <h6 style = "color:black">Password</h6>
                        <input type = "password" class = "form-control" placeholder="Password for Further Login" name = "password_user">
                    </div>
                    <div class = "form-group" style = "margin-top:20px">
                        <button type = "submit" class = "col-lg-2 btn btn-primary">LOGIN</button>
                        <a type = "button" href = "<?php echo base_url();?>welcome" class = "col-lg-2 btn btn-primary">BACK</a>
                    </div>
				</form>
			</div>
		</section>
		<!-- End Conatct- Area -->
		<!-- Strat Footer Area -->
		<footer class="section-gap">
			<div class="container">
				<div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					<p class="footer-text m-0" style = "color:White">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i style = "color:white" class="fa fa-heart-o" aria-hidden="true"></i> by <a style = "color:white" href="https://colorlib.com" target="_blank">Colorlib</a></p>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</div>
			</div>
		</footer>
		<!-- End Footer Area -->
	</div>

		<script src="<?php echo base_url();?>assets/landing/js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="<?php echo base_url();?>assets/landing/js/vendor/bootstrap.min.js"></script>
		<script src="<?php echo base_url();?>assets/landing/js/jquery.ajaxchimp.min.js"></script>
		<script src="<?php echo base_url();?>assets/landing/js/owl.carousel.min.js"></script>
		<script src="<?php echo base_url();?>assets/landing/js/jquery.nice-select.min.js"></script>
		<script src="<?php echo base_url();?>assets/landing/js/jquery.magnific-popup.min.js"></script>
		<script src="<?php echo base_url();?>assets/landing/js/jquery.counterup.min.js"></script>
		<script src="<?php echo base_url();?>assets/landing/js/waypoints.min.js"></script>
		<script src="<?php echo base_url();?>assets/landing/js/main.js"></script>
	</body>
</html>
