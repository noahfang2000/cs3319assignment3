<?php 
$dbustrip = $_POST["deletebustrip"];
$query = "DELETE FROM bustrip WHERE tripid=".$dbustrip;
echo $query . "<br>";
if (!mysqli_query($connection,$query)) {
	die ("Error while trying to delete bustrip". mysqli_error($connection));
} 
else {
 header('Location: website.php');
 exit;
}
?>
