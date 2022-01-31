<?php
$d_location = $_POST ['d_location'];
$d_city = $_POST ['d_city'];

    //create connection
    $conn = new mysqli('localhost','root','','rideshare');
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
    
   $stmt=$conn->prepare ("INSERT INTO `drop off location`(d_location,d_city) VALUES(?,?)"); 
      $stmt->bind_param("ss", $d_location, $d_city);
      $stmt->execute();
      echo"yoyo";
     }
     $stmt->close();
     $conn->close();
?>

