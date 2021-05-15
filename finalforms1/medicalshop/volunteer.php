<?php
include("includes/dbconfig.php");

if ($_SERVER["REQUEST_METHOD"]=="POST")
{


  $name=mysqli_real_escape_string($dbconnect,$_POST['name']);
  $email=mysqli_real_escape_string($dbconnect,$_POST['email']);
  $phoneno=mysqli_real_escape_string($dbconnect,$_POST['phoneno']);
  $adhaarno=mysqli_real_escape_string($dbconnect,$_POST['adhaarno']);
  $state=mysqli_real_escape_string($dbconnect,$_POST['state']);
  $city=mysqli_real_escape_string($dbconnect,$_POST['city']);
  $mandal=mysqli_real_escape_string($dbconnect,$_POST['mandal']);
  $district=mysqli_real_escape_string($dbconnect,$_POST['district']);
  $address=mysqli_real_escape_string($dbconnect,$_POST['address']);
  $provider=mysqli_real_escape_string($dbconnect,$_POST['provider']);
  $pincode=mysqli_real_escape_string($dbconnect,$_POST['pincode']);
  $zone=mysqli_real_escape_string($dbconnect,$_POST['zone']);
  $closetime=mysqli_real_escape_string($dbconnect,$_POST['closetime']);
  $opentime=mysqli_real_escape_string($dbconnect,$_POST['opentime']);
  $delivary=mysqli_real_escape_string($dbconnect,$_POST['delivary']);
  $phoneno2=mysqli_real_escape_string($dbconnect,$_POST['phoneno2']);
  $dist=mysqli_real_escape_string($dbconnect,$_POST['dist']);


  $insertquery="INSERT INTO helpinghands_donors(name,email,phoneno,adhaarno,state,mandal,district,city,address,provider,pincode,zone,opentime,closetime,delivary,phoneno2,dist) VALUES('$name','$email','$phoneno2','$adhaarno','$state','$mandal','$district','$city','$address','$provider
    ','$pincode','$zone','$opentime','$closetime','$delivary','$phoneno','$dist')";
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

header("refresh:2; url=../index.html");

 }

 else
 {
    echo "Fail";
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


    <title>Medical Shop</title>



  </head>
  <body>


   <div class="container-fluid">

   <div class="row justify-content-center mt-5">
    <div class="col">


      <div class="card border border-success">
        <div class="alert alert-info" role="alert">
         <h5 class="text-center ">Home Delivary Medicines</h5>
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
         <input type="text" class="form-control" id="user" placeholder="name" name="name"  required>
         </div>
     </div>


          <div class="col-lg-6">
          <label for="email">Email:<span style="color: red;">*</span></label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-envelope-open-text"></i></div>
         </div>
         <input type="email" class="form-control " id="email" placeholder="@gmail.com" name="email"  required>
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
         <input type="number" class="form-control " id="phone" placeholder="9098791234" name="phoneno"  required>
         </div>
     </div>


           <div class="col-md-6">
          <label for="adhaar">Adhaar Number:<span style="color: red;">*</span></label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-id-card"></i></div>
         </div>
         <input type="number" class="form-control " id="adhaar" placeholder="XXXX" name="adhaarno"  required>
         </div>

     </div>
 </div>

 <div class="row mt-2">

 <div class="col-md-6">
 <label for="phone">Alternative Number:<span style="color: red;">*</span></label>
 <div class="input-group mb-2">
 <div class="input-group-prepend">
 <div class="input-group-text"><i class="fas fa-phone"></i></div>
 </div>
 <input type="number" class="form-control " id="phone" placeholder="9098791234" name="phoneno2"  required>
 </div>
 </div>
</div>





          <div class="alert alert-secondary mt-3" role="alert">
           <h5 class="text-center"><span><i class="far fa-map"></i></span> MedicalShop Address</h5>
          </div>



         <div class="row mt-2">
          <div class="col-lg-6">



          <label for="state">State:<span style="color: red;">*</span></label>
          <select class="form-control" name="state">
          <option selected>Select</option>
          <option value="Andhra Pradesh">Andhra Pradesh</option>
          <option value="Arunachal Pradesh">Arunachal Pradesh</option>
          <option value="Assam">Assam</option>
          <option value="Bihar">Bihar</option>
          <option value="Chhattisgarh">Chhattisgarh</option>
          <option value="Goa">Goa</option>
          <option value="Gujarat">Gujarat</option>
          <option value="Haryana">Haryana</option>
          <option value="Himachal Pradesh">Himachal Pradesh</option>
          <option value="Jharkhand">Jharkhand</option>
          <option value="Karnataka">Karnataka</option>
          <option value="Kerala">Kerala</option>
          <option value="Madhya Pradesh">Madhya Pradesh</option>
          <option value="Maharashtra">Maharashtra</option>
          <option value="Manipur">Manipur</option>
          <option value="Meghalaya">Meghalaya</option>
          <option value="Mizoram">Mizoram</option>
          <option value="Nagaland">Nagaland</option>
          <option value="Odisha">Odisha</option>
          <option value="Punjab">Punjab</option>
          <option value="Rajasthan">Rajasthan</option>
          <option value="Sikkim">Sikkim</option>
          <option value="Tamil Nadu">Tamil Nadu</option>
          <option value="Telangana">Telangana</option>
          <option value="Tripura">Tripura</option>
          <option value="Uttar Pradesh">Uttar Pradesh</option>
          <option value="Uttarakhand">Uttarakhand</option>
          <option value="West Bengal">West Bengal</option>
          <option value="AN">Andaman and Nicobar Islands</option>
          <option value="Chandigarh">Chandigarh</option>
          <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
          <option value="Delhi">Delhi</option>
          <option value="Jammu and Kashmir">Jammu and Kashmir</option>
          <option value="Ladakh">Ladakh</option>
          <option value="Lakshadweep">Lakshadweep</option>
          <option value="Puducherry">Puducherry</option>

          </select>

      </div>

          <div class="col-lg-6">
         <label for="cty">District:<span style="color: red;">*</span></label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="far fa-map"></i></div>
         </div>
         <input type="text" class="form-control " id="cty" placeholder="XXXX" name="district"  required>
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
         <input type="text" class="form-control " id="add" placeholder="XXXX" name="city"  required>
         </div>
     </div>

          <div class="col-lg-6">
         <label for="lmark">Mandal/Block<span style="color: red;">*</span></label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="far fa-map"></i></div>
         </div>
         <input type="text" class="form-control " id="lmark" placeholder="XXXX" name="mandal"  required>
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
         <input type="text" class="form-control " id="add" placeholder="XXXX" name="address"  required>
         </div>
     </div>

          <div class="col-lg-6">
         <label for="lmark">Name of The Medical Shop:<span style="color: red;">*</span></label>
          <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text"><i class="far fa-map"></i></div>
         </div>
         <input type="text" class="form-control " id="lmark" placeholder="XXXX" name="provider"  required>
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
         <input type="number" class="form-control " id="zcode" placeholder="XXXX" name="pincode"  required>
         </div>
     </div>

          <div class="col-lg-6">
         <label for="zne">ZONE:<span style="color: red;">*</span></label>
         <select class="form-control" name="zone">
          <option selected disabled>Select</option>
          <option value="RED">RED</option>
          <option value="Orange">Orange</option>
          <option value="Green">Green</option>
         </select>
     </div>
 </div>

  <div class="alert alert-secondary mt-3" role="alert">

       <h5 class="text-center">Medicalshop Details</h5>

  </div>

  <div class="row mb-3">
  <div class="col-lg-6">



  <label for="add">Open Time:<span style="color: red;">*</span></label>
  <div class="input-group mb-2">
  <div class="input-group-prepend">
  <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
 </div>
 <input type="text" class="form-control " id="add" placeholder="XXXX" name="opentime"  required>
 </div>
</div>

  <div class="col-lg-6">
 <label for="lmark">Close Time:<span style="color: red;">*</span></label>
  <div class="input-group mb-2">
  <div class="input-group-prepend">
  <div class="input-group-text"><i class="far fa-map"></i></div>
 </div>
 <input type="text" class="form-control " id="lmark" placeholder="XXXX" name="closetime"  required>
 </div>
</div>
</div>

   <div class="row mb-3">
     <div class="col-lg-6">
    <label for="lmark">Range in KM(KILO METERS):<span style="color: red;">*</span></label>
     <div class="input-group mb-2">
     <div class="input-group-prepend">
     <div class="input-group-text"><i class="far fa-map"></i></div>
    </div>
    <input type="text" class="form-control " id="lmark" placeholder="XXXX" name="dist"  required>
    </div>
   </div>
  <div class="col-lg-6">
   <label>Delivary</label>
   <select class="form-control" name="delivary">
    <option selected disabled>Select</option>
     <option value="Free">Free</option>
     <option value="Paid">Paid</option>
   </select>
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
