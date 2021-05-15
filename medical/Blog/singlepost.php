<?php
$id=$_GET['id'];
include('includes/dbconfig.php');
$selectquery= "SELECT * FROM blog_post WHERE id='$id'";
$selectdb=mysqli_query($dbconnect,$selectquery);
$selectdata= mysqli_fetch_assoc($selectdb);

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Post</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">

 <style type="text/css">
   img
   {
    border-radius: 20px;
   }
 </style>

</head>

<body>

  <!-- Navigation -->
 
  <div class="container">
  
 

   <img  src="admin/<?php echo $selectdata['pimage'];?>" class="image-fluid mt-5" width="100%" height="500">
  


   

   <div class="card">
    <div class="card-body " style="background-color: #fff9e5;">
    
   <h5 class="text-center"><?php echo $selectdata['pname']; ?> </h5>


      <?php echo nl2br($selectdata['post']); ?>
    
     Posted:
     <br>
     by <?php echo $selectdata['written']; ?>
     <br>
     <?php echo $selectdata['posted_at']; ?>

    </div>


  </div>


  </div>

 
  <!-- Page Header -->
 
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>

</html>

