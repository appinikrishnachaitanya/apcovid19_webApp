<?php
session_start();
include('includes/dbconfig.php');

if (isset($_POST['login_btn']))
{
  
  $email= mysqli_real_escape_string($dbconnect,$_POST['username']);
  $password = mysqli_real_escape_string($dbconnect,$_POST['password']);
 
  $adminquery="SELECT * FROM ashaworkers_admin where email='$email'";
  $adminresult=mysqli_query($dbconnect,$adminquery);
  $admincount=mysqli_num_rows($adminresult); 
  $admindata=mysqli_fetch_assoc($adminresult);
  if ($admincount>0)
     {    
          $dbadmins=$admindata['password'];   
          $adminpass=password_verify($password, $dbadmins);
      


if($adminpass)
 {

  $_SESSION['adminname']=$admindata['email'];
  $_SESSION['username']=$admindata['fname'];
  $_SESSION['adminid']=$admindata['userid']; 
  header("location:dashboard.php");
 }

 else
 {

   echo '<div class="container">
        <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="alert alert-danger mt-3" role="alert">
        <h5 class="text-center">Invalid Username or Password</h5>
        </div>
        </div>
        </div> 
        </div>

  ';


 }

}

 else 
 {
    echo '<div class="container">
        <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="alert alert-danger mt-3" role="alert">
        <h5 class="text-center">Invalid Username or Password</h5>
        </div>
        </div>
        </div> 
        </div>

  ';
  
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
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/login.css">
    
    <title>Login</title>
  </head>
  <body>
 
    <div class="container">
      <div class="row justify-content-center">
       <div class="col-md-8">
      <div class="card mt-5">
        <div class="card-body">
          <h3 class="text-center text-info">Login here</h3>
          <h5 class="text-center text-success">Health Workers</h5>
          <hr>
          
          <form action="" method="POST" class="form-group">
           
          <label for="name">username:</label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-user"></i></div>
         </div>
         <input type="email" class="form-control" id="name" name="username" placeholder="@gmail.com">
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
    </div>

   
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
  </body>
</html>