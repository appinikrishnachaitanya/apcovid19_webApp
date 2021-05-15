<?php
include('session.php');
include('includes/dbconfig.php');
$id=$_GET['regno'];
$status="NEGATIVE";
$updatedb="UPDATE ashaworkers SET status='$status' WHERE regno='$id'";
$updatecon=mysqli_query($dbconnect,$updatedb);
if ($updatedb)
{
	header("location:viewpatients.php");
}

else
{
	echo "FAIL";
}

?>