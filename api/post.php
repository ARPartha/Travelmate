<?php
   if(!isset($_SESSION))
   {
       session_start();
   }
    
   include("connection.php");
   $location= $_POST['location'];
   $s_date  = $_POST['s_date'];
   $e_date  = $_POST['e_date'];
   $user_id = $_SESSION['userid'];
   $user_name=$_SESSION['username'];  	
   
   $check_sql="SELECT * FROM post WHERE user_id='$user_id' AND user_name='$user_name' AND place='$location' AND s_date='$s_date' AND e_date='$e_date'";
  
   $result= $con->query($check_sql);
  
   if(mysqli_num_rows ( $result )>0){
      echo "<script>alert('Post already exist!!!!'); window.location.href = '../index.php';</script>";
   }
   else{


   $sql= "INSERT INTO post(user_id,user_name,place,s_date,e_date) VALUES('$user_id','$user_name','$location','$s_date','$e_date')"; 
   
   $con->query($sql);
  
    echo "<script>alert('Sucessfully posted');  window.location.href = '../index.php';</script>";
   }
?>