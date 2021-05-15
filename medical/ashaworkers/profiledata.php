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
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    
   
       
 
    <title>Profile</title>
    
    <style type="text/css">
       .card
       {
         border-radius: 20px;
         
       }

       
    </style>

  
  </head>
  <body>
 

 <div class="container">
 
  <div class="alert alert-info mt-5" role="alert">
  
  <h5 class="text-center">Your Profile</h5>

  </div> 
 

  <div class="row">
   <div class="col">
  <div class="card mt-3" style="border-top: 10px solid green;">
   <div class="card-body">
   
   <?php
   include("includes/dbconfig.php");
   $id=$_SESSION['adminid'];

   $selectquery="SELECT * FROM ashaworkers_admin WHERE userid = '$id' ";
   $selectdb=mysqli_query($dbconnect,$selectquery);
   $selectdata=mysqli_fetch_assoc($selectdb);
   ?>
  

  <div class="row">
   <div class="col">
      <p>Name:<?php echo $selectdata['fname'];?></p>
  </div>
</div>

 <div class="row">
   <div class="col">
      <p>YourID:<?php echo $selectdata['userid'];?></p>
  </div>
</div>


 <div class="row">
   <div class="col">
      <p>Mail:<?php echo $selectdata['email'];?></p>
  </div>
</div>

 <div class="row">
   <div class="col">
      <p>Mobileno:<?php echo $selectdata['phoneno'];?></p>
  </div>
</div>

 <div class="row">
   <div class="col">
      <p>Wardno:<?php echo $selectdata['wardno'];?></p>
  </div>
</div>
 <div class="row">
   <div class="col">
      <p>District:<?php echo $selectdata['district'];?></p>
  </div>
</div>
 <div class="row">
   <div class="col">
      <p>City:<?php echo $selectdata['city'];?></p>
  </div>
</div>
 <div class="row">
   <div class="col">
      <p>Mandal:<?php echo $selectdata['mandal'];?></p>
  </div>
</div>


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
