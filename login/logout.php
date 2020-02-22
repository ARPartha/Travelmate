<?php
    include('admin_area/includes/connection.php');
	session_start();
	unset($_SESSION['username']);
	session_destroy();
	header("Location: ../index.php");
	
	$sql= ("TRUNCATE TABLE cart");
	$con->query($sql);
?>


