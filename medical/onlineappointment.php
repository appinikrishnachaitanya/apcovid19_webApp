<?php
session_start();
include("includes/dbconfig.php");

if ($_SERVER["REQUEST_METHOD"]=="POST")
{
   
  if (empty($_POST['gender']) || empty($_POST['zone']) || empty($_POST['state']) || empty($_POST['medicines']) || empty($_POST['symptoms']) || empty($_POST['travelhistory']) || empty($_POST['appdate']) || empty($_POST['appslot']))
  {

  ?>

  <script type="text/javascript">
    alert("Select all fields");
  </script>

 <?php

  }

  else
  { 

  $var1=rand(1,9);
  $var2=rand(10,99);
  $var3=rand(111,999);
  $alphabets="ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
  $alphabets2="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $shuffle=str_shuffle($alphabets);
  $shuffle2=str_shuffle($alphabets2);
  $var4=substr($shuffle, 0,2);
  $var5=substr($shuffle2,0,2);
  $regno=$var1.$var5.$var2.$var3.$var4;
  $date=date("Y-m-d");
  $name=mysqli_real_escape_string($dbconnect,$_POST['name']);
  $email=mysqli_real_escape_string($dbconnect,$_POST['email']);
  $phoneno=mysqli_real_escape_string($dbconnect,$_POST['phoneno']);
  $adhaarno=mysqli_real_escape_string($dbconnect,$_POST['adhaarno']);
  $age=mysqli_real_escape_string($dbconnect,$_POST['age']);
  $gender=mysqli_real_escape_string($dbconnect,$_POST['gender']);
  $state=mysqli_real_escape_string($dbconnect,$_POST['state']);
  $city=mysqli_real_escape_string($dbconnect,$_POST['city']);
  $address=mysqli_real_escape_string($dbconnect,$_POST['address']);
  $landmark=mysqli_real_escape_string($dbconnect,$_POST['landmark']);
  $pincode=mysqli_real_escape_string($dbconnect,$_POST['pincode']);
  $service=mysqli_real_escape_string($dbconnect,$_POST['service']);
  $symptoms=mysqli_real_escape_string($dbconnect,$_POST['symptoms']);
  $travelhistory=mysqli_real_escape_string($dbconnect,$_POST['travelhistory']);
  $medicines=mysqli_real_escape_string($dbconnect,$_POST['medicines']);
  $appdate=mysqli_real_escape_string($dbconnect,$_POST['appdate']);
  $appslot=mysqli_real_escape_string($dbconnect,$_POST['appslot']);
  $v1=rand(1111,9999);
$v2=rand(1111,9999);
$v3=$v1.$v2;
$v3=md5($v3);
$fnm=$_FILES["image"]["name"];
$dst="./patientimg/".$v3.$fnm;
$dst1="patientimg/".$v3.$fnm;
move_uploaded_file($_FILES["image"]["tmp_name"],$dst);
$v4=rand(1111,9999);
$v5=rand(1111,9999);
$v6=$v4.$v5;
$v6=md5($v6);
$fnm1=$_FILES["document"]["name"];
$dst2="./document/".$v6.$fnm1;
$dst3="document/".$v6.$fnm1;
move_uploaded_file($_FILES["document"]["tmp_name"],$dst2);

 $insertquery="INSERT INTO medicare_onlineappointment(regno,name,email,phoneno,adhaarno,age,gender,state,city,address,landmark,pincode,service,symptoms,travelhistory,medicines,appdate,appslot,image,document,date) VALUES('$regno','$name','$email','$phoneno','$adhaarno','$age','$gender','$state','$city','$address','$landmark','$pincode','$service','$symptoms','$travelhistory','$medicines','$appdate','$appslot','$dst1','$dst3','$date')";
 $insertresult=mysqli_query($dbconnect,$insertquery);

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
    <link rel="stylesheet" type="text/css" href="assets/css/appointment.css">
    <title>Online Appointment</title>
    

  
  </head>
  <body>
    <div class="container">
 
   <div class="row justify-content-center">
    <div class="col-md-10">
  
      
      <div class="card mt-5 border border-success">
        <div class="alert alert-info" role="alert">
         <h5 class="text-center ">Online Medical Services</h5>
      </div>
       <u><h5 class="text-center">Online Appointment Booking</h5></u>
        <div class="card-body">
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form-group" enctype="multipart/form-data">
          
        
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
         <input type="number" class="form-control " id="phone" placeholder="9098791234" name="phoneno" required>
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
          <label for="page">Age:<span style="color: red;">*</span></label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-user"></i></div>
         </div>
         <input type="number" class="form-control " id="page" placeholder="" name="age" required>
         </div>
     </div>

          
           <div class="col-md-6">
          <label >Gender:<span style="color: red;">*</span></label>
          <select class="form-control" name="gender">
            <option value="" selected disabled>Select</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
     </div>
 </div>
               
         


          
          <div class="alert alert-secondary mt-3" role="alert">
           <h5 class="text-center"><span><i class="far fa-map"></i></span>Your Address</h5>
          </div>
          


         <div class="row mt-2">
          <div class="col-lg-6">

          
          
          <label >State:<span style="color: red;">*</span></label>
          <select class="form-control" name="state">
             <option value="" selected disabled>Select</option>
          <option>AndhraPradesh</option>
          <option >ANDAMAN AND NICOBAR ISLANDS</option><option> ARUNACHAL PRADESH</option><option> ASSAM</option><option >BIHAR</option><option >CHANDIGARH</option><option> CHHATTISGARH</option><option> DADRA AND NAGAR HAVELI</option><option> DAMAN AND DIU</option><option >DELHI</option><option >GOA</option><option >GUJARAT</option><option >HARYANA</option><option >HIMACHAL PRADESH</option><option >JAMMU AND KASHMIR</option><option >JHARKHAND</option><option >KARNATAKA</option><option >KERALA</option><option >LADAKH</option><option >LAKSHADWEEP</option><option >MADHYA PRADESH</option><option >MAHARASHTRA</option><option >MANIPUR</option><option >MEGHALAYA</option><option >MIZORAM</option><option >NAGALAND</option><option >ODISHA</option><option >PUDUCHERRY</option><option >PUNJAB</option><option >RAJASTHAN</option><option >SIKKIM</option><option >TAMIL NADU</option><option >TELANGANA</option><option >TRIPURA</option><option >UTTAR PRADESH</option><option >UTTARAKHAND</option><option >WEST BENGAL</option></select>

      </div>
         
          <div class="col-lg-6">  
         <label for="place">City:<span style="color: red;">*</span></label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="far fa-map"></i></div>
         </div>
         <input type="text" class="form-control " id="place" placeholder="XXXX" name="city" required>
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
         <label for="nplace">Landmark:<span style="color: red;">*</span></label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
         </div>
         <input type="text" class="form-control " id="nplace" placeholder="XXXX" name="landmark" required>
         </div>
     </div>
 </div>


        <div class="row mt-2">
          <div class="col-lg-6">

          
          
          <label for="pcode">Zip Code:<span style="color: red;">*</span></label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
         </div>
         <input type="number" class="form-control " id="pcode" placeholder="XXXX" name="pincode" required>
         </div>
     </div>

          <div class="col-lg-6">  
         <label for="nplace">ZONE:<span style="color: red;">*</span></label>
         <select class="form-control" name="zone">
          <option value="" selected disabled>Select</option>
          <option>RED</option>
          <option>Orange</option>
          <option>Green</option>
         </select>
     </div>
 </div>



       



        <div class="alert alert-secondary mt-3" role="alert">
           <h5 class="text-center"><span><i class="fas fa-id-card"></i></span> Booking Appointment</h5>
          </div>




           
      

      
     <div class="row mt-2">
      <div class="col-lg-6">
  <label>Service:</label>
  <select class="form-control" name="service">
    <option value="" selected disabled>Select</option>
    <option>General Checkup(OP)</option>
    <option>Cousenlling(Covid19)</option>
    <option>MotherCare(Pregrant Women's)</option>
  </select>
    
  </div>
  <div class="col-lg-6">
  <label>Symptoms:</label>
   <select class="form-control" name="symptoms">
    <option value="" selected disabled>Select</option>
    <option>Fever</option>
    <option>Cold</option>
    <option>Breathing Difficult</option>
    <option>other</option>
  </select>
    
  </div>
</div>

    <div class="row mt-2">
      <div class="col-lg-6">
  <label>Travel History:</label>
  <select class="form-control" name="travelhistory">
    <option value="" selected disabled>Select</option>
    <option>Migrated From other State/Country</option>
    <option>Contacted Covid19 Person</option>
    <option>Recently,Moved to Containment Zone</option>
    <option>None</option>
  </select>
    
  </div>
  <div class="col-lg-6">
  <label>Medicines</label>
   <select class="form-control" name="medicines">
    <option value="" selected disabled>Select</option>
    <option>Delivery to Home</option>
    <option>Only Prescription</option>
  
  </select>
    
  </div>
</div>


   <div class="row mt-2">
          <div class="col-lg-6">
           <label>Appointment Date:</label>
  <input type="Date" class="form-control" value="" placeholder="Name" id="" name="appdate" >
    
  </div>
  <div class="col-lg-6">
  <label>Appointment Slot:</label>
  <select class="form-control" name="appslot">
    <option value="" selected disabled>Select</option>
    <option>10AM</option>
    <option>12PM</option>
    <option>2PM</option>
    <option>4PM</option>
  </select>

</div>
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
    <label>Upload Patient Image</label>
    <br>
    <input type="file" name="image">
    
    </div>


    <div class="col-lg-6 mt-3">
           
    <div class="iconup">
    <i class="fas fa-file-pdf fa-2x"></i>
     </div>
    <br>

    <label>Upload Any Medical Files</label>
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
 
    
  </body>
</html>