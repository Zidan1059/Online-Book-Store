<?php
$customer_id = $_POST['customer_id'];
$ISBN = $_POST['ISBN'];
    //create connection
    $conn = new mysqli('localhost','root','','ebook');
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
    
   $stmt=$conn->prepare("insert into `bookorder`(`customer_id`,`ISBN`)
     values(?,?)");
      $stmt->bind_param("ss", $customer_id, $ISBN );
      $stmt->execute();
      echo "New record inserted sucessfully";
     }
     $stmt->close();
     $conn->close();
?>