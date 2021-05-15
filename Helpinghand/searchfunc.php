<?php
session_start();


include('includes/dbconfig.php');
$search=$_POST['search'];
$cat=$_POST['category'];

if ($cat=="doctor")
{
       $selectquery="SELECT * FROM helpinghands_doctors WHERE regno='$search' or phoneno='$search' or adhaarno='$search'";
       $querydb=mysqli_query($dbconnect,$selectquery);
       $querycount=mysqli_num_rows($querydb);
       $dbdata=mysqli_fetch_assoc($querydb);

       if ($querycount>0)
       {
       	echo '<div class="container">
        <div class="row justify-content-center">
        <div class="col">
        <div class="alert alert-success mt-3" role="alert" id="printbtn">
        <h5 class="text-center">Found </h5>
        </div>
        </div>
        </div> 
        </div>

  ';
  
       }
 


     else
     {
     	echo '<div class="container">
        <div class="row justify-content-center">
        <div class="col-md-10">
        <div class="alert alert-danger mt-3" role="alert">
        <h5 class="text-center"> NOT Found </h5>
        </div>
        </div>
        </div> 
        </div>'
        ;
     }



}

if ($cat=="speaker")
{
       $selectquery="SELECT * FROM helpinghands_speakers WHERE regno='$search' or phoneno='$search' or adhaarno='$search'";
       $querydb=mysqli_query($dbconnect,$selectquery);
       $querycount=mysqli_num_rows($querydb);
       $dbdata=mysqli_fetch_assoc($querydb);

           if ($querycount>0)
       {
       	echo '<div class="container">
        <div class="row justify-content-center">
        <div class="col">
        <div class="alert alert-success mt-3" role="alert" id="printbtn">
        <h5 class="text-center">Found </h5>
        </div>
        </div>
        </div> 
        </div>

  ';
  
       }
 


     else
     {
     	echo '<div class="container">
        <div class="row justify-content-center">
        <div class="col-md-10">
        <div class="alert alert-danger mt-3" role="alert">
        <h5 class="text-center"> NOT Found </h5>
        </div>
        </div>
        </div> 
        </div>'
        ;
     }

        


}

if ($cat=="donor")
{
       $selectquery="SELECT * FROM helpinghands_donors WHERE regno='$search' or phoneno='$search' or adhaarno='$search'";
       $querydb=mysqli_query($dbconnect,$selectquery);
       $querycount=mysqli_num_rows($querydb);
       $dbdata=mysqli_fetch_assoc($querydb);


           if ($querycount>0)
       {
       	echo '<div class="container">
        <div class="row justify-content-center">
        <div class="col">
        <div class="alert alert-success mt-3" role="alert" id="printbtn">
        <h5 class="text-center">Found </h5>
        </div>
        </div>
        </div> 
        </div>

  ';
  
       }
 


     else
     {
     	echo '<div class="container">
        <div class="row justify-content-center">
        <div class="col-md-10">
        <div class="alert alert-danger mt-3" role="alert">
        <h5 class="text-center"> NOT Found </h5>
        </div>
        </div>
        </div> 
        </div>'
        ;
     }






}

if ($cat=="deliveryboy")
{
       $selectquery="SELECT * FROM helpinghands_delivaryboys WHERE regno='$search' or phoneno='$search' or adhaarno='$search'";
       $querydb=mysqli_query($dbconnect,$selectquery);
       $querycount=mysqli_num_rows($querydb);
       $dbdata=mysqli_fetch_assoc($querydb);

        
           if ($querycount>0)
       {
       	echo '<div class="container">
        <div class="row justify-content-center">
        <div class="col">
        <div class="alert alert-success mt-3" role="alert" id="printbtn">
        <h5 class="text-center">Found </h5>
        </div>
        </div>
        </div> 
        </div>

  ';
  
       }
 


     else
     {
     	echo '<div class="container">
        <div class="row justify-content-center">
        <div class="col-md-10">
        <div class="alert alert-danger mt-3" role="alert">
        <h5 class="text-center"> NOT Found </h5>
        </div>
        </div>
        </div> 
        </div>'
        ;
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
   

  
    <title>HelpingHand</title>
    
   <style type="text/css">
   	.table
   	{
   		border:0px;
       

   	}
   	  @media print {
    #printbtn {
        display :  none;
    }
}


   </style>
  
  </head>
  <body>
     
    <?php

    if ($querycount>0)

    {

     $mystatus=$dbdata['status'];

     if ($mystatus=="Pending")
     {
    ?>
          <div class="container">
            <div class="alert alert-secondary" role="alert">
           
           <h5 class="text-center">Your Status is Still Pending</h5>   
            
            </div>
          </div>

    <?php
     } 
     
     else if ($mystatus=="REJECTED")
     {

     ?>

     <div class="container">
            <div class="alert alert-secondary" role="alert">
           
           <h5 class="text-center">Sorry,Your Application is Rejected</h5>   
            
            </div>
          </div>

     <?php

   }

   else

   {

  ?>
<div class="print">
     <div class="container">
      <div class="col d-flex justify-content-center">
        <img src="<?php echo $dbdata['image']; ?>" width="200" height="200">
         </div>
  	<div class="alert alert-secondary mt-5" role="alert">
    	<h5 class="text-center">Personal Details</h5>
    </div>
   
    <div class="row">
    	<div class="col d-flex justify-content-center">
    		<div class="table table-responsive table-bordered">
    		<table>
    			<thead>
    				<th>Regno</th>
    				<th>Name</th>
    				<th>E-mail</th>
    				<th>Mobile No</th>
    				<th>Gender</th>
    				<th>Age</th>
    				<th>Adhaarno</th>
    			</thead>
    			<tbody>
    				<tr>
    					<td><?php echo $dbdata['regno']; ?></td>
    					<td><?php echo $dbdata['name']; ?></td>
    					<td><?php echo $dbdata['email']; ?></td>
    					<td><?php echo $dbdata['phoneno']; ?></td>
    					<td><?php echo $dbdata['gender']; ?></td>
    					<td><?php echo $dbdata['age']; ?></td>
    					<td><?php echo $dbdata['adhaarno']; ?></td>
    				</tr>
    			</tbody>
    		</table>
    	</div>
    </div>
</div>

</div>

    <div class="container">
 	<div class="alert alert-secondary mt-5" role="alert">
    	<h5 class="text-center">Address Details</h5>
    </div>
    
    <div class="row ">
    	<div class="col d-flex justify-content-center">
    		<div class="table table-responsive table-bordered">
    		<table>
    			<thead>
    				<th>State</th>
    				<th>District</th>
    				<th>city/village</th>
    				<th>Mandal</th>
    				<th>address</th>
    				<th>Wardno</th>
    				<th>Pincode</th>
    				<th>Zone</th>
    			</thead>
    			<tbody>
    				<tr>
    					<td><?php echo $dbdata['state']; ?></td>
    					<td><?php echo $dbdata['district']; ?></td>
    					<td><?php echo $dbdata['city']; ?></td>
    					<td><?php echo $dbdata['mandal']; ?></td>
    					<td><?php echo $dbdata['address']; ?></td>
    					<td><?php echo $dbdata['Wardno']; ?></td>
    					<td><?php echo $dbdata['pincode']; ?></td>
    					<td><?php echo $dbdata['zone']; ?></td>
    				</tr>
    			</tbody>
    		</table>
    	</div>
    </div>
</div>
</div>


 
 <div class="container"> 
<div class="alert alert-secondary mt-5" role="alert">
    	<h5 class="text-center"> Pass Details</h5>
    </div>
    
    <div class="row ">
    	<div class="col d-flex justify-content-center">
    		<div class="table  table-bordered">
    		<table>
    			<thead>
    				<th>Student</th>
    				<th>Ncc</th>
    				<th>Size</th>
    				<th>Work</th>
    				<th>Category</th>

    				<?php

    				if ($cat=="doctor")

    				{
    			    
    			    ?>
 
                    <th>Qualification</th>  
                 
                   <?php
    				}




    				?>

                    <?php

    				if ($cat=="donor")

    				{
    			    
    			    ?>
 
                    <th>itemdonate</th>  
                 
                   <?php
    				}




    				?>


    				<?php

    				if ($cat=="speaker")

    				{
    			    
    			    ?>
 
                    <th>awareness</th>  
                 
                   <?php
    				}




    				?>






    				<th>Status</th>
    				
    				
    			</thead>
    			<tbody>
    				<tr>
    					<td><?php echo $dbdata['student']; ?></td>
    					<td><?php echo $dbdata['ncc']; ?></td>
    					<td><?php echo $dbdata['size']; ?></td>
    					<td><?php echo $dbdata['work']; ?></td>
    					<td><?php echo $dbdata['category']; ?></td>
                        <?php

    				if ($cat=="doctor")

    				{
    			    
    			    ?>
 
                  <td><?php echo $dbdata['qualification'];?></td>
                  
                 
                   <?php
    				}




    				?>

    				<?php

    					if ($cat=="donor")

    				{
    			    
    			    ?>
 
                  <td><?php echo $dbdata['itemdonate'];?></td>
                  <
                 
                   <?php
    				}




    				?>

    				<?php

    					if ($cat=="speaker")

    				{
    			    
    			    ?>
 
                  <td><?php echo $dbdata['awareness'];?></td>
                  <
                 
                   <?php
    				}




    				?>




    					<td><?php echo $dbdata['status']; ?></td>
    				
    				</tr>
    			</tbody>
    		</table>
    	</div>
    </div>
</div>


</div>
</div>

<div class="row">
	<div class="col d-flex justify-content-center">
<input id ="printbtn" type="button" class="btn btn-success mt-5 ml-5" value="Print this page" onclick="window.print();" >
</div>
</div>

<?php

}
}


?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 
 
    
  </body>
</html>