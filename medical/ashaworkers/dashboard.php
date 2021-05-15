<?php
include('session.php');
include('includes/dbconfig.php');
$id=$_SESSION['adminid'];
$primarycount=0;
$secondarycount=0;
$totalcount=0;
$positivecount=0;
$negativecount=0;
$quarantinecount=0;

$selectquarantine="SELECT * FROM ashaworkers WHERE addedby='$id'";
$dbquarantine=mysqli_query($dbconnect,$selectquarantine);
$quarantinecount=mysqli_num_rows($dbquarantine);



while ($selectdata=mysqli_fetch_assoc($dbquarantine))

{
     $secondary=$selectdata['reason'];
     $secondary=strtoupper($secondary);


if ($selectdata['status']=="POSITIVE")
{
  $positivecount++;
}

 if ($selectdata['status']=="NEGATIVE")
{
  $negativecount++;
}

 if ($secondary=="PRIMARYCONTACT") {
  $primarycount++;
}

if ($secondary=="SECONDARYCONTACT")
{
  $secondarycount++;
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


    <title>Ashaworkers</title>
   
    <style type="text/css">
  .card-body , .alert
{
	font-family: Times;
	font-size: 1.2em;
	font-weight: bold;

}

p
{
	font-family: Times;
	font-size:1.5em;
}

hr
{
	border-style: solid;
	border-width: 0.5px;
	opacity: 0.5;
}

.table
{
	border:0px;
}
</style>

  
  </head>
  <body>
    <?php include('navbar.php'); ?>

        
       <div class="container">
       	
    
         	

       
       <div class="row justify-content-center">
       	<div class="col">
       		<div class="card mt-5 border-info" style="border-radius:10px;">
       			<div class="card-body">
       				<div class="alert alert-info" role="alert">
          
          <h5 class="text-center">Dashboard</h5>

          </div>
       				<div class="row">
       					<div class="col-lg-4">
       						<div class="card border-danger mb-3" style="border-radius: 20px; background-color:#b9f8fa; ">
       							<div  class="card-body">
       								<h5 class="text-center">Total Tested Samples</h5>
       								<hr>
       								<h5 class="text-center"><?php echo $quarantinecount; ?></h5>
       							</div>
       						</div>
       					</div>
       				
       				
       					<div class="col-lg-4">
       						<div class="card border-success mb-3" style="border-radius: 20px; background-color:#ffd1b2; ">
       							<div  class="card-body">
       								<h5 class="text-center">TotalTestedPostive</h5>
       								<hr>
       								<h5 class="text-center"><?php echo $positivecount ;?></h5>
       							</div>
       						</div>
       					</div>
             
                <div class="col-lg-4 mb-3">
                  <div class="card border-success mb-3" style="border-radius: 20px; background-color:#ccffce; ">
                    <div  class="card-body">
                      <h5 class="text-center">Total Tested Negative</h5>
                      <hr>
                      <h5 class="text-center"><?php echo $negativecount ;?></h5>
                    </div>
                  </div>
                </div>


                <div class="col-lg-4 mb-3">
                  <div class="card border-danger" style="border-radius: 20px; background-color:#e6a8a8; ">
                    <div  class="card-body">
                      <h5 class="text-center">Primary Contacts</h5>
                      <hr>
                      <h5 class="text-center"> <?php echo $primarycount;?></h5>
                    </div>
                  </div>
                </div>
              
              
                <div class="col-lg-4 mb-3">
                  <div class="card border-success" style="border-radius: 20px; background-color:#9effdf; ">
                    <div  class="card-body">
                      <h5 class="text-center">Secondary Contacts</h5>
                      <hr>
                      <h5 class="text-center"><?php echo  $secondarycount; ?></h5>
                    </div>
                  </div>
                </div>
             
                <div class="col-lg-4">
                  <div class="card border-success" style="border-radius: 20px; background-color:#edffb0; ">
                    <div  class="card-body">
                      <h5 class="text-center">Total Quarantined</h5>
                      <hr>
                      <h5 class="text-center"><?php echo $quarantinecount; ?></h5>
                    </div>
                  </div>
                </div>



       				</div>
       			</div>
       		</div>
       	</div>
       </div>
 
        <div class="alert alert-info mt-5" role="alert">
        	<h5 class="text-center">Today</h5>
        	</div> 

       <div class="table table-responsive table-bordered">
       	<table>
       		<thead>
       		<th>S.No</th>
          <th>Date</th>
          <th>Regno</th>
         
          <th>Name</th>
          <th>MobileNo:</th>
       
          
          <th>City/Village</th>
          <th>Mandal</th>
          <th>Wardno</th>

          
         
          <th>Status</th>
          <th colspan="2">Actions</th>

       		</thead>
       		<tbody>
       			 <?php
                    include("includes/dbconfig.php");
                    $date=date("Y-m-d");
                    $patientquery="SELECT * FROM ashaworkers WHERE addedby='$id' ORDER BY date DESC";
                    $patientresult=mysqli_query($dbconnect,$patientquery);
                    $patientcount=mysqli_num_rows($patientresult);
                    $count=0;
                    while($patientdata=mysqli_fetch_assoc($patientresult))
                    {   
                        $mydate=$patientdata['date'];
                        if ($mydate==$date)
                        {
                        $count++;
                        ?>
                  

          <tr>
              <td><?php echo$count; ?></td>
              <td><?php echo$patientdata['date']; ?></td>
              <td><?php echo$patientdata['regno']; ?></td>
             
              <td><?php echo$patientdata['name']; ?></td>
              <td><?php echo$patientdata['phoneno']; ?></td>
           
             
              <td><?php echo$patientdata['city']; ?></td>
              <td><?php echo$patientdata['mandal']; ?></td>
              <td><?php echo$patientdata['Wardno']; ?></td>
             
         
              <td><?php echo$patientdata['status']; ?></td>
              <td><a href="positive.php?regno=<?php echo$patientdata['regno'];?>" class="btn btn-danger">Tested+VE</a></td>
              <td><a href="negative.php?regno=<?php echo$patientdata['regno'];?>" class="btn btn-success">Tested-VE</a></td>

          </tr>

<?php
}
}
?>


       		</tbody>
       	</table>

     </div>
 </div>



 


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 
 
    
  </body>
</html>