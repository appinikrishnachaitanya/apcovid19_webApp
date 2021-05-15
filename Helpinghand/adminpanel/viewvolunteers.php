<?php include('session.php');?>

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
    <link rel="stylesheet" type="text/css" href="../assets/css/service.css">   
 
    <title>View</title>
    

  
  </head>
  <body>
<?php include('navbar.php'); ?>
<div class="container">
	<div class="alert alert-success mt-5" role="alert">
<h4 class="text-center">View Volunteers</h4>
</div>
<hr>
<div class="row justify-content-center">
	
	<div class="col-lg-6 col-sm-12">
	<div class="card mt-3 border border-secondary card1" style="background-color: #d1f8ff;">
		<div class="card-body">
			
			<div class="text-center">
			<span><i class="fas fa-user-nurse fa-3x"></i></span>
		</div>
			<div class="card-title text-center">Doctor/Nurse</div>
          		</div>
		 
          <a href="doctor.php" target="_blank" class="btn btn-secondary mb-3 ">Click Here</a>
		</div> 
       </div>
  
       
       <div class="col-lg-6 col-sm-12">
	<div class="card mt-3  border border-secondary card2" style="background-color: #c1ffb8;">
		<div class="card-body">
			<div class="text-center">
			<span><i class="fas fa-hand-holding-usd fa-3x"></i></span>
		</div>
			<div class="card-title text-center">Be a Donor</div>

		</div>
		<a href="donor.php" target="_blank"  class="btn btn-secondary mb-3 ">Click Here</a>
		</div> 
       </div>
       
       <div class="col-lg-6 col-sm-12 mt-3  ">
	<div class="card border border-secondary card3" style="background-color: #ecffb8;">
		<div class="card-body">
			<div class="text-center ">
			<span><i class="fas fa-chalkboard-teacher fa-3x"></i></span>
		</div>
			<div class="card-title text-center">Be a Speaker</div>

		</div>
		<a href="speaker.php" target="_blank"  class="btn btn-secondary mb-3 ">Click Here</a>
		</div> 
       </div>

      <div class="col-lg-6 col-sm-12 mt-3  ">
	<div class="card border border-secondary card4" style="background-color:#fab9b9; ">
		<div class="card-body">
			<div class="text-center ">
			<span><i class="fas fa-people-carry fa-3x"></i></span>
		</div>
			<div class="card-title text-center">Delivery Boy</div>

		</div>
		<a href="deliveryboy.php" target="_blank"  class="btn btn-secondary mb-3 ">Click Here</a>
		</div> 
       </div>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> 
 
    
  </body>
</html>