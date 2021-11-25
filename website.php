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
<h1>These are all the bustrips </h1>

<!-- List Bustrips -->
<form action="/getbustrips.php">
	<p>List Bustrips</p>
	<input
<?php
include 'getbustrips.php';
?>
</body>
</html>
