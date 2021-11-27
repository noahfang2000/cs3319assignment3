<?php
$query ="select * FROM bus";
$result = mysqli_query($connection,$query);
 if (!$result) {
 die("databases query failed.");
 }
 while ($row = mysqli_fetch_assoc($result)) {
 echo "<option value=". $row[licenseplate] . ">" . $row[licenseplate] . "</option>";
 }
 mysqli_free_result($result);
?>

