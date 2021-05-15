<?php
session_start();
if ($_SESSION['adminname']=="")
{
  header("location:index.php");
}

include("../includes/dbconfig.php");
$id=$_GET['id'];
$del="DELETE FROM blog_post WHERE id='$id'";
$delquery=mysqli_query($dbconnect,$del);

if($delquery)
{

	echo '<h2 style="color:green; text-align:center;">Successfully,deleted</h2>';
	header("refresh: 1; url = viewposts.php"); 
    
}

else
{
	echo "Fail";
}


?>