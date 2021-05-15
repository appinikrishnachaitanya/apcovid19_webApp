<?php
session_start();
$fid=$_SESSION['foodid'];
if($fid=="")
{
	header("location:index.php");
}

?>