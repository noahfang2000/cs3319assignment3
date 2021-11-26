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
<h1>Here are the bustrips ordered as you ordered</h1>


<?php
$order = $_POST["order"];
$sort = $_POST["sort"];
if ($order =="tripname"){
	if($sort == "ASC"){
		 $query = "SELECT * FROM bustrip ORDER BY tripname ASC";
	}
	if($sort == "DESC"){
		 $query = "SELECT * FROM bustrip ORDER BY tripname DESC";
	}
}
if ($order == "country"){
	if($sort =="ASC"){
		$query = "SELECT * FROM bustrip ORDER BY country ASC";
	}
	if($sort =="DESC"){
		$query = "SELECT * FROM bustrip ORDER BY country DESC";
	}
}

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
