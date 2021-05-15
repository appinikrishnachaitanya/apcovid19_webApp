<?php
session_start();
include('includes/dbconfig.php');
$date=date("Y-m-d");
$doctorcount=0;
$donorcount=0;
$speakercount=0;
$delivaryboycount=0;

$doctortodaycount=0;
$donortodaycount=0;
$speakertodaycount=0;
$delivaryboytodaycount=0;


$countquery="SELECT * FROM helpinghands_doctors";
$countdb=mysqli_query($dbconnect,$countquery);
 while($doctordata=mysqli_fetch_assoc($countdb))
                    {
                      $doctorstatus=$doctordata['status'];
                      $doctordate=$doctordata['date'];
                      if ($doctorstatus=="CONFIRMED")
                      {
                        $doctorcount++;

                      }

                       if ($doctordate==$date)
                      {
                        $doctortodaycount++;

                      }
                    }
$countquery2="SELECT * FROM helpinghands_donors";
$countdb2=mysqli_query($dbconnect,$countquery2);
while($donordata=mysqli_fetch_assoc($countdb2))
                    {
                      $donorstatus=$donordata['status'];
                      $donordate=$donordata['date'];
                      if ($donorstatus=="CONFIRMED")
                      {
                        $donorcount++;

                      }

                       if ($donordate==$date)
                      {
                        $donortodaycount++;

                      }
                    }


$countquery3="SELECT * FROM helpinghands_speakers";
$countdb3=mysqli_query($dbconnect,$countquery3);
while($speakerdata=mysqli_fetch_assoc($countdb3))
                    {
                      $speakerstatus=$speakerdata['status'];
                      $speakerdate=$speakerdata['date'];
                      if ($speakerstatus=="CONFIRMED")
                      {
                        $speakercount++;

                      }
                       if ($speakerdate==$date)
                      {
                        $speakertodaycount++;

                      }
                    }

$countquery4="SELECT * FROM helpinghands_delivaryboys";
$countdb4=mysqli_query($dbconnect,$countquery4);
while($delivaryboydata=mysqli_fetch_assoc($countdb4))
                    {
                      $delivaryboystatus=$delivaryboydata['status'];
                      $delivaryboydate=$delivaryboydata['date'];
                      if ($delivaryboystatus=="CONFIRMED")
                      {
                        $delivaryboycount++;

                      }
                       if ($delivaryboydate==$date)
                      {
                        $delivaryboytodaycount++;

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
    <link href="assets/fontawesome/css/all.css" rel="stylesheet">
   
   
    <link href="assets/css/dashboard.css" rel="stylesheet">
    <link href="assets/css/navbar.css" rel="stylesheet">
     
 
    <title>Dashboards</title>
    

  
  </head>
  <body>
<?php include('navbar.php'); ?>
<div class="container">

  <div class="alert alert-secondary mt-5" role="alert">
    <h5 class="text-center">Dashboard</h5>
  </div>

<div class="row justify-content-center">
  <div class="col-lg-6">
<div class="card text-center mt-3" style="background-color:#E6E6FA;">
  <div class="card-header  text-dark">
   Doctors
  </div>
  <div class="card-body">
    <h3 class="mr-5"><span style="color: grey; float:left;" ><i class="fas fa-user-nurse fa-3x"></i></span><?php echo$doctorcount; ?></h3>

  </div>
  <div class="card-footer text-dark">
    We are Happie To See You!
  </div>
</div>
</div>
  <div class="col-lg-6">
<div class="card text-center mt-3" style="background-color:#FAFAD2;">
  <div class="card-header  text-dark">
   Donors
  </div>
  <div class="card-body">
 <h3 class="mr-5"><span style="color: green; float:left;" ><i class="fas fa-hand-holding-usd fa-3x"></i></span><?php echo$donorcount; ?></h3>
  </div>
  <div class="card-footer text-dark">
    We are Happie To Donate!
  </div>
</div>
</div>    

</div>
<div class="row justify-content-center">
  <div class="col-lg-6">
<div class="card text-center mt-3" style="background-color:#ccffcf; ">
  <div class="card-header  text-dark">
   Speaker
  </div>
  <div class="card-body">
 <h3 class="mr-5"><span style="color: brown; float:left;" ><i class="fas fa-chalkboard-teacher fa-3x"></i></span><?php echo$speakercount; ?></h3>
  </div>
  <div class="card-footer text-dark">
   We are Here To Create Awareness!
  </div>
</div>
</div>
  <div class="col-lg-6">
<div class="card text-center mt-3" style="background-color: #f7d2d2;">
  <div class="card-header  text-dark">
   Delivary Boy
  </div>
  <div class="card-body">
<h3 class="mr-5"><span style="color: skyblue; float:left;" ><i class="fas fa-people-carry fa-3x"></i></span><?php echo$delivaryboycount; ?></h3>
  </div>
  <div class="card-footer text-dark">
    We are Happie to Help You!
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