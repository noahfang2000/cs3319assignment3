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
<h1>Welcome to the TERROR DOME</h1>
<h2>List of Bustrips</h2>
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

<h2>Edit the Bustrip Database</h2>
<form action = "editbustrip.php" method="post">
	Trip id of the trip you would like to edit:(Required)<br>
	<input text="text" name ="tripid" required><br>
	
	<p>What would you like to edit:(Please Fill Only one in at a time)</P>
	Trip Name:<br>
	<input type="text" name="edittripname" id="edittripname"><br>

	Start Date:<br>
	<input type="date" id="editstartdate" name="editstartdate"><br>
	End Date:<br>
	<input type="date" id ="editenddate" name="editenddate"><br>

	Trip Image:<br>
	<input type ="text" name"editimage" id="editimage"><br>
	<br>
	<input type="submit" value="Submit">
</form>


<h2>Delete a Bustrip</h2>
<form action="" method="post">
	<select name="deletebustrip" id="deletebustrip">
 	
	<option value="1">Select Here</option>
	<?php
 	include "optionbustrip.php";
	?>
	
	</select>
	<br>
	<input type="submit" value="Submit">
</form>
<hr>

<?php
if (isset($_POST['deletebustrip'])) {
 include "connectdb.php";
 include "deletebustrip.php";
}
?> 

<h2>Add a new Bustrip</h2>
<form action="addbustrip.php" form="post"> 
What is the tripid:<input type="number" name = "newtripid"><br>
What is the tripname:<input type = "text" name="newtripname"><br>
What is the start date:<input type ="date" name="newstartdate"><br>
What is the end date: <input type ="date" name ="newenddate"><br>
Which country is this trip going to:<input type ="text" name="newcountry"><br>
Which bus is the trip taking:
	<select name="newbus">
	<option value="1">Select Here</option>
	<?php
	include "optionassignedbus.php";
	?>
	</select><br>
Is there a trip picture:<input type="text" name="newurlimage"><br>
<input type="submit" value="Submit">
</form> 



</body>
</html>
