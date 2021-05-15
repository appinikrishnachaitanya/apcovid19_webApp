<?php
session_start();
include("../includes/dbconfig.php");
$date=date("Y-m-d");
if ($_SESSION['adminname']=="")
{
	header("location:index.php");
}

$blogquery="SELECT * FROM blog_post";
$blogresult=mysqli_query($dbconnect,$blogquery);
$blogcount=mysqli_num_rows($blogresult);
echo $blogcount;


?>