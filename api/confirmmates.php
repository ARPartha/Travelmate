<?php

    if(!isset($_SESSION))
    {
        session_start();
    }
    include("connection.php");    
    
     $place= $_GET['place'];
     $mate= $_GET['mate_id'];
     $date= $_GET['dates'];
     
     $client= $_SESSION['userid'];
     

     $sql= "INSERT INTO mates(mate_id,client_id,place,s_date) VALUES ('$mate','$client','$place','$date')";
        
     $con->query($sql);
     
      





?>