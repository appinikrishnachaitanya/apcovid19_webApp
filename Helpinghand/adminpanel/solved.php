<?php
include('session.php');
include('../includes/dbconfig.php');
$id=$_GET['id'];
$status="SOLVED";
$updatedb="UPDATE helpinghands_queries SET status='$status' WHERE id='$id'";
$updatecon=mysqli_query($dbconnect,$updatedb);
if ($updatedb)
{
	header("location:viewqueries.php");
}

else
{
	echo "FAIL";
}

?>