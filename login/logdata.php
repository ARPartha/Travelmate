<?php
	
	if(!isset($_SESSION))
	{
		session_start();
	}
	include("../api/connection.php");
	$email= $_POST['Mail'];
	$pass= $_POST['pass'];

	$sql= "SELECT * FROM user WHERE email='$email'  AND pass='$pass'";
	
	$con->query($sql);
	
	$result=$con-> query($sql);
	//echo $sql;
	//die();
	$row= mysqli_fetch_assoc($result);
	//$_SESSION['username']= $row['Username'];
	$_SESSION['username']=$row['user_name'];
	$_SESSION['userid']=$row['user_id'];
	
	echo $_SESSION['username'];
	if($_SESSION['username']!=''){
		header("location:../index.php");
	}
	else{
		
		 echo "<script> alert('Wrong Username or password');
			 window.location.href = 'login.php';
 		      </script>";
	}

?>