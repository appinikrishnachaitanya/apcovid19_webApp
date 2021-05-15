<?php
session_start();
if ($_SESSION['adminname']=="")
{
  header("location:index.php");
}





if($_SERVER['REQUEST_METHOD']=="POST")
{
  $date=date("Y-m-d");
include('../includes/dbconfig.php');
	$name=mysqli_real_escape_string($dbconnect,$_POST['name']);
	$email=mysqli_real_escape_string($dbconnect,$_POST['email']);
	$phoneno=mysqli_real_escape_string($dbconnect,$_POST['phoneno']);
	$gender=mysqli_real_escape_string($dbconnect,$_POST['gender']);
	$pname=mysqli_real_escape_string($dbconnect,$_POST['pname']);
	$written=mysqli_real_escape_string($dbconnect,$_POST['written']);
	$reason=mysqli_real_escape_string($dbconnect,$_POST['reason']);
	$pcat=mysqli_real_escape_string($dbconnect,$_POST['pcat']);
    $post=mysqli_real_escape_string($dbconnect,$_POST['post']);
    $v1=rand(1111,9999);
    $v2=rand(1111,9999);
    $v3=$v1.$v2;
    $v3=md5($v3);
    $fnm=$_FILES["pimage"]["name"];
    $dst="./postimages/".$v3.$fnm;
    $dst1="postimages/".$v3.$fnm;
    move_uploaded_file($_FILES["pimage"]["tmp_name"],$dst);
    
    $insertquery= "INSERT INTO blog_post(name,email,phoneno,gender,pname,written,reason,pcat,post,pimage,date) VALUES('$name','$email','$phoneno','$gender','$pname','$written','$reason','$pcat','$post','$dst1','$date')";
    $insertresult=mysqli_query($dbconnect,$insertquery);

    if ($insertresult)
    {
    	 echo '<div class="container">
        <div class="row justify-content-center">
        <div class="col-md-10">
        <div class="alert alert-success mt-3" role="alert">
        <h5 class="text-center">Successfully Sended</h5>
        </div>
        </div>
        </div> 
        </div>

  ';
  
    }
    else 
    {
    	echo "Fail";
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

  <title>Create Blog</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="../css/addpost.css">

 </head>
 <body>
 
   
   <div class="container-fluid">
  
   <div class="row">
    <div class="col">
  
      
      <div class="card mt-5 border border-success">
        <div class="alert alert-info" role="alert">
         <h5 class="text-center ">BLOG CMS</h5>
      </div>
       <u><h5 class="text-center">Write a Post</h5></u>
        <div class="card-body">
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" multipart="" class="form-group" enctype="multipart/form-data">
          
        
        <div class="alert alert-secondary mt-2 text-center" role="alert">
              <h5><span><i class="fas fa-user"></i></span>Personal Information</h5>
          </div>
        <div class="row mt-2">
          
        <div class="col-lg-6">
        <label for="user">Name:<span style="color: red;">*</span></label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-user"></i></div>
         </div>
         <input type="text" class="form-control" id="user" placeholder="name" name="name">
         </div>
     </div>
        
         
          <div class="col-lg-6">
          <label for="email">Email:<span style="color: red;">*</span></label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-envelope-open-text"></i></div>
         </div>
         <input type="email" class="form-control " id="email" placeholder="@gmail.com" name="email">
         </div>
     </div>
 </div>    


           <div class="row mt-2">

           <div class="col-md-6">
          <label for="phone">Phone Number:<span style="color: red;">*</span></label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-phone"></i></div>
         </div>
         <input type="number" class="form-control " id="phone" placeholder="9098791234" name="phoneno">
         </div>
     </div>

          
           <div class="col-md-6">
          <label >Gender:<span style="color: red;">*</span></label>
          <select class="form-control" name="gender">
            <option selected="">Select</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
     </div>
 </div>


<div class="alert alert-secondary mt-3 text-center" role="alert">
              <h5><span><i class="fas fa-rss-square"></i></span> Create Blog</h5>
          </div>
<div class="row mt-2">
	
   
   <div class="col-lg-6">
        <label for="user">Post Name:<span style="color: red;">*</span></label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fab fa-blogger"></i></div>
         </div>
         <input type="text" class="form-control" id="user" placeholder="name" name="pname">
         </div>
     </div>
        
         
          <div class="col-lg-6">
          <label for="text">Written by:<span style="color: red;">*</span></label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fab fa-blogger"></i></div>
         </div>
         <input type="text" class="form-control " id="email" placeholder="@gmail.com" name="written">
         </div>
     </div>
 </div>    

  <div class="row mt-2">

           <div class="col-md-6">
          <label for="phone">Reason to Post ?<span style="color: red;">*</span></label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fab fa-blogger"></i></div>
         </div>
         <input type="text" class="form-control " id="phone" placeholder="" name="reason">
         </div>
     </div>

          
           <div class="col-md-6">
          <label >Category<span style="color: red;">*</span></label>
          <select class="form-control" name="pcat">
            <option selected="">Select</option>
            <option value="Covid19">Covid-19</option>
            <option value="mothercare">MotherCare</option>
            <option value="metalcare">MetalCare</option>
           <option value="other">other</option>
          </select>
     </div>
 </div>

<div class="alert alert-secondary mt-3" role="alert">
<h5 class="text-center">Write here</h5>
</div>
 <div class="row mt-2">
 	<div class="col">
 	
 	<br>

 	
 		<textarea name="post" class="form-control" rows="10" cols="100">
 			

 		</textarea>



     </div>
 </div>

 <div class="alert alert-secondary mt-5" role="alert">
  <h5 class="text-center"><i class="fas fa-arrow-circle-up"></i>Uploads</h5>
</div>
 <div class="row justify-content-center  mt-5 uploads">
  
  <div class="col">
  <div class="iconup">
<i class="far fa-image fa-3x"></i>
   </div>
   <div class="uploadbtn">
    <input type="file" name="pimage">
    </div>
    </div>


    </div>


   <input type="submit" value="POST" name="post_btn" class="btn btn-success btn-block mt-3">


</form>
</div>
</div>
</div>
</div>
</div>




  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="../js/clean-blog.min.js"></script>

</body>

</html>

