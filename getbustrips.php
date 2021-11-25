<?php
$query = "SELECT * FROM bustrip";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}
echo "<table><tr><th>TripId</th><th>TripName</th><th>Startdate</th><th>Enddate</th><th>Country</th><th>Assignedbus</th><th>Url Image</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {  
   echo "<tr><td>". $row["tripid"] ."</td><td>" . $row["tripname"] ."</td><td>" .$row["startdate"]."</td><td>" 
.$row["enddate"]."</td><td>".$row["country"]."</td><td>" .$row["assignedbus"]."</td><td>" .$row["urlImage"]. "</td></tr>";
}
echo"</table>";
mysqli_free_result($result);
?>
