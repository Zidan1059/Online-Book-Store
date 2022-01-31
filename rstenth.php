<?php
include "rsconnect.php";
$conn = OpenCon();

$sql ="SELECT * from others";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) {
	echo "<table border='3'>
  <tr>
    <th>ISBN</th>
    <th>author_name</th>
    <th>published_year</th>
    <th>edition</th>
    <th>book-title</th>
    <th>price</th>
    <th>publisher</th>
  </tr>
  </table>";
	while ($row= mysqli_fetch_assoc($result)) {
	echo "<table border='3' style=\"width:600px\"><tr><td>".$row["ISBN"]."</td><td>".$row["author_name"]."</td><td>".$row["published_year"]."</td><td>".$row["edition"]."</td><td>".$row["book-title"]."</td><td>".$row["price"]."</td><td>".$row["publisher"]."</td>";
	}
}
else {
echo "0 result";
}
?>