<?php 
include("rsseventh.php");
$customer_id = $_POST['customer_id'];
$customer_name = $_POST['customer_name'];
$present_address = $_POST['present_address'];
$contact_number = $_POST['contact_number'];
$password = $_POST['password'];
    //create connection
    $conn = new mysqli('localhost','root','','ebook');
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
    
   $stmt=$conn->prepare("insert into `customer`(customer_id,customer_name,present_address,contact_number, password)
     values(?,?,?,?,?)");
      $stmt->bind_param("sssss", $customer_id,$customer_name,$present_address,$contact_number, $password);
      $stmt->execute();
     }
     $stmt->close();
     $conn->close();
?>