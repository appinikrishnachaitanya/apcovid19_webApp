 <?php

session_start();
if ($_SESSION['adminname']=="")
{
	header("location:index.php");
}
       include('../includes/dbconfig.php');
       $selectquery="SELECT * FROM blog_users";
       $selectdb=mysqli_query($dbconnect,$selectquery);
       $count=mysqli_num_rows($selectdb);
       echo $count;

       ?>