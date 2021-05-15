<?php
session_start();  
include("includes/dbconfig.php");

if (isset($_POST['submit_btn']))
{

  if (empty($_POST['type'] ) ||empty($_POST['ptype'] ) || empty($_POST['working'] )  )
  {

    ?>
            <script type="text/javascript">
              alert("Select all fields");
            </script>

    <?php
  }
  else
  {
$date=date("Y-m-d");
$status="Pending";  
$unitname=mysqli_real_escape_string($dbconnect,$_POST['unitname']);
$namedistrict=mysqli_real_escape_string($dbconnect,$_POST['namedistrict']);
$addressunit=mysqli_real_escape_string($dbconnect,$_POST['addressunit']);
$uamnounit=mysqli_real_escape_string($dbconnect,$_POST['uamnounit']);
$gstnounit=mysqli_real_escape_string($dbconnect,$_POST['gstnounit']);
$type=mysqli_real_escape_string($dbconnect,$_POST['type']);
$ptype=mysqli_real_escape_string($dbconnect,$_POST['ptype']);
$working=mysqli_real_escape_string($dbconnect,$_POST['working']);
$count=mysqli_real_escape_string($dbconnect,$_POST['count']);
$name=mysqli_real_escape_string($dbconnect,$_POST['name']);
$mail=mysqli_real_escape_string($dbconnect,$_POST['mail']);
$number=mysqli_real_escape_string($dbconnect,$_POST['number']);
$adhaarno=mysqli_real_escape_string($dbconnect,$_POST['adhaarno']);
$chk="";
foreach($_POST['chklist'] as $chk1) {
   $chk .= $chk1.","; 
}


$selectquery="SELECT * FROM msme_registrations WHERE uamnounit='$uamnounit'";
$selectdb=mysqli_query($dbconnect,$selectquery);
$selectcount=mysqli_num_rows($selectdb);
if($selectcount>0)
{
   echo '<h2 style="text-align:center; color:green">Already Registered</h2>';
   header("refresh:2; url=registration.php");
}

else
{

$insertquery= "INSERT INTO msme_registrations (unitname, namedistrict, addressunit, uamnounit, gstnounit, type, ptype, working, count, name, mail, number, adhaarno, chklist, date, status) VALUES ('$unitname','$namedistrict','addressunit','$uamnounit','$gstnounit','$type','$ptype','$working','$count','$name','$mail','$number','$adhaarno','$chk','$date','$status')";
$insertdb=mysqli_query($dbconnect,$insertquery);

if($insertdb)

{
  echo '<h2 style="text-align:center; color:green">Successfully,Registered</h2>';
  header("refresh:2; url=index.php");
}

else
{
  echo "FAIL";
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
    <link rel="stylesheet" type="text/css" href="assets/css/reg.css">

    <title>Register</title>
  </head>
  <body>

    <div class="container">
   
   <div class="row justify-content-center">
   <div class="col"> 
   <div class="card mt-5 " style="border-left:20px solid lightblue; ">
    <div class="card-body">
      <div class="alert alert-success" style="border-radius:20px; " role="alert">
        <h5 class="text-center text-dark">RegistrationForm</h5>
      </div>
     <form class="form-group" action="" method="POST" enctype="multipart/form-data">

     <div class="row ">
     <div class="col-lg-6 mb-3 ">
     <label for="nameunit">Name of the Unit<span style="color:red; ">*</span> </label>
     <input type="text" id="nameunit" class="form-control"   name="unitname">  
   </div>

      <div class="col-lg-6 mb-3">
     <label for="districtname">District<span style="color:red; ">*</span> </label>
     <input type="text" id="districtname" class="form-control"   name="namedistrict"> 
      </div>
     
     <div class="col-lg-6 mb-3">
    <label for="address">Address of Unit<span style="color:red; ">*</span></label>
    <textarea class="form-control" rows="5" cols="100" id="address" name="addressunit"></textarea>
   </div>

   <div class="col-lg-6 mb-3">
    <label for="uamno">UAMNO<span style="color:red; ">*</span></label>
  <input type="text" id="uamno" name="uamnounit" class="form-control">
</div>

<div class="col-lg-6 mb-3">
<label for="gstno">GSTNO<span style="color:red; ">*</span></label>
<input type="text" id="gstno" name="gstnounit" class="form-control" >
</div>  
</div>

<div class="row ">
<div class="col-lg-6  mb-3">
<label>Manufacture/Supplier<span style="color:red; ">*</span></label>
</div>
<br>
<div class="col-lg-6 mb-3">
<input type="radio" name="type" value="Manufacture" id="Manufacture" class=" ml-3 mr-3" ><label for="Manufacture">Manufacture</label>
<input type="radio" name="type" value="Supplier" id="Supplier" class="ml-3 mr-3" ><label for="Supplier">Supplier</label>
</div>
</div>
<div class="row">
<div class="col-lg-6 mb-3">
<label>ProductType<span style="color:red; ">*</span></label>
</div>
<div class="col-lg-6 mb-3">
<input type="radio" name="ptype" id="Medical" value="Medical" class="ml-3 mr-3" ><label for="Medical">Medical</label>
<input type="radio" name="ptype" id="Auxillary" class="ml-5 mr-3" value="Auxillary"  ><label for="Auxillary">Auxillary</label>
</div>
</div>

<div class="row">
<div class="col-lg-6 mb-3">
<label>Currently Under Operation<span style="color:red; ">*</span></label>
</div>
<div class="col-lg-6 mb-3">
<input type="radio" name="working" value="Yes" class="ml-3 mr-3" id="yes"><label for="yes" >yes</label>
<input type="radio" name="working" value="No"  id="no" class="mr-3" style="margin-left:16%;"><label for="no">no</label>
</div>
</div>

<div class="row">
<div class="col-lg-6 mb-3">
  <label for="employeecount">Employee Count<span style="color:red; ">*</span></label>
  <input type="text" id="employeecount" name="count" class="form-control">
 </div>
</div>

<div class="row">
  <div class="col-lg-6 mb-3">
    <label for="name">Contact Person<span style="color:red; ">*</span></label>
    <input type="text" id="name" name="name" class="form-control">
  </div>

  <div class="col-lg-6 mb-3">
    <label for="mail">E-mail<span style="color:red; ">*</span></label>
    <input type="email" id="mail" name="mail" class="form-control">
  </div>
  
  </div>

  <div class="row">
  <div class="col-lg-6 mb-3">
    <label for="adhaarno">Adhaar No<span style="color:red; ">*</span></label>
    <input type="text" id="adhaarno" name="adhaarno" class="form-control">
  </div>

  <div class="col-lg-6 mb-3">
    <label for="number">Phoneno<span style="color:red; ">*</span></label>
    <input type="number" id="number" name="number" class="form-control">
  </div>
  
  </div>

<div class="row">
<div class="col-lg-6 mb-5">
  <label>Products:<span style="color:red; ">*</span></label>
</div>
  
  <div class="col-lg-6">
  <input type="checkbox" name="chklist[]"  value="Hand Sanitizer" id="product1" checked=""><label for="product1">Hand Sanitizer</label>
  <input type="checkbox" name="chklist[]"  value="N95 Masks"  id="product2"><label for="product2">N95 Masks</label>
  <input type="checkbox" name="chklist[]"  value="Medicines"     id="product3"><label for="product3">Medicines</label>
  <input type="checkbox" name="chklist[]"  value="PPE Kits"   id="product4" checked=""><label for="product4">PPE Kits </label>
  <input type="checkbox" name="chklist[]"  value="Thermal Gun"       id="product5"><label for="product5">Thermal Gun</label>
  
</div>
</div>


<input type="submit" class="btn btn-block btn-success" value="Submit" name="submit_btn">

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
</html