<?php
include('session.php');


include('includes/dbconfig.php');
$search=$_POST['search'];



       $selectquery="SELECT * FROM ashaworkers WHERE regno='$search' or phoneno='$search' or adhaarno='$search'";
       $querydb=mysqli_query($dbconnect,$selectquery);
       $querycount=mysqli_num_rows($querydb);
       $dbdata=mysqli_fetch_assoc($querydb);

       if ($querycount>0)
       {
       	echo '<div class="container">
        
        <div class="col d-flex justify-content-center">
        <div class="alert alert-success mt-3" role="alert" id="printbtn">
        <h5 class="text-center">Found </h5>
        </div>
  
        </div> 
        </div>

  ';
  
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
   
       
 
    <title>Search</title>
    
  <style type="text/css">
  	
  .row
  {
  	margin-left: 20%;
  }

  .card-body
  {
  	font-family: Times;
  	font-size: 1.2em;
  }

    @media print {
    #printbtn {
        display :  none;
    }
}

  </style>
  
  </head>
  <body>


<div class="container">

		<div class="card mt-5 border-info">
			<div class="card-body">
				
					<div class="col d-flex justify-content-center">
				<img src="<?php echo $dbdata['image']; ?>" width="200" height="200">
				 </div>
				
				<div class="row mt-3">
					<div class="col">
						<p>Name: &nbsp &nbsp <?php echo $dbdata['name']; ?></p>
					</div>
					<div class="col">
						<p>Email:&nbsp &nbsp <?php echo $dbdata['email']; ?></p>
					</div>
                   </div>

                   <div class="row">
					<div class="col">
						<p>PhoneNumber:&nbsp &nbsp <?php echo $dbdata['phoneno']; ?></p>
					</div>
					<div class="col">
						<p>Age:&nbsp &nbsp <?php echo $dbdata['age']; ?></p>
					</div>
                   </div>

                    <div class="row">
					<div class="col">
						<p>Adhaaarno:&nbsp &nbsp <?php echo $dbdata['adhaarno']; ?></p>
					</div>
					<div class="col">
						<p>Gender:&nbsp &nbsp <?php echo $dbdata['gender']; ?></p>
					</div>
                   </div>

                   <div class="row">
					<div class="col">
						<p>State:&nbsp &nbsp <?php echo $dbdata['state']; ?></p>
					</div>
					<div class="col">
						<p>District:&nbsp &nbsp <?php echo $dbdata['district']; ?></p>
					</div>
                   </div>

                   <div class="row">
					<div class="col">
						<p>City:&nbsp &nbsp <?php echo $dbdata['city']; ?></p>
					</div>
					<div class="col">
						<p>Mandal:&nbsp &nbsp <?php echo $dbdata['mandal']; ?></p>
					</div>
                   </div>


                   <div class="row">
					<div class="col">
						<p>Area/street:&nbsp &nbsp <?php echo $dbdata['address']; ?></p>
					</div>
					<div class="col">
						<p>WardNo:&nbsp &nbsp <?php echo $dbdata['Wardno']; ?></p>
					</div>
                   </div>


                   <div class="row">
					<div class="col">
						<p>Pincode:&nbsp &nbsp <?php echo $dbdata['pincode']; ?></p>
					</div>
					<div class="col">
						<p>Zone:&nbsp &nbsp <?php echo $dbdata['zone']; ?></p>
					</div>
                   </div>


                   <div class="row">
					<div class="col">
						<p>TravelHistory:&nbsp &nbsp <?php echo $dbdata['travelhistory']; ?></p>
					</div>
					<div class="col">
						<p>Symptoms:&nbsp &nbsp <?php echo $dbdata['symptoms']; ?></p>
					</div>
                   </div>


                   <div class="row">
					<div class="col">
						<p>Health Condition:&nbsp &nbsp <?php echo $dbdata['healthcondition']; ?></p>
					</div>
					<div class="col">
						<p>Spread of Covid-19:&nbsp &nbsp <?php echo $dbdata['reason']; ?></p>
					</div>
                   </div>

                   <div class="row">
					<div class="col">
						<p>LongTermDieseases:&nbsp &nbsp <?php echo $dbdata['diseases']; ?></p>
					</div>
					<div class="col">
						<p>Date:&nbsp &nbsp <?php echo $dbdata['date']; ?></p>
					</div>
                   </div>
 
                   <h5 class="text-center mt-5">Status:</h5>
                   <h5 class="text-center"><?php echo $dbdata['status']; ?></h5>

               </div>
           </div>

	<div class="col d-flex justify-content-center">
<input id ="printbtn" type="button" class="btn btn-success mt-5 ml-5" value="Print this page" onclick="window.print();" >
</div>

           </div>

       <?php


       }
 


     else
     {
     	echo '<h2 style="text-align:center;  color:red;"> NOT FOUND</h2>';

     	header("refresh:2; url=dashboard.php");
     }



       ?>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 
 
    
  </body>
</html>