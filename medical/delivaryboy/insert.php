<?php
include('session.php');
$pid=$_GET['pid'];
$fid=$_GET['fid'];
include("includes/dbconfig.php");
$insertquery="INSERT INTO fooddelivery_success(patientid,deliveryboy_id) VALUES('$pid','$fid')";
$insertdb=mysqli_query($dbconnect,$insertquery);

if($insertdb)
{
	header("location:dashboard.php");
}


?>