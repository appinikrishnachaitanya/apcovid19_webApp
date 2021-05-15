<?php
include('session.php');
?>
<?php
include('includes/dbconfig.php');
$selectquery="SELECT * FROM fooddelivery_success";
$selectdb=mysqli_query($dbconnect,$selectquery);
$selectcount=mysqli_num_rows($selectdb);
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

    <title>DeliveryBoys</title>
   
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
       	


       
 
        <div class="alert alert-info mt-5" role="alert">
        	<h5 class="text-center">My Tasks</h5>
        	</div> 
        
        <div class="row justify-content-center">
          <div class="col">
       <div class="table table-responsive table-bordered">
       	<table>
       		<thead>
       		<th>Isolation no</th>
       		<th>Name:</th>
       		<th>District</th>
       		<th>Mandal</th>
       		<th>Wardno</th>
       		<th>Mobile No</th>
       		<th>Address</th>
       		<th  class="text-center">Actions</th>
       		</thead>
       		<tbody>
           
           <?php 
           include("includes/dbconfig.php");
           $id=$_SESSION['foodid'];
           $selectfoodboy="SELECT * FROM fooddelivery_login WHERE userid='$id' ";
           $selectfooddb=mysqli_query($dbconnect,$selectfoodboy);
           $selectfooddata=mysqli_fetch_assoc($selectfooddb);
           $myward=$selectfooddata['wardno'];
           $mydistrict=$selectfooddata['district'];
           $mycity=$selectfooddata['city'];
           $selectpatient="SELECT * FROM ashaworkers";
           $patientdb=mysqli_query($dbconnect,$selectpatient);
           $count=0;
           while($patientdata=mysqli_fetch_assoc($patientdb))
           {
                 
                    $patientward=strtoupper($patientdata['Wardno']);
                    $patientdistrict=strtoupper($patientdata['district']);
                    $patientcity=strtoupper($patientdata['city']);
                    $patientstatus=strtoupper($patientdata['status']);
                    

                   if ($patientward==$myward && $patientcity==$mycity && $patientdistrict==$mydistrict)

                   {
                             $count++;
                  ?>
                   
                  
         

       			<tr>
       				<td><?php echo $patientdata['regno'];?></td>
       				<td><?php echo $patientdata['name'];?></td>
       				<td><?php echo $patientdata['district'];?></td>
       				<td><?php echo $patientdata['mandal'];?></td>
       				<td><?php echo $patientdata['Wardno'];?></td>
       				<td><?php echo $patientdata['phoneno'];?></td>
       				<td><?php echo $patientdata['address'];?></td>
              <td><a href="insert.php?pid=<?php echo $patientdata['regno'];?> & fid=<?php echo $selectfooddata['userid'];?>" class="btn btn-success">Delivered</a></td>
       				
       			</tr>
                

            <?php
             }
                  

           }

           ?>
       		</tbody>
       	</table>

     </div>
   </div>
 </div>


       <div class="row justify-content-center">
        <div class="col">
          <div class="card mt-5 border-info" style="border-radius:10px;">
            <div class="card-body">
              <div class="alert alert-info" role="alert">
          
          <h5 class="text-center">Dashboard</h5>

          </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="card border-danger mb-5" style="border-radius: 20px; background-color:#e6a8a8; ">
                    <div  class="card-body">
                      <h5 class="text-center">Mypatients</h5>
                      <hr>
                      <h5 class="text-center"><?php echo $count;?></h5>
                    </div>
                  </div>
                </div>
              
              
                <div class="col-lg-6">
                  <div class="card border-success" style="border-radius: 20px; background-color:#ccffce; ">
                    <div  class="card-body">
                      <h5 class="text-center">FoodSuccessfullySupplied</h5>
                      <hr>
                      <h5 class="text-center"><?php echo $selectcount; ?></h5>
                    </div>
                  </div>
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