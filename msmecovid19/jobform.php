<?php
session_start();
include('includes/dbconfig.php'); 
if(isset($_POST['submit_btn']))
{
   if (empty($_POST['type']) || empty($_POST['zone']) || empty($_POST['workhome']) || empty($_POST['gender']))
   {
    ?>
              <script type="text/javascript">
                alert("Selectallfields");
              </script>
   <?php
   }

   else 
   { 

   $date=date("Y-m-d");
   $status="Pending";
   $fname=mysqli_real_escape_string($dbconnect,$_POST['fname']);
   $lname=mysqli_real_escape_string($dbconnect,$_POST['lname']);
   $adhaarno=mysqli_real_escape_string($dbconnect,$_POST['adhaarno']);
   $mail=mysqli_real_escape_string($dbconnect,$_POST['mail']);
   $mobileno=mysqli_real_escape_string($dbconnect,$_POST['mobileno']);
   $gender=mysqli_real_escape_string($dbconnect,$_POST['gender']);
   $address=mysqli_real_escape_string($dbconnect,$_POST['address']);
   $type=mysqli_real_escape_string($dbconnect,$_POST['type']);
   $zone=mysqli_real_escape_string($dbconnect,$_POST['zone']);
   $workhome=mysqli_real_escape_string($dbconnect,$_POST['workhome']);

   $selectquery="SELECT * FROM jobs_msme WHERE adhaarno='$adhaarno' ";
   $selectdb=mysqli_connect($dbconnect,$selectquery);
   $selectcount=mysqli_num_rows($selectdb);

   if ($selectcount>0)
   {
     echo '<h3 style="color:green; text-align:center">Already,Registered</h3>'; 
   }

   else
   { 
   $insertquery="INSERT INTO jobs_msme(fname,lname,adhaarno,mail,mobileno,gender,address,type,zone,workhome,date,status)VALUES('$fname','$lname','$adhaarno','$mail','$mobileno','$gender','$address','$type','$zone','$workhome','$date','$status')";
   $insertdb=mysqli_query($dbconnect,$insertquery);

   if($insertdb)
   {
    echo '<h3 style="color:green; text-align:center">Successfully,Registered</h3>';
    header("refresh:2; url=index.php");
   }

  
  else
  {
    echo "Fail";
  }


}
}
}
?>

  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

  <style type="text/css">
    
   .flex
   {  
      margin-top: 10%;
      display: flex;
     justify-content: center;
   }

  </style>



    <body>
         
       <div class="container">  
       
      <div class="card">
        <div class="card-content">

     <div class="row">
    <form   action=""  method="POST"  class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input  name="fname" id="first_name" type="text" class="validate" required>
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" name="lname"  class="validate" required>
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input  id="adhaar_no" name="adhaarno" type="number" class="validate" required>
          <label for="adhaar_no">Adhaarno</label>
        </div>
      </div>
      
      <div class="row">
        <div class="input-field col s12">
          <input id="email" name="mail" type="email" class="validate" required>
          <label for="email">Email</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input id="mobile_no" name="mobileno" type="number" class="validate" required>
          <label for="mobile_no">MobileNo:</label>
        </div>
      </div>

     <div class="row">
      <div class="col s4">
    <label>
      <input class="with-gap" name="gender" value="Male" type="radio" />
      <span>Male</span>
    </label>
 </div>
 
  <div class="col s4">
    <label>
      <input class="with-gap" name="gender" value="Female" type="radio" />
      <span>Female</span>
    </label>
 </div>

</div>

 <div class="row">
   
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" name="address" class="materialize-textarea" required></textarea>
          <label for="textarea1">Address</label>
        </div>
      </div>
    
  </div>


 <div class="row">
  <div class="col">
    <p>CHOOSE</p>
  </div>
</div>
 
  <div class="row">
      
   
    
      <div class="col s6">
        
    <label>
      <input  name="type" value="MigratedWorker" type="radio" />
      <span>Migrated Worker</span>
    </label>
 </div>
 
  <div class="col s6">
    <label>
      <input  name="type" value="Labour&Other" type="radio" />
      <span>Labour & Other</span>
    </label>
 </div>

</div>


 <div class="row">
  <div class="col">
    <p>Which are You in Currently ?</p>
  </div>
</div>
 
  <div class="row">
      
   
    
      <div class="col s6">
        
    <label>
      <input  name="zone" value="ContainmentZone" type="radio" />
      <span>Containment Zone</span>
    </label>
 </div>
 
  <div class="col s6">
    <label>
      <input  name="zone" value="GreenZone" type="radio" />
      <span>Green Zone</span>
    </label>
 </div>

</div>
 

 <div class="row">
  <div class="col">
    <p>Are You able to Work From Home?</p>
  </div>
</div>
 
  <div class="row">
      
   
    
      <div class="col s6">
        
    <label>
      <input  name="workhome" value="Yes" type="radio" />
      <span>Yes</span>
    </label>
 </div>
 
  <div class="col s6">
    <label>
      <input  name="workhome" type="radio" value="No" />
      <span>No</span>
    </label>
 </div>

</div> 



<div class="flex">
<input type="submit" class="btn" id="btn_submit" value="Submit" name="submit_btn">
   
</div>
     
    </form>
  </div>
</div>
</div>
</div>
          
          


      <!--JavaScript at end of body for optimized loading-->
     
    </body>
  </html>
        