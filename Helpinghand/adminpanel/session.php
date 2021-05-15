<?php
session_start();
$id=$_SESSION['adminid'];

if ($_SESSION['adminid']=="")
{
	header("location:login.php");
}



?>