<?php
session_start();
include("includes/dbconfig.php");


if  ($_SERVER['REQUEST_METHOD']=='POST')
{      
     
  if (empty($_POST['travelhistory']) || empty($_POST['symptoms']))
  {

  ?>

    <script type="text/javascript">
      alert("Select all fields");
    </script>

<?php

  }

  else
  {



  $var1=rand(1,9);
  $var2=rand(11,99);
  $var3=rand(11,99);
  $var4=rand(11,99);

  $regno=$var1.$var2.$var3.$var4;
  $date=date("Y-m-d");

      $name=mysqli_real_escape_string($dbconnect,$_POST['name']);
      $msg=mysqli_real_escape_string($dbconnect,$_POST['msg']);
      $phoneno=mysqli_real_escape_string($dbconnect,$_POST['phoneno']);
    
     
      $travelhistory=mysqli_real_escape_string($dbconnect,$_POST['travelhistory']);
      $symptoms=mysqli_real_escape_string($dbconnect,$_POST['symptoms']);
  
 
 $insertquery="INSERT INTO medicare_teleconsul(regno,name,phoneno,symptoms,travelhistory,msg,date) VALUES('$regno','$name','$phoneno','$symptoms','$travelhistory','$msg','$date')";
 $insertresult=mysqli_query($dbconnect,$insertquery);

 if ($insertresult)
 {
  echo '<div class="container">
        <div class="row justify-content-center">
        <div class="col-md-10">
        <div class="alert alert-success mt-3" role="alert">
        <h5 class="text-center">Successfully Registered</h5>
        </div>
        </div>
        </div> 
        </div>

  ';
  
  header("refresh:2; url=index.php");
  

 }

 else
 {
    echo "Fail"; 
 }
     


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
    <title>TeleConsultation</title>
    <link rel="stylesheet" type="text/css" href="assets/css/tele.css">

  
  </head>
  <body>
  <div class="container">
  <div class="row justify-content-center">
    <div class="col">
      <div class="card border-info mt-3">
        <div class="card-body">
          <div class="card-title">
            <h3 class="text-center">TeleConsultation</h3>
        </div>
        <hr>
         <h4 class="text-center text-success">Give Missed Call to XXXXXXX </h4>
         <hr>
         <h5 class="text-center text-info">We are here to care you!</h5>
         <hr>
         <u><h5 class="text-center text-dark">Please fill the form to recieve a call form us </h5></u>
         <form class="form-group" method="POST" action="">
          <div class="row mt-3">
           <div class="col-lg-6">
        <label for="user">Name:<span style="color: red;">*</span></label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-user"></i></div>
         </div>
         <input type="text" class="form-control" id="user" placeholder="name" name="name" required>
         </div>
     </div>

       <div class="col-lg-6">
          <label for="phone">Phone Number:<span style="color: red;">*</span></label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-phone"></i></div>
         </div>
         <input type="number" class="form-control " id="phone" placeholder="9098791234" name="phoneno" required>
         </div>
     </div>
   </div>

  <div class="row mt-3">
  <div class="col-lg-6">
  <label>Symptoms:</label>
   <select class="form-control" name="symptoms">
    <option value="" selected disabled>Select</option>
    <option>Fever</option>
    <option>Cold</option>
    <option>Breathing Difficult</option>
    <option>other</option>
  </select>
    
  </div>


      <div class="col-lg-6">
  <label>Travel History:</label>
  <select class="form-control" name="travelhistory">
    <option value="" selected disabled>Select</option>
    <option>Migrated From other State/Country</option>
    <option>Contacted Covid19 Person</option>
    <option>Recently,Moved to Containment Zone</option>
    <option>None</option>
  </select>
  </div>
</div>

<div class="row mt-3">
  <div class="col">
  <label>Message:</label>
  <textarea class="form-control" rows="4" cols="10" name="msg" required>
    
  </textarea>
</div>
</div>

 <input type="submit" name="submit_btn" value="Get a Call" class="btn btn-success btn-block mt-3">

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