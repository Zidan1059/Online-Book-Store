<?php
include("rsthird_b.html");
$p_location = $_POST ['p_location'];
$p_city = $_POST ['p_city'];

    //create connection
    $conn = new mysqli('localhost','root','','rideshare');
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
    
   $stmt=$conn->prepare ("INSERT INTO `pick up location`(`p_location`,`p_city`) VALUES(?,?)"); 
      $stmt->bind_param("ss", $p_location, $p_city);
      $stmt->execute();
      
     }
     $stmt->close();
     $conn->close();
?>

