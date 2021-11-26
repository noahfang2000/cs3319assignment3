<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
<meta charset="utf-8">
<title>Look at all these bustrips</title>
</head>
<body>

<!-- Connect to DB --> 
<?php
include 'connectdb.php';
?>

<h1>List of Bustrips</h1>
<?php
include 'listbustrips.php';
?>

<h2>View ordered list of Bustrips</h2>
<form action="getbustrips.php" method="post">
	<p>Order by: </p>	
	<input type = "radio" id = "tripname" name="order" value="tripname">
	<label for="tripname">Trip Name</label><br>
	<input type = "radio" id = "country" name="order" value="country">
	<label for="country">Country</label><br>
	
	<p>Sort by: </p>
	<input type = "radio" id = "ascending" name="sort" value="ASC">
	<label for="ascending">Ascending</label><br>
	
	<input type = "radio" id = "descending" name="sort" value="DESC">
	<label for="descending">Descending</label><br>
	
	<input type="submit" value="Submit">
</form>

    




</body>
</html>
