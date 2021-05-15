<?php
include('session.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    
     <link rel="stylesheet" type="text/css" href="../assets/css/navbar.css">
       
 
    <title>Search</title>
    
  
  
  </head>
  <body>
   
   <?php include('navbar.php'); ?>
   <div class="container">
   <div class="row justify-content-center">
   <div class="col-lg-6">
   <div class="card mt-5 border-info">
   <div class="card-body">
   <div class="alert alert-warning" role="alert">
   <h5 class="text-center text-dark">ENTER REGNO/MOBILENO/ADHAARNO</h5>
   </div>
   <form class="form-group" action="searchfunc.php" method="POST">
    <select name="category" class="form-control">
      
      <option value="doctor">Doctor</option>
      <option value="speaker">Speaker</option>
      <option value="donor">Donor</option>
      <option value="deliveryboy">deliveryboy</option>
    </select>
    
    <input type="text" class="form-control mt-3" name="search" placeholder="REGNO" value="" id="">

    <input type="submit" name="submit_btn" value="Search" class="btn btn-primary mt-3 ">
  

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