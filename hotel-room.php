<!DOCTYPE HTML>
<html>
	<head>
	<?php
		  include 'header.php';
		  if(!isset($_SESSION))
		  {
		      session_start();
			 
		  }
		?>	
	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
	<?php
			 include 'nav.php';
		?>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/cover-img-4.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Hotel Overview</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div class="colorlib-wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="row">
							<div class="col-md-12">
								<div class="wrap-division">
									<div class="col-md-12 col-md-offset-0 heading2 animate-box">
										<h2>Hotels</h2>
									</div>
									<div class="row">
										<?php
											include("api/connection.php");
											$location= $_POST['location'];
											$s_date  = $_POST['s_date'];
											$e_date  = $_POST['e_date'];
											
											$check_sql="SELECT * FROM  hotels  WHERE  hotel_location='$location' AND check_in<='$s_date' ";
											$result = mysqli_query($con, $check_sql);
		  									 
											if(mysqli_num_rows ( $result )>0){
							   
												while ($row= mysqli_fetch_array($result)) {
													$name  = $row['hotel_name'];
													$cost = $row['cost'];
													 
													echo "    <div class='col-md-12 animate-box'>
													<div class='room-wrap'>
														<div class='row'>
															<div class='col-md-6 col-sm-6'>
																<div class='desc'>
																	<h2>' $name '</h2>
																		<p class='price'><span>'  $cost tk'</span> <small>/ night</small></p>
																		 
																		  <a href='api/booking.php?name=$name&amp;date=$s_date'; class='btn btn-primary'>Book Now!</a>
																</div>
															</div>
														</div>
													</div>
												</div>
												"; 
									
								}
							}
								else{
								 	echo "<script>alert('NO DATA FOUND!!! post it');  window.location.href = 'index.php';</script>";
									}					

										?>
										
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- SIDEBAR-->
					</div>
			</div>
		</div>

	
		<div id="colorlib-subscribe" style="background-image: url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Sign Up for a Newsletter</h2>
						<p>Sign up for our mailing list to get latest updates and offers.</p>
						<form class="form-inline qbstp-header-subscribe">
							<div class="row">
								<div class="col-md-12 col-md-offset-0">
									<div class="form-group">
										<input type="text" class="form-control" id="email" placeholder="Enter your email">
										<button type="submit" class="btn btn-primary">Subscribe</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<?php
		include 'footer.php';
		 ?>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

