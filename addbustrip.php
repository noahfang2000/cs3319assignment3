<?php
include'connectdb.php';
$newtripid =$_["newtripid"];
$newtripname=$_["newtripname"];
$newstartdate=$_["newstartdate"];
$newenddate=$_["newenddate"];
$newcountry=$_["newcountry"];
$newbus=$_["newbus"];
$newurl=$_["newurlimage"];

$query="INSERT INTO bustrip(tripid,tripname,startdate,enddate,country,assignedbus,urlImage) VALUES (?,?,?,?,?,?,?)";
$stmt=$connection->prepare($sql);
$stmt->bind_param("issssss",$newtripid,$newtripname,$newstartdate,$newenddate,$newcountry,$newbus,$newurl);
$stmt->execute();

?> 
