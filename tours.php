<html style="" class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths">


<head>
		<?php
		  include 'header.php';
		  if(!isset($_SESSION))
		  {
		      session_start();
			 
		  }
		  if(!isset($_SESSION['username'])){
			  echo "<script>alert('please log in!!'); window.location.href = 'login/login.php';</script>";
		  }
		?>	
<style>
		table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 100%;
		}

		td, th {
		border: 1px solid #dddddd;
		text-align: left;
		padding: 8px;
		}

		tr:nth-child(even) {
		background-color: #dddddd;
		}
</style>
	</head>
	<body>
		
	<div class="colorlib-loader" style="display: none;"></div>

	<div id="page">
	<?php
			 include 'nav.php';
		?>	
 	<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(&quot;images/img_bg_3.jpg&quot;); width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;" class="flex-active-slide">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text animated fadeInUp">
				   				<div class="slider-text-inner text-center">
				   				 	<h1>Find Mates</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	<ol class="flex-control-nav flex-control-paging"></ol><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1">Previous</a></li><li class="flex-nav-next"><a class="flex-next flex-disabled" href="#" tabindex="-1">Next</a></li></ul></div>
 
		</aside>

		<div class="colorlib-wrap">
			
		<div class="container">
				<div class="row">
					<div >
					    <table>
						<tr>
							<th>Name</th>
							<th>place</th>
							<th>Start Date</th>
							<th>End Date</th>
							<th>Confirm</th>
						</tr>
						<?php 
							include("api/connection.php");
							$location= $_POST['location'];
							$s_date  = $_POST['s_date'];
							$e_date  = $_POST['e_date'];
							
							$check_sql="SELECT * FROM post WHERE  place='$location' AND s_date <='$s_date' AND e_date >='$e_date'";
						    
							$result = $con->query($check_sql);						   
							if(mysqli_num_rows ( $result )>0){
							   
							 while ($row= mysqli_fetch_array($result)) {
								 $name  = $row['user_name'];
								 $place = $row['place'];
								 $start_date = $row['s_date'];
								 $end_date   = $row['e_date'];
								 $mate_id    = $row['user_id'];
							if($mate_id!=$_SESSION['userid']){		
								 echo "<tr>
											 <td>".$name."</td>
											 <td>".$place."</td>
											 <td>".$start_date."</td>
											 <td>".$end_date."</td>
											 <td><a href='api/confirmmates.php?place=$place&mate_id=$mate_id&dates=$start_date'><input type='button' value='Confirm'> </a></td>
									   </tr>";
						 
								}
								else {
										echo "<script>alert('NO DATA FOUND!!!');  window.location.href = 'index.php';</script>";
									}
							}
							  
							 }
							else{
						  echo "<script>alert('NO DATA FOUND!!!');  window.location.href = 'index.php';</script>";
							}
					 
						?>
						 
						</table>
					</div>
				</div>
		</div>
		<br>
		<br><br><br>
		<div id="colorlib-subscribe" style="background-image: url(&quot;images/img_bg_2.jpg&quot;); background-position: 50% -492px;" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box fadeInUp animated-fast">
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
	
		<!-- footer  -->
		<?php
		  include 'footer.php';
		?>	
		<!-- footer end -->
	<div class="gototop js-top active">
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

	


</body></html>