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
   
   
    <link rel="stylesheet" type="text/css" href="../assets/css/adminindex.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/table.css">
    <title>HelpingHand</title>
    

  
  </head>
  <body>
  
  <div class="alert alert-success" role="alert">
            <h4 class="text-center">View DeliveryBoys</h4>
            </div>
    
  
  <div class="row ">
    <div class="col">
  <div class="table table-responsive table-bordered ">
  <table>
      <thead>
          <th>S.No</th>
          <th>Date</th>
          <th>Regno</th>
          <th>Category</th>
          <th>Name</th>
          <th>MobileNo:</th>
         
          <th>District</th>
          <th>City/Village</th>
          <th>Mandal</th>
          <th>Wardno</th>

          <th>Student</th>
          <th>NCC</th>
          <th>Status</th>
          <th colspan="2">Actions</th>

      </thead>

      <tbody>
                    <?php
                    include("../includes/dbconfig.php");
                    $delivaryboyquery="SELECT * FROM helpinghands_delivaryboys ORDER BY date DESC";
                    $delivaryboyresult=mysqli_query($dbconnect,$delivaryboyquery);
                    $delivaryboycount=mysqli_num_rows($delivaryboyresult);
                    $count=0;
                    while($delivaryboydata=mysqli_fetch_assoc($delivaryboyresult))
                    {   

                        $mystatus=$delivaryboydata['status'];
                        if ($mystatus=="Pending")
                        {
                        $count++;
                        ?>
                  

          <tr>
              <td><?php echo$count; ?></td>
              <td><?php echo$delivaryboydata['date']; ?></td>
              <td><?php echo$delivaryboydata['regno']; ?></td>
              <td><?php echo$delivaryboydata['category'];?></td>
              <td><?php echo$delivaryboydata['name']; ?></td>
              <td><?php echo$delivaryboydata['phoneno']; ?></td>
             
              <td><?php echo$delivaryboydata['district']; ?></td>
              <td><?php echo$delivaryboydata['city']; ?></td>
              <td><?php echo$delivaryboydata['mandal']; ?></td>
              <td><?php echo$delivaryboydata['Wardno']; ?></td>
              <td><?php echo$delivaryboydata['student']; ?></td>
              <td><?php echo$delivaryboydata['ncc']; ?></td>
              <td><?php echo$delivaryboydata['status']; ?></td>
              <td><a href="confirm.php?regno=<?php echo$delivaryboydata['regno'];?>&category=<?php echo$delivaryboydata['category'];?>" class="btn btn-success">Confirm</a></td>
              <td><a href="reject.php?regno=<?php echo$delivaryboydata['regno'];?>&category=<?php echo$delivaryboydata['category'];?>" class="btn btn-danger">Reject</a></td>

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



 <div class="alert alert-success" role="alert">
            <h4 class="text-center">Confirmed deliveryBoys</h4>
            </div>
    



<div class="row ">
    <div class="col">
  <div class="table table-responsive table-bordered ">
  <table>
      <thead>
          <th>S.No</th>
          <th>Date</th>
          <th>Regno</th>
          <th>Category</th>
          <th>Name</th>
          <th>MobileNo:</th>
         
          <th>District</th>
          <th>City/Village</th>
          <th>Mandal</th>
          <th>Wardno</th>

          <th>Student</th>
          <th>NCC</th>
          <th>Status</th>
          <th colspan="2">Actions</th>

      </thead>

      <tbody>
                    <?php
                    include("../includes/dbconfig.php");
                    $delivaryboyquery="SELECT * FROM helpinghands_delivaryboys ORDER BY date DESC";
                    $delivaryboyresult=mysqli_query($dbconnect,$delivaryboyquery);
                    $delivaryboycount=mysqli_num_rows($delivaryboyresult);
                    $count=0;
                    while($delivaryboydata=mysqli_fetch_assoc($delivaryboyresult))
                    {
                         $mystatus=$delivaryboydata['status'];
                        if ($mystatus=="CONFIRMED")
                        {
                        $count++;
                        ?>
                  

          <tr>
              <td><?php echo$count; ?></td>
              <td><?php echo$delivaryboydata['date']; ?></td>
              <td><?php echo$delivaryboydata['regno']; ?></td>
              <td><?php echo$delivaryboydata['category'];?></td>
              <td><?php echo$delivaryboydata['name']; ?></td>
              <td><?php echo$delivaryboydata['phoneno']; ?></td>
             
              <td><?php echo$delivaryboydata['district']; ?></td>
              <td><?php echo$delivaryboydata['city']; ?></td>
              <td><?php echo$delivaryboydata['mandal']; ?></td>
              <td><?php echo$delivaryboydata['Wardno']; ?></td>
              <td><?php echo$delivaryboydata['student']; ?></td>
              <td><?php echo$delivaryboydata['ncc']; ?></td>
              <td><?php echo$delivaryboydata['status']; ?></td>
              <td><a href="confirm.php?regno=<?php echo$delivaryboydata['regno'];?>&category=<?php echo$delivaryboydata['category'];?>" class="btn btn-success">Confirm</a></td>
              <td><a href="reject.php?regno=<?php echo$delivaryboydata['regno'];?>&category=<?php echo$delivaryboydata['category'];?>" class="btn btn-danger">Reject</a></td>

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

<div class="alert alert-success" role="alert">
            <h4 class="text-center">Rejected deliveryBoys</h4>
            </div>
    



<div class="row ">
    <div class="col">
  <div class="table table-responsive table-bordered ">
  <table>
      <thead>
          <th>S.No</th>
          <th>Date</th>
          <th>Regno</th>
          <th>Category</th>
          <th>Name</th>
          <th>MobileNo:</th>
         
          <th>District</th>
          <th>City/Village</th>
          <th>Mandal</th>
          <th>Wardno</th>

          <th>Student</th>
          <th>NCC</th>
          <th>Status</th>
          <th colspan="2">Actions</th>

      </thead>

      <tbody>
                    <?php
                    include("../includes/dbconfig.php");
                    $delivaryboyquery="SELECT * FROM helpinghands_delivaryboys ORDER BY date DESC";
                    $delivaryboyresult=mysqli_query($dbconnect,$delivaryboyquery);
                    $delivaryboycount=mysqli_num_rows($delivaryboyresult);
                    $count=0;
                    while($delivaryboydata=mysqli_fetch_assoc($delivaryboyresult))
                    {
                         $mystatus=$delivaryboydata['status'];
                        if ($mystatus=="REJECTED")
                        {
                        $count++;
                        ?>
                  

          <tr>
              <td><?php echo$count; ?></td>
              <td><?php echo$delivaryboydata['date']; ?></td>
              <td><?php echo$delivaryboydata['regno']; ?></td>
              <td><?php echo$delivaryboydata['category'];?></td>
              <td><?php echo$delivaryboydata['name']; ?></td>
              <td><?php echo$delivaryboydata['phoneno']; ?></td>
             
              <td><?php echo$delivaryboydata['district']; ?></td>
              <td><?php echo$delivaryboydata['city']; ?></td>
              <td><?php echo$delivaryboydata['mandal']; ?></td>
              <td><?php echo$delivaryboydata['Wardno']; ?></td>
              <td><?php echo$delivaryboydata['student']; ?></td>
              <td><?php echo$delivaryboydata['ncc']; ?></td>
              <td><?php echo$delivaryboydata['status']; ?></td>
              <td><a href="confirm.php?regno=<?php echo$delivaryboydata['regno'];?>&category=<?php echo$delivaryboydata['category'];?>" class="btn btn-success">Confirm</a></td>
              <td><a href="reject.php?regno=<?php echo$delivaryboydata['regno'];?>&category=<?php echo$delivaryboydata['category'];?>" class="btn btn-danger">Reject</a></td>

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




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 
    
  </body>
</html>