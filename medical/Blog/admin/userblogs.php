<?php
session_start();
if ($_SESSION['adminname']=="")
{
  header("location:index.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
   
    
    <title>Users_blogs</title>
   
   <style type="text/css">
     .table
     {
      border: 0px;
     }
   </style>


  </head>
  <body>
    <div class="alert alert-primary">
      
      <h5 class="text-center">View Blogs</h5>
  
    </div>
 <div class="table table-responsive table-bordered">
    <table>
      <thead>
        <th>S.No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Number</th>
        <th>Postname</th>
        <th>Category</th>
        <th>BlogPdf</th>
        <th>Date_Posted</th>
        <th>Status</th>
        <th colspan="2">Actions</th>
      </thead>
    
     <tbody>
      
       
       <?php
       include('../includes/dbconfig.php');
       $selectquery="SELECT * FROM blog_users ORDER BY date DESC";
       $selectdb=mysqli_query($dbconnect,$selectquery);
       $count=0;

       while ($resultdata=mysqli_fetch_assoc($selectdb))
       {
           $mystatus=$resultdata['status'];
           if($mystatus=="Pending")
           {

               $count++;


       ?>
    


       <tr>
         <td><?php echo $count; ?></td>
         <td><?php echo $resultdata['name'];?></td>
         <td><?php echo $resultdata['mail'];?></td>
         <td><?php echo $resultdata['number'];?></td>
         <td><?php echo $resultdata['postname'];?></td>
         <td><?php echo $resultdata['category'];?></td>
         <td><a href="../<?php echo $resultdata['blogpdf'];?>" target="_blank" class="btn btn-primary">Download</a></td>
         <td><?php echo $resultdata['date'];?></td>
         <td><?php echo $resultdata['status'];?></td>
         <td><a href="approved.php?id=<?php echo $resultdata['id'];?>" class="btn btn-success">Approved</a></td>
         <td><a href="unapproved.php?id=<?php echo $resultdata['id'];?>" class="btn btn-danger">Unapprove</a></td>
       </tr>
       
       <?php

     }
   }

       ?>
     </tbody>

    </table>

</div>

<div class="alert alert-primary">
      
      <h5 class="text-center">View Approved Blogs</h5>
  
    </div>



<div class="table table-responsive table-bordered">
    <table>
      <thead>
        <th>S.No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Number</th>
        <th>Postname</th>
        <th>Category</th>
        <th>BlogPdf</th>
        <th>Date_Posted</th>
        <th>Status</th>
        <th colspan="2">Actions</th>
      </thead>
    
     <tbody>
      
       
       <?php
       include('../includes/dbconfig.php');
       $selectquery="SELECT * FROM blog_users ORDER BY date DESC";
       $selectdb=mysqli_query($dbconnect,$selectquery);
       $count=0;

       while ($resultdata=mysqli_fetch_assoc($selectdb))
       {
           $mystatus=$resultdata['status'];
           if($mystatus=="APPROVED")
           {

               $count++;


       ?>
    


       <tr>
         <td><?php echo $count; ?></td>
         <td><?php echo $resultdata['name'];?></td>
         <td><?php echo $resultdata['mail'];?></td>
         <td><?php echo $resultdata['number'];?></td>
         <td><?php echo $resultdata['postname'];?></td>
         <td><?php echo $resultdata['category'];?></td>
         <td><a href="../<?php echo $resultdata['blogpdf'];?>" target="_blank" class="btn btn-primary">Download</a></td>
         <td><?php echo $resultdata['date'];?></td>
         <td><?php echo $resultdata['status'];?></td>
         <td><a href="approved.php?id=<?php echo $resultdata['id'];?>" class="btn btn-success">Approved</a></td>
         <td><a href="unapproved.php?id=<?php echo $resultdata['id'];?>" class="btn btn-danger">Unapprove</a></td>
       </tr>
       
       <?php

     }
   }

       ?>



     </tbody>

    </table>

</div>


<div class="alert alert-primary">
      
      <h5 class="text-center">View Unapproved Blog</h5>
  
    </div>


<div class="table table-responsive table-bordered">
    <table>
      <thead>
        <th>S.No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Number</th>
        <th>Postname</th>
        <th>Category</th>
        <th>BlogPdf</th>
        <th>Date_Posted</th>
        <th>Status</th>
        <th colspan="2">Actions</th>
      </thead>
    
     <tbody>
      
       
       <?php
       include('../includes/dbconfig.php');
       $selectquery="SELECT * FROM blog_users ORDER BY date DESC";
       $selectdb=mysqli_query($dbconnect,$selectquery);
       $count=0;

       while ($resultdata=mysqli_fetch_assoc($selectdb))
       {
           $mystatus=$resultdata['status'];
           if($mystatus=="UNAPPROVED")
           {

               $count++;


       ?>
    


       <tr>
         <td><?php echo $count; ?></td>
         <td><?php echo $resultdata['name'];?></td>
         <td><?php echo $resultdata['mail'];?></td>
         <td><?php echo $resultdata['number'];?></td>
         <td><?php echo $resultdata['postname'];?></td>
         <td><?php echo $resultdata['category'];?></td>
         <td><a href="../<?php echo $resultdata['blogpdf'];?>" target="_blank" class="btn btn-primary">Download</a></td>
         <td><?php echo $resultdata['date'];?></td>
         <td><?php echo $resultdata['status'];?></td>
         <td><a href="approved.php?id=<?php echo $resultdata['id'];?>" class="btn btn-success">Approved</a></td>
         <td><a href="unapproved.php?id=<?php echo $resultdata['id'];?>" class="btn btn-danger">Unapprove</a></td>
       </tr>
       
       <?php

     }
   }

       ?>
     </tbody>

    </table>

</div>




     <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="../js/clean-blog.min.js"></script>

 



    
  </body>
</html>