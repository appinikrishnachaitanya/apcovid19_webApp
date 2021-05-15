<?php
include('session.php');
include("includes/dbconfig.php");
if ($_SERVER["REQUEST_METHOD"]=="POST")
{

  $adhaarno=mysqli_real_escape_string($dbconnect,$_POST['adhaarno']);

  $selectquery="SELECT * FROM ashaworkers WHERE adhaarno='$adhaarno'";
  $selectconn=mysqli_query($dbconnect,$selectquery);
  $selectcount=mysqli_num_rows($selectconn);

  if ($selectcount>0)
  {
    echo '<h3 style="color:red; text-align:center">AdhaarNumber Already Registered</h3>';
  }

  else
  {
  
  if (empty($_POST['reason'] && ($_POST['symptoms']) && ($_POST['travelhistory']) && ($_POST['migrationtype']) && ($_POST['healthcondition']) && ($_POST['covid']) && ($_POST['diseases']) ) )
  {
  
  ?>
  
  <script type="text/javascript">
    alert("Select all fields");
  </script> 

  <?php
  }
  
  else
  {
  
   $var1=$_POST['wardno'];
   $var2=rand(1111,9999);
   $regno= $var1.'-'.$var2;

  $date=date("Y-m-d");
  $addedby=$_SESSION['adminid'];
  
  $name=mysqli_real_escape_string($dbconnect,$_POST['name']);
  $email=mysqli_real_escape_string($dbconnect,$_POST['email']);
  $phoneno=mysqli_real_escape_string($dbconnect,$_POST['phoneno']);
  
  $age=mysqli_real_escape_string($dbconnect,$_POST['age']);
  $gender=mysqli_real_escape_string($dbconnect,$_POST['gender']);
  $state=mysqli_real_escape_string($dbconnect,$_POST['state']);
  $city=mysqli_real_escape_string($dbconnect,$_POST['city']);
  $mandal=mysqli_real_escape_string($dbconnect,$_POST['mandal']);
  $mandal=strtoupper($mandal);
  $district=mysqli_real_escape_string($dbconnect,$_POST['district']);
  $district=strtoupper($district);
  $address=mysqli_real_escape_string($dbconnect,$_POST['address']);
  $wardno=mysqli_real_escape_string($dbconnect,$_POST['wardno']);
  $pincode=mysqli_real_escape_string($dbconnect,$_POST['pincode']);
  $zone=mysqli_real_escape_string($dbconnect,$_POST['zone']);
  $travelhistory=mysqli_real_escape_string($dbconnect,$_POST['travelhistory']);
  $symptoms=mysqli_real_escape_string($dbconnect,$_POST['symptoms']);
  $migrationtype=mysqli_real_escape_string($dbconnect,$_POST['migrationtype']);
  $healthcondition=mysqli_real_escape_string($dbconnect,$_POST['healthcondition']);
  $reason=mysqli_real_escape_string($dbconnect,$_POST['reason']);
  $status=mysqli_real_escape_string($dbconnect,$_POST['covid']);
  $diseases=mysqli_real_escape_string($dbconnect,$_POST['diseases']);
 $v1=rand(1111,9999);
 $v2=rand(1111,9999);
 $v3=$v1.$v2;
 $v3=md5($v3);
 $fnm=$_FILES["image"]["name"];
 $dst="./img/".$v3.$fnm;
 $dst1="img/".$v3.$fnm;
 move_uploaded_file($_FILES["image"]["tmp_name"],$dst);
 $v4=rand(1111,9999);
 $v5=rand(1111,9999);
 $v6=$v4.$v5;
 $v6=md5($v6);
 $fnm1=$_FILES["document"]["name"];
 $dst2="./documents/".$v6.$fnm1;
 $dst3="documents/".$v6.$fnm1;
 move_uploaded_file($_FILES["document"]["tmp_name"],$dst2);





  $insertquery="INSERT INTO ashaworkers(regno,name,email,phoneno,adhaarno,age,gender,state,mandal,district,city,address,Wardno,pincode,zone,symptoms,travelhistory,reason,migrationtype,healthcondition,diseases,image,document,status,date,addedby) VALUES('$regno','$name','$email','$phoneno','$adhaarno','$age','$gender','$state','$mandal','$district','$city','$address','$wardno','$pincode','$zone','$symptoms','$travelhistory','$reason','$migrationtype','$healthcondition','$diseases','$dst1','$dst3','$status','$date','$addedby')";
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
  
header("refresh:2; url=dashboard.php");

 }

 else
 {
    echo "Fail"; 
 }
  
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
       
 
    <title>add Patient</title>
    
  
  
  </head>
  <body>
   

   <div class="container-fluid">
  
   <div class="row justify-content-center mt-5">
    <div class="col">
  
      
      <div class="card border border-success">
        <div class="alert alert-info" role="alert">
         <h5 class="text-center ">Add Patient</h5>
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
          <option value="AP">Andhra Pradesh</option>
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
          <option selected="">Select</option>
          <option>RED</option>
          <option>Orange</option>
          <option>Green</option>
         </select>
     </div>
 </div>

  <div class="alert alert-secondary mt-3" role="alert">
   
       <h5 class="text-center">Isolation Details</h5>   
   
  </div>
     
   <div class="row mb-3">
   <div class="col-lg-6">
   <label>Any Travel History</label>
   <select class="form-control" name="travelhistory">
    <option value="">Select</option>
     <option>Yes</option>
     <option>NO</option>
   </select> 
 </div>
  <div class="col-lg-6">
   <label>Symptoms</label>
   <select class="form-control" name="symptoms">
    <option value="">Select</option>
     <option>Cold&Cough</option>
     <option>Breathing Problem</option>
     <option>Fever</option>
     <option>other</option>
   </select> 
 </div>
</div>

   <div class="row mb-3">
   <div class="col-lg-6">
   <label>Is he Migrated ?</label>
   <select class="form-control" name="migrationtype">
    <option value="">Select</option>
     <option>Yes,From other state/country</option>
     <option>No</option>
   </select> 
 </div>
  <div class="col-lg-6">
   <label>Did Covid-19 Test has Done?</label>
   <select class="form-control" name="covid">
    <option value="Isolation">Yes,Send to Isolation</option>
     <option value="Quarantine">No,Send to Quarantine</option>
   </select> 
 </div>
</div>


<div class="row mb-3">
   <div class="col-lg-6">
   <label>Health Condition</label>
   <select class="form-control" name="healthcondition">
    <option value="">Select</option>
     <option>Well</option>
     <option>Unwell</option>
   </select> 
 </div>
  <div class="col-lg-6">
   <label>Did he any Long term Diseases</label>
   <select class="form-control" name="diseases">
    <option value="">select</option>
    <option>Yes</option>
    <option>No</option>
   </select> 
 </div>
</div>



<div class="row">
  <div class="col">
    <label>Select</label>
    <select class="form-control" name="reason">
     <option value="PrimaryContact">PrimaryContact</option>
     <option value="SecondaryContact">SecondaryContact</option>
     <option value="TravelHistory">Travelhistory</option>
     <option value="Migration">Migrated</option>
     <option value="None">None</option>
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
    <label>Upload  Image</label>
    <br>
    <input type="file" name="image">
    
    </div>


    <div class="col-lg-6 mt-3">
           
    <div class="iconup">
    <i class="fas fa-file-pdf fa-2x"></i>
     </div>
    <br>

    <label>Upload Notice</label>
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