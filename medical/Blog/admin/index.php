<?php
session_start();
include('../includes/dbconfig.php');

if (isset($_POST['login_btn']))
{
  
  $email= mysqli_real_escape_string($dbconnect,$_POST['username']);
  $password = mysqli_real_escape_string($dbconnect,$_POST['password']);
 
  $adminquery="SELECT * FROM blog_admin where email='$email'";
  $adminresult=mysqli_query($dbconnect,$adminquery);
  $admincount=mysqli_num_rows($adminresult); 
  $admindata=mysqli_fetch_assoc($adminresult);
  if ($admincount>0)
     {    
          $dbadmin=$admindata['password'];   
          $adminpass=password_verify($password, $dbadmin);
      

  if($adminpass)
 {

  $_SESSION['adminname']=$admindata['email']; 
  header("location:dashboard.php");
 }

 
  } 

 else 
 {
   echo '<h1 style="color:red; text-align:center">Check Your Details</h1>';
 }



}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    
    <title>Login</title>
  </head>
  <body>
 
    <div class="container">
      <div class="row justify-content-center">
       
      <div class="card mt-5">
        <div class="card-body">
          <h3 class="text-center text-info">Login here</h3>
          <hr>
          
          <form action="" method="POST" class="form-group">
           
          <label for="name">username:</label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-user"></i></div>
         </div>
         <input type="text" class="form-control" id="name" name="username" placeholder="@gmail.com">
         </div>


         
          <label for="pass">Password:</label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-lock"></i></div>
         </div>
         <input type="password" class="form-control" id="pass" placeholder="****" name="password">
         </div>
   
         
          <input type="submit" class="btn btn-lg btn-block btn-primary" value="Login" name="login_btn">
          <hr>
          
          </form>
        </div>
    
    </div>
  </div>
      </div>
   
  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="../js/clean-blog.min.js"></script>

    
  </body>
</html>