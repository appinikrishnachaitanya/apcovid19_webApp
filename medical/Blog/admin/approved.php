<?php
session_start();
if ($_SESSION['adminname']=="")
{
	header("location:index.php");
}
$id= $_GET['id'];
include('../includes/dbconfig.php');
$status="APPROVED";
$update= "UPDATE blog_users SET status='$status' WHERE id ='$id' ";
$updatedb=mysqli_query($dbconnect,$update);

if($updatedb)
{
	header("location:userblogs.php");
}

else
{
	echo "Fail";
}