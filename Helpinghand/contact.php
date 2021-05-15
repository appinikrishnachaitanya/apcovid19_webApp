<?php
session_start();
include('includes/dbconfig.php');
if (isset($_POST['send_btn']))
{
  $status="Pending";
  $date=date("Y-m-d");
  $name=mysqli_real_escape_string($dbconnect,$_POST['name']);
  $mail=mysqli_real_escape_string($dbconnect,$_POST['mail']);
  $number=mysqli_real_escape_string($dbconnect,$_POST['number']);
  $city=mysqli_real_escape_string($dbconnect,$_POST['place']);
  $msg=mysqli_real_escape_string($dbconnect,$_POST['msg']);

  $insertquery="INSERT INTO helpinghands_queries(name,mail,number,city,msg,status,date) VALUES('$name','$mail','$number','$city','$msg','$status','$date')";
  $insertresult=mysqli_query($dbconnect,$insertquery);

  if ($insertresult)
  {
 
     echo '<div class="container">
        <div class="row justify-content-center">
        <div class="col">
        <div class="alert alert-success mt-3" role="alert" id="printbtn">
        <h5 class="text-center">Successfully Sended </h5>
        </div>
        </div>
        </div> 
        </div>

  ';
}

else 
{
  echo "Fail";
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
   
   
    <link href="assets/css/dashboard.css" rel="stylesheet">
    <link href="assets/css/navbar.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/service.css">   
 
    <title>Contact</title>
    

  
  </head>
  <body>
  <?php include('navbar.php'); ?>
<div class="container">
<div class="row justify-content-center">
  <div class="col">
	<div class="card mt-5 mb-5" style="background-color:#EEEED1; ">
		<div class="card-body" >

			<h5 class="text-center">Contact Us</h5>
			<hr>
        
         <form action="" method="POST" class="form-group">

        <label for="user">Name:</label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-user"></i></div>
         </div>
         <input type="text" class="form-control" id="user" placeholder="name" name="name">
         </div>
     

         <label for="email">Email</label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-user"></i></div>
         </div>
         <input type="email" class="form-control" id="email" placeholder="@gmail.com" name="mail">
         </div>


         <label for="phone">Phone Number</label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-user"></i></div>
         </div>
         <input type="number" class="form-control" id="phone" placeholder="9098791234" name="number">
         </div>


         <label for="city">City:</label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-user"></i></div>
         </div>
         <input type="text" class="form-control" id="city" placeholder="place" name="place">
         </div>

          
         <label>Message:</label>
         <textarea name="msg" cols="50" rows="4" class="form-control">
         	
         </textarea>


        <input type="submit" value="Send" name="send_btn" class="btn btn-success mt-5">

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