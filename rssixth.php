<?php
include "rsconnect.php";
include "one.html";
$conn = OpenCon();

$sql ="SELECT * from programming";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) {
	echo "<table border='3' width='70%'>
  <tr>
    <th width='10%'>ISBN</th>
    <th width='10%'>author_name</th>
    <th width='10%'>published_year</th>
    <th width='10%'>edition</th>
    <th width='10%'>book_title</th>
    <th width='10%'>price</th>
    <th width='10%'>publisher</th>
  </tr>
  </table>";
	while ($row= mysqli_fetch_assoc($result)) {
	echo "<table border='3' style=\"width:70%\"><tr><td width='10%'>".$row["ISBN"]."</td><td width='10%'>".$row["author_name"]."</td><td width='10%'>".$row["published_year"]."</td><td width='10%'>".$row["edition"]."</td><td width='10%'>".$row["book_title"]."</td><td width='10%'>".$row["price"]."</td><td width='10%'>".$row["publisher"]."</td></table>";
	}
}
else {
echo "0 result";
}
?>