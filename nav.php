<?php
  if(!isset($_SESSION))
		{
    		session_start();
		}
?>
<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.php">Travelmate</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li class="active"><a href="index.php">Home</a></li>
								<!-- <li class="has-dropdown">
									<a href="tours.php">Find Mates</a>
								</li>
								<li><a href="hotels.php">Hotels</a></li> -->
								<li><a href="contact.php">Contact</a></li>

								<?php
                                
                                    if(isset($_SESSION['username']))
                                    {
										echo '<li class="has-dropdown">
										<a href="#">'.$_SESSION['username'].' </a>
										<ul class="dropdown">
										<li><a href="#">'.$_SESSION['username'].' </a></li>
										<li><a href="login/logout.php">Logout</a></li>
									</ul>
								</li>';
									}
									else{
										echo '<li class="has-dropdown">
										<a href="login/login.php">log In </a>
										<ul class="dropdown">
										<li><a href="login/login.php">Sign Up</a></li>
										<li><a href="login/login.php">Log In</a></li>
									</ul>
								</li>';
									}
								?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>