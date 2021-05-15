<?php 
session_start();

include('../includes/dbconfig.php');

if ($_SERVER["REQUEST_METHOD"]=="POST")
{
  $city=mysqli_real_escape_string($dbconnect,$_POST['city']);
  $city=strtoupper($city);
$var1=rand(11,99);
$var2=rand(1,9);
$var3=substr($city,0,3);
$userid=$var3."F".$var1.$var2;
$date=date("Y-m-d");
  $fname=mysqli_real_escape_string($dbconnect,$_POST['fname']);
  $password=mysqli_real_escape_string($dbconnect,$_POST['password']);
  $repeatpassword=mysqli_real_escape_string($dbconnect,$_POST['repeatpassword']);
  $email=mysqli_real_escape_string($dbconnect,$_POST['email']);
  $phoneno=mysqli_real_escape_string($dbconnect,$_POST['phoneno']);
  $district=mysqli_real_escape_string($dbconnect,$_POST['district']);
  $district=strtoupper($district);
  $mandal=mysqli_real_escape_string($dbconnect,$_POST['mandal']);
  $mandal=strtoupper($mandal);
  $wardno=mysqli_real_escape_string($dbconnect,$_POST['wardno']);
  $lname=mysqli_real_escape_string($dbconnect,$_POST['lname']);


  $pass=password_hash($password, PASSWORD_BCRYPT);
  $repass=password_hash($repeatpassword, PASSWORD_BCRYPT);

  $selectquery="SELECT * FROM fooddelivery_login where email='$email' or phoneno='$phoneno'";
  $selectresult=mysqli_query($dbconnect,$selectquery);
  $mailcount=mysqli_num_rows($selectresult);  
  if ($mailcount>0)
  {
    echo "You are already Registered";
  }
  else 
  {
    if ($password===$repeatpassword)
    {
    $insertquery= "INSERT INTO fooddelivery_login(userid,fname,lname,email,phoneno,password,repeatpassword,district,mandal,wardno,date,city) VALUES('$userid','$fname','$lname','$email','$phoneno','$pass','$repass','$district','$mandal','$wardno','$date','$city')";
    $resultquery=mysqli_query($dbconnect,$insertquery);
    }
    
    if($resultquery)
    {
        echo '<div class="container">
        <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="alert alert-success mt-3" role="alert">
        <h5 class="text-center">Successfullyregistered</h5>
        </div>
        </div>
        </div> 
        </div>

  ';
    }

    else{
        echo '<div class="container">
        <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="alert alert-danger mt-3" role="alert">
        <h5 class="text-center">Check Password</h5>
        </div>
        </div>
        </div> 
        </div>

  ';
    }


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
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/reg.css">

    <title>Register</title>
  </head>
  <body>

    <div class="container">
      <div class="row justify-content-center">
      <div class="col">
      <div class="card mt-5">
        <div class="card-body">
          <h3 class="text-center text-dark">Register</h3>
          <hr>
          
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form-group">

          
            <label for="firstname">First Name:</label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-user"></i></div>
         </div>
         <input type="text" class="form-control" id="firstname" placeholder="fname" name="fname">
         </div>
       
        

    
         <label for="lastname">Last Name:</label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-user"></i></div>
         </div>
         <input type="text" class="form-control" id="lastname" placeholder="lname" name="lname">
         </div>
    
         
          

          
          <label for="email">Email:</label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-envelope-open-text"></i></div>
         </div>
         <input type="email" class="form-control" id="email" placeholder="@gmail.com" name="email">
         </div>
 

          
         
          <label for="phonenumber">Mobile Number:</label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-phone"></i></div>
         </div>
         <input type="number" class="form-control" id="phonenumber" placeholder="9987966969" name="phoneno">
         </div>
    

          <label for="password">Password:</label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-lock"></i></div>
         </div>
         <input type="password" class="form-control" id="password" placeholder="****" name="password">
         </div>
    
          
      
          <label for="repassword">Repeat-Password:</label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-lock"></i></div>
         </div>
         <input type="password" class="form-control" id="repassword" placeholder="****" name="repeatpassword">
         </div>


     <label for="dis">district</label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-map"></i></div>
         </div>
         <input type="text" class="form-control" id="dis" placeholder="" name="district">
         </div>

          <label for="cty">city</label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-map"></i></div>
         </div>
         <input type="text" class="form-control" id="cty" placeholder="" name="city">
         </div>


          <label for="mndal">mandal</label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-map"></i></div>
         </div>
         <input type="text" class="form-control" id="repassword" placeholder="" name="mandal">
         </div>


          <label for="ward">wardno(Enter without zero for Single digit)</label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-map"></i></div>
         </div>
         <input type="text" class="form-control" id="ward" placeholder="" name="wardno">
         </div>
      
         




          <input type="submit" class="btn btn-lg btn-block btn-primary" value="Register" name="register_btn">
          </form>
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