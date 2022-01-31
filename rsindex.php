<?php

include "rsconnect.php";
$conn = OpenCon();

$sql ="SELECT * from car";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) {
	echo "<table style=\"width:50%\">
  <tr>
    <th>car_number</th>
    <th>car_name</th>
  </tr>";
	while ($row= mysqli_fetch_assoc($result)) {
	echo "<tr><td align='center'>".$row["car_number"]."</td><td align='center'>".$row["car_name"]."</td></tr>";
	}
}
else {
echo "0 result";
}
?>