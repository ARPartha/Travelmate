<?php
   if(!isset($_SESSION))
   {
	   session_start();
   }
   include("connection.php");
   $name  = $_GET['name'];
   $user  = $_SESSION['username'];
   $id    = $_SESSION['userid'];
   $date  = $_GET['date'];
   $sql= "INSERT INTO booking(hotel_name, customer_name,booking_date,customer_id ) VALUES ('$name','$user','$date','$id')";
   $con->query($sql);
   echo "<script>alert('sucessfully Booked');  window.location.href = '../index.php';</script>";
	

?>