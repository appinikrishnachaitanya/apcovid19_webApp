<?php
session_start();
include("includes/dbconfig.php");
if ($_SERVER["REQUEST_METHOD"]=="POST")
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
  
  $date=date("Y-m-d");
  $status="Pending";
  $name=mysqli_real_escape_string($dbconnect,$_POST['name']);
  $email=mysqli_real_escape_string($dbconnect,$_POST['email']);
  $phoneno=mysqli_real_escape_string($dbconnect,$_POST['phoneno']);
  $adhaarno=mysqli_real_escape_string($dbconnect,$_POST['adhaarno']);
  $age=mysqli_real_escape_string($dbconnect,$_POST['age']);
  $gender=mysqli_real_escape_string($dbconnect,$_POST['gender']);
  $state=mysqli_real_escape_string($dbconnect,$_POST['state']);
  $city=mysqli_real_escape_string($dbconnect,$_POST['city']);
  $mandal=mysqli_real_escape_string($dbconnect,$_POST['mandal']);
  $district=mysqli_real_escape_string($dbconnect,$_POST['district']);
  $address=mysqli_real_escape_string($dbconnect,$_POST['address']);
  $wardno=mysqli_real_escape_string($dbconnect,$_POST['wardno']);
  $pincode=mysqli_real_escape_string($dbconnect,$_POST['pincode']);
  $zone=mysqli_real_escape_string($dbconnect,$_POST['zone']);
  $ncc=mysqli_real_escape_string($dbconnect,$_POST['ncc']);
  $student=mysqli_real_escape_string($dbconnect,$_POST['student']);
  $size=mysqli_real_escape_string($dbconnect,$_POST['size']);
  $category=mysqli_real_escape_string($dbconnect,$_POST['category']);
  $work=mysqli_real_escape_string($dbconnect,$_POST['work']);
 $v1=rand(1111,9999);
 $v2=rand(1111,9999);
 $v3=$v1.$v2;
 $v3=md5($v3);
 $fnm=$_FILES["image"]["name"];
 $dst="./volunteerimg/".$v3.$fnm;
 $dst1="volunteerimg/".$v3.$fnm;
 move_uploaded_file($_FILES["image"]["tmp_name"],$dst);
 $v4=rand(1111,9999);
 $v5=rand(1111,9999);
 $v6=$v4.$v5;
 $v6=md5($v6);
 $fnm1=$_FILES["document"]["name"];
 $dst2="./documents/".$v6.$fnm1;
 $dst3="documents/".$v6.$fnm1;
 move_uploaded_file($_FILES["document"]["tmp_name"],$dst2);

if ($category=="doctor")
  {
  $qualification=mysqli_real_escape_string($dbconnect,$_POST['qualification']);
 $var1="1";
$var2=rand(1,9);
$var3=rand(11,99);
$var4=rand(111,999);
$regno=$var1.$var2.$var3.$var4;




  $insertquery="INSERT INTO helpinghands_doctors(regno,name,email,phoneno,adhaarno,age,gender,state,mandal,district,city,address,Wardno,pincode,zone,student,ncc,work,size,category,qualification,image,document,status,date) VALUES('$regno','$name','$email','$phoneno','$adhaarno','$age','$gender','$state','$mandal','$district','$city','$address','$wardno','$pincode','$zone','$student','$ncc','$work','$size','$category','$qualification','$dst1','$dst3','$status','$date')";
  $insertresult=mysqli_query($dbconnect,$insertquery);

}


if ($category=="delivaryboy")
  {
$var1="2";
$var2=rand(1,9);
$var3=rand(11,99);
$var4=rand(111,999);
$regno=$var1.$var2.$var3.$var4;

   $insertquery="INSERT INTO helpinghands_delivaryboys(regno,name,email,phoneno,adhaarno,age,gender,state,city,mandal,district,address,Wardno,pincode,zone,student,ncc,work,size,category,image,document,status,date) VALUES('$regno','$name','$email','$phoneno','$adhaarno','$age','$gender','$state','$mandal','$district','$city','$address','$wardno','$pincode','$zone','$student','$ncc','$work','$size','$category','$dst1','$dst3','$status','$date')";
 $insertresult=mysqli_query($dbconnect,$insertquery);

}

if( $category=="speaker")
  {
    $awareness=mysqli_real_escape_string($dbconnect,$_POST['awareness']);
$var1="3";
$var2=rand(1,9);
$var3=rand(11,99);
$var4=rand(111,999);
$regno=$var1.$var2.$var3.$var4;

   $insertquery="INSERT INTO helpinghands_speakers(regno,name,email,phoneno,adhaarno,age,gender,state,mandal,district,city,address,Wardno,pincode,zone,student,ncc,work,size,category,awareness,image,document,status,date) VALUES('$regno','$name','$email','$phoneno','$adhaarno','$age','$gender','$state','$mandal','$district','$city','$address','$wardno','$pincode','$zone','$student','$ncc','$work','$size','$category','$awareness',  '$dst1','$dst3','$status','$date')";
 $insertresult=mysqli_query($dbconnect,$insertquery);

}


if($category=="donor")
  {
  
$var1="4";
$var2=rand(1,9);
$var3=rand(11,99);
$var4=rand(111,999);
$regno=$var1.$var2.$var3.$var4;
$itemdonate=mysqli_real_escape_string($dbconnect,$_POST['itemdonate']);

   $insertquery="INSERT INTO helpinghands_donors(regno,name,email,phoneno,adhaarno,age,gender,state,mandal,district,city,address,Wardno,pincode,zone,student,ncc,work,size,category,itemdonate,image,document,status,date) VALUES('$regno','$name','$email','$phoneno','$adhaarno','$age','$gender','$state','$mandal','$district','$city','$address','$wardno','$pincode','$zone','$student','$ncc','$work','$size','$category','$itemdonate','$dst1','$dst3','$status','$date')";
 $insertresult=mysqli_query($dbconnect,$insertquery);

}


 if ($insertresult)
 {
  echo '<div class="container">
        <div class="row justify-content-center">
        <div class="col-md-10">
        <div class="alert alert-success mt-3" role="alert">
        <h5 class="text-center">Successfully Registered</h5>
        </div>
        </div>
        </div> 
        </div>

  ';
  
header("refresh:2; url=index.php");

 }

 else
 {
    echo "Fail"; 
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
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
   
    <link href="assets/css/appointment.css" rel="stylesheet">
       
 
    <title>Became a Volunteer</title>
    
  
  
  </head>
  <body>
   

   <div class="container-fluid">
  
   <div class="row justify-content-center mt-5">
    <div class="col">
  
      
      <div class="card border border-success">
        <div class="alert alert-info" role="alert">
         <h5 class="text-center ">Become a Volunteer</h5>
      </div>
        <div class="card-body">
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form-group" enctype="multipart/form-data">
           
        
        <div class="alert alert-secondary  text-center" role="alert">
              <h5><span><i class="fas fa-user"></i></span>Personal Information</h5>
          </div>
        <div class="row mt-2">
          
        <div class="col-lg-6">
        <label for="user">Name:<span style="color: red;">*</span></label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-user"></i></div>
         </div>
         <input type="text" class="form-control" id="user" placeholder="name" name="name" required>
         </div>
     </div>
        
         
          <div class="col-lg-6">
          <label for="email">Email:<span style="color: red;">*</span></label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-envelope-open-text"></i></div>
         </div>
         <input type="email" class="form-control " id="email" placeholder="@gmail.com" name="email" required>
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
         <input type="number" class="form-control " id="phone" placeholder="9098791234" name="phoneno"required>
         </div>
     </div>

          
           <div class="col-md-6">
          <label for="adhaar">Adhaar Number:<span style="color: red;">*</span></label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-id-card"></i></div>
         </div>
         <input type="number" class="form-control " id="adhaar" placeholder="XXXX" name="adhaarno" required>
         </div>

     </div>
 </div>

        
           <div class="row mt-2">

           <div class="col-md-6">
          <label for="age">Age:<span style="color: red;">*</span></label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-user"></i></div>
         </div>
         <input type="number" class="form-control " id="age" placeholder="" name="age" required>
         </div>
     </div>

          
           <div class="col-md-6">
          <label for="gender">Gender:<span style="color: red;">*</span></label>
          <select class="form-control" name="gender">
            <option selected="">Select</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
          </select>
     </div>
 </div>
               
         


          
          <div class="alert alert-secondary mt-3" role="alert">
           <h5 class="text-center"><span><i class="far fa-map"></i></span> Your Address</h5>
          </div>
          


         <div class="row mt-2">
          <div class="col-lg-6">

          
          
          <label for="state">State:<span style="color: red;">*</span></label>
          <select class="form-control" name="state">
          <option value="AN">Andaman and Nicobar Islands</option>
          </select>

      </div>
         
          <div class="col-lg-6">  
         <label for="cty">District:<span style="color: red;">*</span></label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="far fa-map"></i></div>
         </div>
         <input type="text" class="form-control " id="cty" placeholder="XXXX" name="district" required>
         </div>
     </div>
 </div> 


        
          <div class="row mt-2">
          <div class="col-lg-6">

          
          
          <label for="add">City/Village<span style="color: red;">*</span></label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
         </div>
         <input type="text" class="form-control " id="add" placeholder="XXXX" name="city" required>
         </div>
     </div>

          <div class="col-lg-6">  
         <label for="lmark">Mandal/Block<span style="color: red;">*</span></label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="far fa-map"></i></div>
         </div>
         <input type="text" class="form-control " id="lmark" placeholder="XXXX" name="mandal" required>
         </div>
     </div>
 </div>

       





      


       
          <div class="row mt-2">
          <div class="col-lg-6">

          
          
          <label for="add">Address:(street/area):<span style="color: red;">*</span></label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
         </div>
         <input type="text" class="form-control " id="add" placeholder="XXXX" name="address" required>
         </div>
     </div>

          <div class="col-lg-6">  
         <label for="lmark">Wardno:<span style="color: red;">*</span></label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="far fa-map"></i></div>
         </div>
         <input type="text" class="form-control " id="lmark" placeholder="XXXX" name="wardno" required>
         </div>
     </div>
 </div>


        <div class="row mt-2">
          <div class="col-lg-6">

          
          
          <label for="zcode">Zip Code:<span style="color: red;">*</span></label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
         </div>
         <input type="number" class="form-control " id="zcode" placeholder="XXXX" name="pincode" required>
         </div>
     </div>

          <div class="col-lg-6">  
         <label for="zne">ZONE:<span style="color: red;">*</span></label>
         <select class="form-control" name="zone">
          <option selected disabled>Select</option>
          <option>RED</option>
          <option>Orange</option>
          <option>Green</option>
         </select>
     </div>
 </div>

  <div class="alert alert-secondary mt-3" role="alert">
   
       <h5 class="text-center">Volunteer Details</h5>   
   
  </div>
     
   <div class="row mb-3">
   <div class="col-lg-6">
   <label>Are You a student</label>
   <select class="form-control" name="student">
    <option selected disabled>Select</option>
     <option>Yes</option>
     <option>NO</option>
   </select> 
 </div>
  <div class="col-lg-6">
   <label>Are You a NCC Student</label>
   <select class="form-control" name="ncc">
    <option selected disabled>Select</option>
     <option>YES</option>
     <option>NO</option>
   </select> 
 </div>
</div>

   <div class="row mb-3">
   <div class="col-lg-6">
   <label>Where would You like to Work?</label>
   <select class="form-control" name="work">
    <option selected disabled>Select</option>
     <option>Within Zone</option>
     <option>Outside</option>
   </select> 
 </div>
  <div class="col-lg-6">
   <label>Are you Team or Individual</label>
   <select class="form-control" name="size">
    <option selected disabled>Select</option>
     <option>Team</option>
     <option>Individual</option>
   </select> 
 </div>
</div>


     <label>Choose:</label>
    <select class="form-control mb-3" onchange="changeStatus()" id="volunteertype" name="category">
      <option selected disabled>select</option>
      <option value="doctor">Be a Doctor/Nurse</option>
      <option value="donor">Be a Donor</option>
      <option value="speaker">Be a Speaker</option>
      <option value="delivaryboy">Be a Food supplier </option>
    </select>  
   
   
   <div class="doctor" style="display:none;">
    <label>Choose:</label>
    <select class="form-control doctor" name="qualification" >
      
      <option>
        MBBS    
      </option>
      
      <option>
        MD
      </option>
      <option>
       B.Pharma
     </option>
     <option>
       Currently Studying
     </option>

    </select>
   </div>
     

     <div class="speaker" style="display: none;">
      <label>How You Create Awareness about Covid-19 ?</label>
     <textarea   placeholder="How you create awareness on Corona Virus" name="awareness" class="form-control speaker" rows="4" cols="20" >
       
     </textarea>
   </div>

   <div class="donor" style="display: none;">
      <label>What would like to donate ?</label>
      <select  class="form-control donate" name="itemdonate">
      <option>Masks</option>
      <option>PPE kits</option>
      <option>Essential items</option>
      <option>Other</option>
    </select>
   </div>

   <div class="alert alert-secondary mt-5" role="alert">
  <h5 class="text-center"><i class="fas fa-arrow-circle-up"></i>Uploads</h5>
</div>
 <div class="row justify-content-center  mt-5 uploads">
  
  <div class="col-lg-6 mt-3">
  <div class="iconup">
   <i class="fas fa-user fa-2x"></i>
   </div>
      <br>
    <label>Upload  Image</label>
    <br>
    <input type="file" name="image">
    
    </div>


    <div class="col-lg-6 mt-3">
           
    <div class="iconup">
    <i class="fas fa-file-pdf fa-2x"></i>
     </div>
    <br>

    <label>Upload Supported documents</label>
    <br>
    <input type="file" name="document">
  
         
        </div>
   
    </div>
             
             <div class="row">
            <div class="col">
             <input type="submit" value="Submit" class="btn btn-success btn-block mt-3 mb-3" name="submit_btn">
             </div>
         </div>


    </form>
  </div>
</div>
</div>
</div>
</div>


 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="assets/js/options.js"></script>
 
 
    
  </body>
</html>