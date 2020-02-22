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
		<link rel="stylesheet" href="css/popup.css">
	
	
	<style>
 .popup {
    position: relative;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
	user-select: none;
	color :white;
	margin: 10px;
}

.popup:hover{
	color:green;
	 
}
/* The actual popup */

.popup .popuptext {
    visibility: hidden;
    width: 160px;
    background-color: yellow;
    color: black;
    text-align: center;
    border-radius: 6px;
    padding: 8px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
	left: 50%;
	 
    margin-left: -80px;
}


/* Popup arrow */

.popup .popuptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
	border-width: 5px;
 
    border-style: solid;
    border-color: yellow transparent transparent transparent;
}


/* Toggle this class - hide and show the popup */

.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}


/* Add animation (fade in the popup) */

@-webkit-keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

</style>
	</style>
	
	
	
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
			   	<li style="background-image: url(images/img_bg_1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Sundarbans</h1>
				   					<h2>The Sundarbans is a mangrove area in the delta formed by the confluence of Ganges, Brahmaputra and Meghna Rivers in the Bay of Bengal.</h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Somapura Mahavihara</h1>
				   					<h2>Somapura Mahavihara (Bengali: সোমপুর মহাবিহার Shompur Môhabihar) in Paharpur, Badalgachhi Upazila, Naogaon District, Bangladesh.</h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_5.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluids">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>St. Martin's Island</h1>
				   					<h2>St. Martin's Island (Bengali: সেন্ট মার্টিন্স দ্বীপ) is a small island (area only 36 km2) in the northeastern part of the Bay of Bengal, about 9 km south of the tip of the Cox's Bazar-Teknaf peninsula, and forming the southernmost part of Bangladesh. </h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_4.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Sajek Valley</h1>
				   					<h2>Sajek Valley - সাজেক ভ্যালি / মেঘের উপত্যকায় জীবন is an emerging tourist spot in Bangladesh situated among the hills of Kasalong range of mountains in Sajek union, Baghaichhari Upazila in Rangamati District.</h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>	   	
			  	</ul>
		  	</div>
		</aside>

		<div id="colorlib-reservation">
			<!-- <div class="container"> -->
			<div class="row">
					<div class="search-wrap">
						<div class="container">
							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#find"><i class="fa fa-handshake-o"></i> Find Mate</a></li>
								<li><a data-toggle="tab" href="#post"><i class="fa fa-book"></i>post</a></li>
								<li><a data-toggle="tab" href="#hotel"><i class="flaticon-resort"></i>Hotel</a></li>
							
						</div>
						<div class="tab-content">
							<div id="find" class="tab-pane fade in active">
								<!-- find mate forms  -->
								<form method="post" action="tours.php" class="colorlib-form">
				              	<div class="row">
				              	 <div class="col-md-3">
				              	 	<div class="form-group">
				                    <label for="date">Where:</label>
				                    <div class="form-field">
				                      <input type="text" id="location" name="location" class="form-control" placeholder="Search Location">
				                    </div>
				                  </div>
				              	 </div>
				                <div class="col-md-2">
				                  <div class="form-group">
				                    <label for="date">Start Date:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date"  name="s_date" class="form-control date" placeholder="Check-in date">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <div class="form-group">
				                    <label for="date">return Date:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" name="e_date"  class="form-control date" placeholder="Check-out date">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <input type="submit" name="submit" id="submit" value="Find mate" class="btn btn-primary btn-block">
				                </div>
				              </div>
							</form>
								<!-- find mate forms end -->
						 </div>
						 
						 <!-- post tours -->

				         <div id="post" class="tab-pane fade">
						      <form method="post" action="api/post.php" class="colorlib-form">
				              	<div class="row"> 
							       <div class="col-md-3">
				              	 	<div class="form-group">
				                    <label for="date">Where:</label>
				                    <div class="form-field">
				                      <input type="text" name="location" id="location" class="form-control" placeholder="Search Location">
				                    </div>
				                  </div>
				              	  </div>
				              
				                <div class="col-md-3">
				                  <div class="form-group">
				                    <label for="date">Start Date:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" name="s_date" id="date" class="form-control date" placeholder="Check-in date">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-3">
				                  <div class="form-group">
				                    <label for="date">Return Date:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" name="e_date" class="form-control date" placeholder="Check-out date">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <input type="submit" name="submit" id="submit" value="post" class="btn btn-primary btn-block">
				                </div>
				              </div>
				            </form>
						   </div>

						   <!-- post tour end -->

						   <div id="hotel" class="tab-pane fade">
						   	<form method="post" action="hotel-room.php" class="colorlib-form">
				              	<div class="row">
				              	 <div class="col-md-4">
				              	 	<div class="form-group">
				                    <label for="date">Where:</label>
				                    <div class="form-field">
				                      <input type="text" id="location" name="location" class="form-control" placeholder="Search Location">
				                    </div>
				                  </div>
				              	 </div>
				                <div class="col-md-3">
				                  <div class="form-group">
				                    <label for="date">Check-in:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" name="s_date" class="form-control date" placeholder="Check-in date">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-3">
				                  <div class="form-group">
				                    <label for="date">Check-out:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" name="e_date" class="form-control date" placeholder="Check-out date">
				                    </div>
				                  </div>
				                </div>
								 
				                <div class="col-md-2">
				                  <input type="submit" name="submit" id="submit" value="Find Hotel" class="btn btn-primary btn-block">
				                </div>
								
								<div class="popup" onclick="myFunction()"><h1>MyBookings</h1>
										<span class="popuptext" id="myPopup"> 
												<?php
													
													include("api/connection.php");
													$id= 	$_SESSION['userid'];
													$sql= "SELECT * FROM booking WHERE customer_id= $id";
													$result = mysqli_query($con, $sql);
													if(mysqli_num_rows ( $result )>0){
							   
														while ($row= mysqli_fetch_array($result)) {
														  	$name  = $row['hotel_name'];
															 
															$date= $row['booking_date'];
															echo "HotelName: $name 
																  
																  booking date: $date  
															"; 
															 

														}
													}	
													else{
														echo "No Booking";
													} 



												?>
										
										
										
										</span>
								</div>

				            </form>
						   </div>
						 </div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-tour colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Popular Destination</h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
			</div>
			<div class="tour-wrap">
				<a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/tour-1.jpg);">
					</div>
					<span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
						<h2>Athens, Greece</h2>
						<span class="city">Athens, Greece</span>
						<span class="price">$450</span>
					</span>
				</a>
				<a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/tour-2.jpg);">
					</div>
					<span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
						<h2>Family Tour in Thailand</h2>
						<span class="city">Athens, Greece</span>
						<span class="price">$450</span>
					</span>
				</a>
				<a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/tour-3.jpg);">
					</div>
					<span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
						<h2>Family Tour in Philippines</h2>
						<span class="city">Lipa, Philippines</span>
						<span class="price">$450</span>
					</span>
				</a>
				<a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/tour-4.jpg);">
					</div>
					<span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
						<h2>Family Tour in Greece</h2>
						<span class="city">Athens, Greece</span>
						<span class="price">$450</span>
					</span>
				</a>
				<a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/tour-5.jpg);">
					</div>
					<span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
						<h2>Family Tour in Greece</h2>
						<span class="city">Athens, Greece</span>
						<span class="price">$450</span>
					</span>
				</a>
				<a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/tour-6.jpg);">
					</div>
					<span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
						<h2>Family Tour in Greece</h2>
						<span class="city">Athens, Greece</span>
						<span class="price">$450</span>
					</span>
				</a>
				<a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/tour-7.jpg);">
					</div>
					<span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
						<h2>Family Tour in Greece</h2>
						<span class="city">Athens, Greece</span>
						<span class="price">$450</span>
					</span>
				</a>
				<a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/tour-8.jpg);">
					</div>
					<span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
						<h2>Family Tour in Greece</h2>
						<span class="city">Athens, Greece</span>
						<span class="price">$450</span>
					</span>
				</a>
			</div>
		</div>

    	<div id="colorlib-intro" class="intro-img" style="background-image: url(images/cover-img-1.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 animate-box">
						<div class="intro-desc">
							<div class="text-salebox">
								<div class="text-rights">
									<h3 class="title">Just hurry up limited offer!</h3>
									<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									<!-- <p><a href="#" class="btn btn-primary">Book Now</a> <a href="#" class="btn btn-primary btn-outline">Read more</a></p> -->
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="video-wrap">
							<div class="video colorlib-video" style="background-image: url(images/img_bg_2.jpg);">
								<a href="https://www.youtube.com/watch?v=LqmratdBFNw" class="popup-vimeo"><i class="icon-video"></i></a>
								<div class="video-overlay"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- footer -->
		<?php
		  include 'footer.php';
		?>	
		<!-- Footer end -->
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
	<script>
// When the user clicks on div, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>
	</body>
</html>

