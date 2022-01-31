<html>
<body>	
<form action="#" method="post">
    Pick Up Location: <input type="text" name = "p_location">
    City: <input type="text" name = "p_city">
    <input type="submit" />
</form>
</body>	
</html>

<?php
$username = "root";
$password = "";
$database = "rideshare";
 
$mysqli = new mysqli("localhost", $username, $password, $database);
 
// Don't forget to properly escape your values before you send them to DB
// to prevent SQL injection attacks.
 
$p_location = $mysqli->real_escape_string($_POST['p_location']);
$p_city = $mysqli->real_escape_string($_POST['p_city']);

    $query= "insert into pick_up_location(p_location, p_city) values('$p_location','$p_city')";
    $mysqli->query($query);
    $mysqli->close();
?>