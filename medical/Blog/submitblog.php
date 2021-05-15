<?php
session_start();
include('includes/dbconfig.php');
if (isset($_POST['send_btn']))
{

if (empty($_POST['category']))
  {
  
  ?>
  
  <script type="text/javascript">
    alert("Select category");
  </script> 

  <?php
   }
   else
   {

  $status="Pending";
  $date=date("Y-m-d");
  $name=mysqli_real_escape_string($dbconnect,$_POST['name']);
  $mail=mysqli_real_escape_string($dbconnect,$_POST['mail']);
  $number=mysqli_real_escape_string($dbconnect,$_POST['number']);
  $city=mysqli_real_escape_string($dbconnect,$_POST['place']);
  $msg=mysqli_real_escape_string($dbconnect,$_POST['msg']);
  $postname=mysqli_real_escape_string($dbconnect,$_POST['postname']);
  $category=mysqli_real_escape_string($dbconnect,$_POST['category']);
  
$filetype=($_FILES['upload']['type']);
 $targetfolder='upload/';
  $targetdest=$targetfolder.basename($_FILES['upload']['name']);

if($filetype=='application/pdf')
{
 
  move_uploaded_file($_FILES['upload']['tmp_name'], $targetdest);
  
 
  
 




 $insertquery="INSERT INTO blog_users(name,mail,number,city,msg,status,postname,category,blogpdf,date) VALUES('$name','$mail','$number','$city','$msg','$status','$postname','$category','$targetdest','$date')";
  $insertresult=mysqli_query($dbconnect,$insertquery);

  if ($insertresult)
  {
 
     echo '<div class="container">
        <div class="row justify-content-center">
        <div class="col">
        <div class="alert alert-success mt-3" role="alert" id="printbtn">
        <h5 class="text-center">Successfully Sended </h5>
        </div>
        </div>
        </div> 
        </div>

  ';
}

else

{
  echo "fail";
}

}

else 
{
  echo '<h3 style="text-align:center; color:red;">Only PDF DOCUMENTS ARE ALLOWED</h3>';
}
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

 
 
</head>
<body>
 
<div class="container">
<div class="row justify-content-center">
  <div class="col">
	<div class="card mt-5 mb-5" style="background-color:#EEEED1; ">
		<div class="card-body" >

			<h5 class="text-center">Contact Us</h5>
			<hr>
        
         <form action="" method="POST" class="form-group" enctype="multipart/form-data">

        <label for="user">Name:</label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-user"></i></div>
         </div>
         <input type="text" class="form-control" id="user" placeholder="name" name="name" required>
         </div>
     

         <label for="email">Email</label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-user"></i></div>
         </div>
         <input type="email" class="form-control" id="email" placeholder="@gmail.com" name="mail" required>
         </div>


         <label for="phone">Phone Number</label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-user"></i></div>
         </div>
         <input type="number" class="form-control" id="phone" placeholder="9098791234" name="number" required>
         </div>


         <label for="city">City:</label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-user"></i></div>
         </div>
         <input type="text" class="form-control" id="city" placeholder="place" name="place" required>
         </div>
         
         
        


         <label for="pname">Postname:</label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-blog"></i></div>
         </div>
         <input type="text" class="form-control" id="city" placeholder="pname" name="postname" required="">
         </div>

            
         <label>Category</label>
         <select class="form-control" name="category">
           <option value="">Select</option>
           <option value="covid19">Covid-19</option>
           <option value="mothercare">Mothercare(PregnantWomen)</option>
           <option value="mentalcare">MentalCare</option>
           <option value="other">other</option>

         </select>

         <label>Upload Your Post (PDF FORMAT-->it includes both content and author information with photo)</label>
         <input type="file" name="upload" class="form-control" >


         
         <label>Explain,How Your Post Helps to Public ? </label>
         <textarea name="msg" cols="50" rows="4" class="form-control" required>
         	
         </textarea>


        <input type="submit" value="Send" name="send_btn" class="btn btn-success mt-5">

    </form>
</div>
</div>
</div>
</div>
</div>


  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>
 
    
  </body>
</html>