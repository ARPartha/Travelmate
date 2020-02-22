<?php
	
	if(!isset($_SESSION))
	{
		session_start();
	}
	include("../api/connection.php");

	$username= $_POST['Username'];
	$phone_number= $_POST['Phone_number'];
	$email= $_POST['Mail'];
	$pass= $_POST['Password'];
	$gender= $_POST['Gender'];
	

			$sql= "SELECT * FROM user WHERE email= '$email' ";
		
			$result=$con-> query($sql);
			if(mysqli_num_rows ( $result )>0){
			while ($row = mysqli_fetch_assoc($result)) {
				$_SESSION['userid']=$row['user_id'];
				$_SESSION['username']=$username;

			  }
			  echo "<script>alert('User already exist!!!! please login'); window.location.href = 'login.php';</script>";
			}
			else{
				$sql = "INSERT INTO user(u_name,phone,email,pass,gender)
				VALUES ('$username','$phone_number','$email','$pass','$gender');";
			   $con->query($sql);
			  
			   header("location:../index.php");
   
   
			}
			  echo $_SESSION['userid'];
			 
			
	?>
