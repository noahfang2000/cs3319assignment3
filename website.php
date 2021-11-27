<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href ="websitestyles.css">
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

<!-- This just lists a table of bustrips  -->
<?php
include 'listbustrips.php';
?>

<!-- This section allows user to hit radio buttons and biew bustrips in different orders -->
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

<!-- Allows user to edit different values in bustrips, only one at a time -->
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

<!-- Allow user to delete bustrip -->
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


<!-- allow user to add bustrips  -->
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

<br>

<!-- View bustrips basedon country (does not work)  -->
<h2>Select Country and View Bustrips</h2>
<form action="viewcountries.php" form="post">
<select name="viewcountry">
<option value="1">Select Here</option>
<?php
include "viewcountrybustrips.php";
?>
</select><br>
<input type="submit" value="Submit">
</form>

<h2>Select Passenger and View Bookings</h2>
<form>         
	<select name="passenger">
        <option value="1">Select Here</option>
        <?php
        include "selectpassenger.php";
        ?>
        </select><br>
	<input type="submit" value="Submit">
</form>
<h2> Delete Bookings</h2> 
<form>
        <select name="passenger">
        <option value="1">Select Here</option>
        <?php
        include "selectpassenger.php";
        ?>
        </select><br>
        <input type="submit" value="Submit">

<!-- Hey if you got to this point of code thanks haha, alot of my things dont work, php is brutal :) -->
</body>
</html>
