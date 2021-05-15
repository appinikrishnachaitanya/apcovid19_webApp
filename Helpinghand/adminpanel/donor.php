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
            <h4 class="text-center">View Donors</h4>
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
          <th>itemdonate</th>
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
                    $donorquery="SELECT * FROM helpinghands_donors ORDER BY date DESC";
                    $donorresult=mysqli_query($dbconnect,$donorquery);
                    $donorcount=mysqli_num_rows($donorresult);
                    $count=0;
                    while($donordata=mysqli_fetch_assoc($donorresult))
                    {
                         $mystatus=$donordata['status'];
                        if ($mystatus=="Pending")
                        {
                        $count++;
                        ?>
                  

          <tr>
              <td><?php echo$count; ?></td>
              <td><?php echo$donordata['date']; ?></td>
              <td><?php echo$donordata['regno']; ?></td>
              <td><?php echo$donordata['category'];?></td>
              <td><?php echo$donordata['name']; ?></td>
              <td><?php echo$donordata['phoneno']; ?></td>
              <td><?php echo$donordata['itemdonate']; ?></td>
              <td><?php echo$donordata['district']; ?></td>
              <td><?php echo$donordata['city']; ?></td>
              <td><?php echo$donordata['mandal']; ?></td>
              <td><?php echo$donordata['Wardno']; ?></td>
              <td><?php echo$donordata['student']; ?></td>
              <td><?php echo$donordata['ncc']; ?></td>
              <td><?php echo$donordata['status']; ?></td>
              
              <td><a href="confirm.php?regno=<?php echo$donordata['regno'];?>&category=<?php echo$donordata['category'];?>" class="btn btn-success">Confirm</a></td>
              <td><a href="reject.php?regno=<?php echo$donordata['regno'];?>&category=<?php echo$donordata['category'];?>" class="btn btn-danger">Reject</a></td>

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
            <h4 class="text-center">View Donors</h4>
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
          <th>itemdonate</th>
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
                    $donorquery="SELECT * FROM helpinghands_donors ORDER BY date DESC";
                    $donorresult=mysqli_query($dbconnect,$donorquery);
                    $donorcount=mysqli_num_rows($donorresult);
                    $count=0;
                    while($donordata=mysqli_fetch_assoc($donorresult))
                    {
                          $mystatus=$donordata['status'];
                        if ($mystatus=="CONFIRMED")
                        {
                        $count++;
                        ?>
                  

          <tr>
              <td><?php echo$count; ?></td>
              <td><?php echo$donordata['date']; ?></td>
              <td><?php echo$donordata['regno']; ?></td>
              <td><?php echo$donordata['category'];?></td>
              <td><?php echo$donordata['name']; ?></td>
              <td><?php echo$donordata['phoneno']; ?></td>
              <td><?php echo$donordata['itemdonate']; ?></td>
              <td><?php echo$donordata['district']; ?></td>
              <td><?php echo$donordata['city']; ?></td>
              <td><?php echo$donordata['mandal']; ?></td>
              <td><?php echo$donordata['Wardno']; ?></td>
              <td><?php echo$donordata['student']; ?></td>
              <td><?php echo$donordata['ncc']; ?></td>
              <td><?php echo$donordata['status']; ?></td>
              
              <td><a href="confirm.php?regno=<?php echo$donordata['regno'];?>&category=<?php echo$donordata['category'];?>" class="btn btn-success">Confirm</a></td>
              <td><a href="reject.php?regno=<?php echo$donordata['regno'];?>&category=<?php echo$donordata['category'];?>" class="btn btn-danger">Reject</a></td>

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
            <h4 class="text-center">View Donors</h4>
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
          <th>itemdonate</th>
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
                    $donorquery="SELECT * FROM helpinghands_donors ORDER BY date DESC";
                    $donorresult=mysqli_query($dbconnect,$donorquery);
                    $donorcount=mysqli_num_rows($donorresult);
                    $count=0;
                    while($donordata=mysqli_fetch_assoc($donorresult))
                    {
                         $mystatus=$donordata['status'];
                        if ($mystatus=="REJECTED")
                        {
                        $count++;
                        ?>
                  

          <tr>
              <td><?php echo$count; ?></td>
              <td><?php echo$donordata['date']; ?></td>
              <td><?php echo$donordata['regno']; ?></td>
              <td><?php echo$donordata['category'];?></td>
              <td><?php echo$donordata['name']; ?></td>
              <td><?php echo$donordata['phoneno']; ?></td>
              <td><?php echo$donordata['itemdonate']; ?></td>
              <td><?php echo$donordata['district']; ?></td>
              <td><?php echo$donordata['city']; ?></td>
              <td><?php echo$donordata['mandal']; ?></td>
              <td><?php echo$donordata['Wardno']; ?></td>
              <td><?php echo$donordata['student']; ?></td>
              <td><?php echo$donordata['ncc']; ?></td>
              <td><?php echo$donordata['status']; ?></td>
              
              <td><a href="confirm.php?regno=<?php echo$donordata['regno'];?>&category=<?php echo$donordata['category'];?>" class="btn btn-success">Confirm</a></td>
              <td><a href="reject.php?regno=<?php echo$donordata['regno'];?>&category=<?php echo$donordata['category'];?>" class="btn btn-danger">Reject</a></td>

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