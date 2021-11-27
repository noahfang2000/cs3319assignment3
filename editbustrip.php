<?php
include 'connectdb.php';
$tripid = $_POST["tripid"];
$tripname = $_POST["edittripname"];
$startdate = $_POST["editstartdate"];
$enddate = $_POST["editenddate"];
$file = $_POST["editimage"];

if($tripname != NULL){
	$query = 'UPDATE bustrip SET tripname = "'.$tripname.'" WHERE tripid='.$tripid;
}
if($startdate != NULL){
	$query = 'UPDATE bustrip SET startdate = "'.$startdate.'" WHERE tripid='.$tripid;
}
if($enddate != NULL) {
	$query = 'UPDATE bustrip SET enddate = "'.$enddate.'" WHERE tripid='.$tripid;
}
if($file != NULL) {
	$query = 'UPDATE bustrip SET urlImage = "'.$file.'" WHERE tripid='.$tripid;
}
$result = mysqli_query($connection,$query);


if (!$result) {
    die("databases query failed.");
}
else {
 header('Location: website.php');
 exit;
 }
?>



