<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>The Bustrips</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>These are the bustrips from the selected country</h1>


<?php
$country =$_POST["viewcountry"]; 
$query = "SELECT *FROM bustrip WHERE country =".$country;

$result = mysqli_query($connection,$query);


if (!$result) {
    die("databases query failed.");
}
echo "<table><tr><th>TripId</th><th>TripName</th><th>Startdate</th><th>Enddate</th><th>Country</th><th>Assignedbus</th><th>Url Image</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {  
?>
	<tr>
	<td> <?php echo $row["tripid"]   ?> </td>
	<td> <?php echo $row["tripname"] ?></td>
	<td> <?php echo $row["startdate"]?></td>
	<td> <?php echo $row["enddate"]  ?></td>
	<td> <?php echo $row["country"]  ?></td>
	<td> <?php echo $row["assignedbus"]?></td>
	<td> <img src= "<?php echo $row["urlImage"];?>"/ height="60" width="60"> </td>
	</tr>";
<?php
}
echo"</table>";
mysqli_free_result($result);
?>
