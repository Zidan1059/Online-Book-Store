<?php
include "db_connect.php";
include "one.html";
$conn = OpenCon();



$sql ="SELECT * from package";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) {
	echo "<table border='2'>
  <tr>
    <th>p_id</th>
    <th>p_price</th>
    <th>p_duration</th>
  </tr>";
	while ($row= mysqli_fetch_assoc($result)) {
	echo "<tr><td>".$row["p_id"]."</td><td>".$row["p_price"]."</td><td>".$row["p_duration"]."</td>";
	}
	echo "</table>";
}
else {
echo "0 result";
}

?>