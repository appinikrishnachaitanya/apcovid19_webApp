<?php include('session.php');?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
   
   
    <link rel="stylesheet" type="text/css" href="assets/css/table.css">
    <title>View Patients</title>
    

  
  </head>
  <body>

    <?php include('navbar.php'); ?>

  
  <div class="alert alert-success" role="alert">
            <h4 class="text-center">View Isolation Patients</h4>
            </div>
    
  
  <div class="row">
    <div class="col">
  <div class="table table-responsive table-bordered ">
  <table>
      <thead>
          <th>S.No</th>
          <th>Date</th>
          <th>Regno</th>
          
          <th>Name</th>
          <th>MobileNo:</th>
       
          <th>District</th>
          <th>City/Village</th>
          <th>Mandal</th>
          <th>Wardno</th>

          
        
          <th>Status</th>
          <th colspan="2">Actions</th>

      </thead>

      <tbody>
                    <?php
                    include("includes/dbconfig.php");
                    $id=$_SESSION['adminid'];
                    $doctorquery="SELECT * FROM ashaworkers WHERE addedby='$id' ORDER BY date DESC";
                    $doctorresult=mysqli_query($dbconnect,$doctorquery);
                    $doctorcount=mysqli_num_rows($doctorresult);
                    $count=0;
                    while($doctordata=mysqli_fetch_assoc($doctorresult))
                    {   
                        $mystatus=$doctordata['status'];
                        if ($mystatus=="Quarantine")
                        {
                        $count++;
                        ?>
                  

          <tr>
              <td><?php echo$count; ?></td>
              <td><?php echo$doctordata['date']; ?></td>
              <td><?php echo$doctordata['regno']; ?></td>
            
              <td><?php echo$doctordata['name']; ?></td>
              <td><?php echo$doctordata['phoneno']; ?></td>
              
              <td><?php echo$doctordata['district']; ?></td>
              <td><?php echo$doctordata['city']; ?></td>
              <td><?php echo$doctordata['mandal']; ?></td>
              <td><?php echo$doctordata['Wardno']; ?></td>
              
          
              <td><?php echo$doctordata['status']; ?></td>
          <td><a href="positive.php?regno=<?php echo$doctordata['regno'];?>" class="btn btn-success">Tested+VE</a></td>
              <td><a href="negative.php?regno=<?php echo$doctordata['regno'];?>" class="btn btn-danger">TESTED-VE</a></td>


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
            <h4 class="text-center">TestedPositive</h4>
            </div>
    
  
  <div class="row">
    <div class="col">
  <div class="table table-responsive table-bordered ">
  <table>
      <thead>
          <th>S.No</th>
          <th>Date</th>
          <th>Regno</th>
          
          <th>Name</th>
          <th>MobileNo:</th>
          
          <th>District</th>
          <th>City/Village</th>
          <th>Mandal</th>
          <th>Wardno</th>

          
         
          <th>Status</th>
          <th colspan="2">Actions</th>

      </thead>

      <tbody>
                    <?php
                    include("includes/dbconfig.php");
                    $id=$_SESSION['adminid'];
                    $doctorquery="SELECT * FROM ashaworkers WHERE addedby='$id' ORDER BY date DESC";
                    $doctorresult=mysqli_query($dbconnect,$doctorquery);
                    $doctorcount=mysqli_num_rows($doctorresult);
                    $count=0;
                    while($doctordata=mysqli_fetch_assoc($doctorresult))
                    {   
                        $mystatus=$doctordata['status'];
                        if ($mystatus=="POSITIVE")
                        {
                        $count++;
                        ?>
                  

          <tr>
              <td><?php echo$count; ?></td>
              <td><?php echo$doctordata['date']; ?></td>
              <td><?php echo$doctordata['regno']; ?></td>
          
              <td><?php echo$doctordata['name']; ?></td>
              <td><?php echo$doctordata['phoneno']; ?></td>
           
              <td><?php echo$doctordata['district']; ?></td>
              <td><?php echo$doctordata['city']; ?></td>
              <td><?php echo$doctordata['mandal']; ?></td>
              <td><?php echo$doctordata['Wardno']; ?></td>
              
           ]
              <td><?php echo$doctordata['status']; ?></td>
             <td><a href="positive.php?regno=<?php echo$doctordata['regno'];?>" class="btn btn-success">Tested+VE</a></td>
              <td><a href="negative.php?regno=<?php echo$doctordata['regno'];?>" class="btn btn-danger">TESTED-VE</a></td>


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
            <h4 class="text-center">Tested Negative</h4>
            </div>
    
  
  <div class="row">
    <div class="col">
  <div class="table table-responsive table-bordered ">
  <table>
      <thead>
          <th>S.No</th>
          <th>Date</th>
          <th>Regno</th>
         
          <th>Name</th>
          <th>MobileNo:</th>
       
          <th>District</th>
          <th>City/Village</th>
          <th>Mandal</th>
          <th>Wardno</th>

          
         
          <th>Status</th>
          <th colspan="2">Actions</th>

      </thead>

      <tbody>
                    <?php
                    include("includes/dbconfig.php");
                    $id=$_SESSION['adminid'];
                    $doctorquery="SELECT * FROM ashaworkers WHERE addedby='$id' ORDER BY date DESC";
                    $doctorresult=mysqli_query($dbconnect,$doctorquery);
                    $doctorcount=mysqli_num_rows($doctorresult);
                    $count=0;
                    while($doctordata=mysqli_fetch_assoc($doctorresult))
                    {   
                        $mystatus=$doctordata['status'];
                        if ($mystatus=="NEGATIVE")
                        {
                        $count++;
                        ?>
                  

          <tr>
              <td><?php echo$count; ?></td>
              <td><?php echo$doctordata['date']; ?></td>
              <td><?php echo$doctordata['regno']; ?></td>
             
              <td><?php echo$doctordata['name']; ?></td>
              <td><?php echo$doctordata['phoneno']; ?></td>
           
              <td><?php echo$doctordata['district']; ?></td>
              <td><?php echo$doctordata['city']; ?></td>
              <td><?php echo$doctordata['mandal']; ?></td>
              <td><?php echo$doctordata['Wardno']; ?></td>
             
         
              <td><?php echo$doctordata['status']; ?></td>
              <td><a href="positive.php?regno=<?php echo$doctordata['regno'];?>" class="btn btn-success">Tested+VE</a></td>
              <td><a href="negative.php?regno=<?php echo$doctordata['regno'];?>" class="btn btn-danger">TESTED-VE</a></td>

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