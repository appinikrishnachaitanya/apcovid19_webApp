<?php
 include('session.php');

include("../includes/dbconfig.php");
$id=$_GET['regno'];

$cat=$_GET['category'];

$status="REJECTED";

if ($cat=="doctor")
{
	$updatequery="UPDATE helpinghands_doctors SET status='$status' WHERE regno='$id'";
    $updatedb=mysqli_query($dbconnect,$updatequery);

    if($updatedb)
    {
    	header("location:doctor.php");
    }

    else
    {
    	echo "Fail";
    }

}

if ($cat=="delivaryboy")
{
    $updatequery="UPDATE helpinghands_delivaryboys SET status='$status' WHERE regno='$id'";
    $updatedb=mysqli_query($dbconnect,$updatequery);

    if($updatedb)
    {
        header("location:delivaryboy.php");
    }

    else
    {
        echo "Fail";
    }

}


if ($cat=="speaker")
{
    $updatequery="UPDATE helpinghands_speakers SET status='$status' WHERE regno='$id'";
    $updatedb=mysqli_query($dbconnect,$updatequery);

    if($updatedb)
    {
        header("location:speaker.php");
    }

    else
    {
        echo "Fail";
    }

}

if ($cat=="donor")
{


    $updatequery="UPDATE helpinghands_donors SET status='$status' WHERE regno='$id'";
    $updatedb=mysqli_query($dbconnect,$updatequery);

    if($updatedb)
    {
        header("location:donor.php");
    }

    else
    {
        echo "Fail";
    }

}



?>