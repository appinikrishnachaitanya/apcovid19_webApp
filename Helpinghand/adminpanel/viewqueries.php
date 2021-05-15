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
            <h4 class="text-center">View Queries</h4>
            </div>
    
  
  <div class="row ">
    <div class="col">
  <div class="table table-responsive table-bordered ">
  <table>
      <thead>
          <th>S.No</th>
          <th>Date</th>
          <th>Name</th>
          <th>Emailno</th>
         
          <th>City</th>
           <th>MoblieNo</th>
          <th>Message</th>
          <th>Status</th>
          
          <th colspan="2">Actions</th>

      </thead>

      <tbody>
      	
<?php
include('../includes/dbconfig.php');
$select="SELECT * FROM helpinghands_queries ORDER BY date DESC";
$selectdb=mysqli_query($dbconnect,$select);
$count=0;
while($selectdata=mysqli_fetch_assoc($selectdb))
{    $mystatus=$selectdata['status'];
     if ($mystatus=="Pending")
     {

     $count++;
    
?>
    <tr>
              <td><?php echo$count; ?></td>
              <td><?php echo$selectdata['date']; ?></td>
            
              <td><?php echo$selectdata['name']; ?></td>
              <td><?php echo$selectdata['mail']; ?></td>
             
              <td><?php echo$selectdata['city']; ?></td>
              <td><?php echo$selectdata['number']; ?></td>
              <td><?php echo$selectdata['msg']; ?></td>
              <td><?php echo$selectdata['status']; ?></td>
             
              
              <td><a href="solved.php?id=<?php echo $selectdata['id'];?>" class="btn btn-success">Solved</a></td>
              <td><a href="unsolved.php?id=<?php echo $selectdata['id'];?>" class="btn btn-danger">Unsolved</a></td>

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
            <h4 class="text-center">Solved Queries</h4>
            </div>
    
  
  <div class="row ">
    <div class="col">
  <div class="table table-responsive table-bordered ">
  <table>
      <thead>
          <th>S.No</th>
          <th>Date</th>
          <th>Name</th>
          <th>Emailno</th>
          
          <th>City</th>
          <th>MoblieNo</th>
          <th>Message</th>
          <th>Status</th>
          
          <th colspan="2">Actions</th>

      </thead>

      <tbody>
      	
<?php
include('../includes/dbconfig.php');
$select="SELECT * FROM helpinghands_queries";
$selectdb=mysqli_query($dbconnect,$select);
$count=0;
while($selectdata=mysqli_fetch_assoc($selectdb))
{    $mystatus=$selectdata['status'];
     if ($mystatus=="SOLVED")
     {

     $count++;
    
?>
    <tr>
              <td><?php echo$count; ?></td>
              <td><?php echo$selectdata['date']; ?></td>
            
              <td><?php echo$selectdata['name']; ?></td>
              <td><?php echo$selectdata['mail']; ?></td>
             
              <td><?php echo$selectdata['city']; ?></td>
              <td><?php echo$selectdata['number']; ?></td>
              <td><?php echo$selectdata['msg']; ?></td>
              <td><?php echo$selectdata['status']; ?></td>
             
              
              <td><a href="solved.php?id=<?php echo $selectdata['id'];?>" class="btn btn-success">Solved</a></td>
              <td><a href="unsolved.php?id=<?php echo $selectdata['id'];?>" class="btn btn-danger">Unsolved</a></td>

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
            <h4 class="text-center">Unsolved Queries</h4>
            </div>
    
  
  <div class="row ">
    <div class="col">
  <div class="table table-responsive table-bordered ">
  <table>
      <thead>
          <th>S.No</th>
           <th>Date</th>
          <th>Name</th>
          <th>Emailno</th>
          <th>City</th>
          <th>MoblieNo</th>
          
          <th>Message</th>
          <th>Status</th>
         
          <th colspan="2">Actions</th>

      </thead>

      <tbody>
      	
<?php
include('../includes/dbconfig.php');
$select="SELECT * FROM helpinghands_queries";
$selectdb=mysqli_query($dbconnect,$select);
$count=0;
while($selectdata=mysqli_fetch_assoc($selectdb))
{    $mystatus=$selectdata['status'];
     if ($mystatus=="UNSOLVED")
     {

     $count++;
    
?>
    <tr>
              <td><?php echo$count; ?></td>
              <td><?php echo$selectdata['date']; ?></td>
            
              <td><?php echo$selectdata['name']; ?></td>
              <td><?php echo$selectdata['mail']; ?></td>
             
              <td><?php echo$selectdata['city']; ?></td>
              <td><?php echo$selectdata['number']; ?></td>
              <td><?php echo$selectdata['msg']; ?></td>
              <td><?php echo$selectdata['status']; ?></td>
             
              
              <td><a href="solved.php?id=<?php echo $selectdata['id'];?>" class="btn btn-success">Solved</a></td>
              <td><a href="unsolved.php?id=<?php echo $selectdata['id'];?>" class="btn btn-danger">Unsolved</a></td>

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