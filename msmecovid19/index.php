<?php
session_start();
include('includes/dbconfig.php');
$selectmsme="SELECT * FROM msme_registrations";
$selectdb=mysqli_query($dbconnect,$selectmsme);
$msmecount=mysqli_num_rows($selectdb);

$selectworker="SELECT * FROM jobs_msme";
$workerdb=mysqli_query($dbconnect,$selectworker);
$workercount=mysqli_num_rows($workerdb);

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
    <link rel="stylesheet" type="text/css" href="assets/css/reg.css">

    <title>MSME</title>
   
  </head>
  <body>

    <div class="container">




      <img src="images/msme.jpg" class="img-fluid" title="msme" style="border-radius:10px; ">

        <div class="row">
    <div class="col-lg-6">
      <div class="card mt-5 mb-3" style="border-radius:20px; background-color:#dbffad; ">
        <div class="card-body">
          <h4 class="text-center">Total MSME</h4>
          <hr>
           <h5 class="text-center"> <?php echo $msmecount; ?></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
      <div class="card mt-5 mb-3" style="border-radius:20px;  background-color:#fcbbbb;  ">
        <div class="card-body">
          <h4 class="text-center">Total Workers</h4>
          <hr>
           <h5 class="text-center"><?php echo $workercount; ?></h5>
            </div>
          </div>
        </div>
      </div>






    <div class="row">
      <div class="col">
        <div class="card mt-5" style="border-radius:20px; border-bottom:10px solid lightgrey; background-color:#dffaf6;   ">
          <div class="card-body" style=" font-family: Times;  ">

           
            <h5 class="text-center text-dark">SELF UNDERTAKING TO START MSME COVID19</h5>
           
             <p>This portal helps in facilitating and supporting the Government in providing the details of MSME units who manufactures or supplies medical and auxiliary products that are necessary for controlling the Corona Virus (COVID-19) impact in state.</p>

<p>An MSME unit provides the details like every day inventory, production capacity and installed capacity of their products in the portal, so that the demand can be matched with supply. This helps in removing the demand and supply shocks for the medical and auxiliary products which helps in controlling the impact of novel Corona virus spread across the state.</p>

<p>As of now, department of industries has identified 153 units out of which, 112 units manufactures medical essentials and 41 units manufactures auxiliary products.</p>

<p>Products such as ICU beds, Ventilators, pharmacy drug, liquid oxygen, sanitizers, phenoyl, medical oxygen, surgical cotton, veterinary drugs, germicidal, hand wash, masks, shoe covers, PPE, Aprons etc.. are covered in the list</p>



          </div>
        </div>
      </div>
    </div>
 




  <div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="card mb-5 mt-5" style="border-radius:20px; background-color:#dbffad;  ">
        <div class="card-body">
        
        
        <h5 class="text-dark text-center"> MANUFACTURE/SUPPLIER</h5>
      
        <div class="col d-flex justify-content-center">
        <a href="registration.php" target="_blank" class="btn btn-primary">Click Here</a>
           </div>

  </div>
</div>
</div>
<div class="col-lg-6">
      <div class="card  mt-5" style="border-radius:20px; background-color:#fcbbbb;   ">
        <div class="card-body">

        <h5 class="text-dark text-center">BE A WORKER AT MSME</h5>
        <div class="col d-flex justify-content-center">
        <a href="jobform.php" target="_blank" class="btn btn-primary">Click Here</a>
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
</html