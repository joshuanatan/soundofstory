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
	<title>SOUND OF STORY</title>

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
		<section class="banner-area relative">
			<div class="container">
				<div class="row fullscreen align-items-center justify-content-center">
					<div class="banner-left col-lg-12">
						<img  class="d-flex mx-auto img-fluid" src="<?php echo base_url();?>assets/images/logosos.png" width="40%" alt="">
					</div>
					<div class="col-lg-12 feature-area">
						
						<div class="container">
							
							<div class="row">
							<?php foreach($episode as $list){ ?>
								<div class="col-lg-4 col-sm-6">
									<div class="single-feature">
										<div class="icon" data-toggle="modal" data-target="#songs<?php echo $list->id_recording;?>">
											<span class="lnr fa fa-play"></span>
										</div>
									</div>
								</div>
								<div class="modal fade" id="songs<?php echo $list->id_recording;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											
											<div class="modal-body">
												
												<div class="row">
													<div class="col">
														<div class="home_content">
															<div class="home_title"><strong><?php echo $list->nama_playlist ?><span>.</span></strong></div>
															<div class="home_text"><p><?php echo $list->description_playlist ?></p></div>
														</div>
													</div>
												</div>	
												<div class="row">
													<div class="col-lg-12">
														<div class="details_content">
															<div class="details_name"><strong>Chapter <?php echo $list->chapter_playlist ?></strong></div>
															<div class="details_text">
																<p><?php echo $list->description_recording ?></p>
															</div>
															<!-- In Stock -->
															<div class="in_stock_container">
																<div class="availability"><strong>Duration:</strong></div>
																<span><?php echo $list->duration_recording.' minutes' ?></span>
															</div>
															

															<!-- Share -->
															<div style = "margin-top:20px">
																<audio controls style = "width: 100%">
																	<source src="<?php echo base_url().'assets/audio/'.$list->file_recording ?>" type="audio/mpeg">
																</audio>
															</div>
														</div>
													</div>
												</div>
												
											</div>
										</div>
									</div>
								</div>
								<?php
								}
								?>
							</div>
							<div class = "row">
								<a href = "<?php echo base_url();?>welcome/login" class = "btn btn-outline btn-light" style = "margin:auto">LAUNCH</a>
							</div>
						</div>
					</div>
				</div>
				<div class = "row">
				</div>
			</div>
		</section>
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
