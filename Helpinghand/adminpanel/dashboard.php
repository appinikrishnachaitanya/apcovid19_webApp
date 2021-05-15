<?php

include('../includes/dbconfig.php');
$date=date("Y-m-d");
$doctorcount=0;
$donorcount=0;
$speakercount=0;
$delivaryboycount=0;

$doctortodaycount=0;
$donortodaycount=0;
$speakertodaycount=0;
$delivaryboytodaycount=0;


$countquery="SELECT * FROM helpinghands_doctors";
$countdb=mysqli_query($dbconnect,$countquery);
 while($doctordata=mysqli_fetch_assoc($countdb))
                    {
                      $doctorstatus=$doctordata['status'];
                      $doctordate=$doctordata['date'];
                      if ($doctorstatus=="CONFIRMED")
                      {
                        $doctorcount++;

                      }

                       if ($doctordate==$date)
                      {
                        $doctortodaycount++;

                      }
                    }
$countquery2="SELECT * FROM helpinghands_donors";
$countdb2=mysqli_query($dbconnect,$countquery2);
while($donordata=mysqli_fetch_assoc($countdb2))
                    {
                      $donorstatus=$donordata['status'];
                      $donordate=$donordata['date'];
                      if ($donorstatus=="CONFIRMED")
                      {
                        $donorcount++;

                      }

                       if ($donordate==$date)
                      {
                        $donortodaycount++;

                      }
                    }


$countquery3="SELECT * FROM helpinghands_speakers";
$countdb3=mysqli_query($dbconnect,$countquery3);
while($speakerdata=mysqli_fetch_assoc($countdb3))
                    {
                      $speakerstatus=$speakerdata['status'];
                      $speakerdate=$speakerdata['date'];
                      if ($speakerstatus=="CONFIRMED")
                      {
                        $speakercount++;

                      }
                       if ($speakerdate==$date)
                      {
                        $speakertodaycount++;

                      }
                    }

$countquery4="SELECT * FROM helpinghands_delivaryboys";
$countdb4=mysqli_query($dbconnect,$countquery4);
while($delivaryboydata=mysqli_fetch_assoc($countdb4))
                    {
                      $delivaryboystatus=$delivaryboydata['status'];
                      $delivaryboydate=$delivaryboydata['date'];
                      if ($delivaryboystatus=="CONFIRMED")
                      {
                        $delivaryboycount++;

                      }
                       if ($delivaryboydate==$date)
                      {
                        $delivaryboytodaycount++;

                      }
                    }




?>




<div class="container">
<div class="row justify-content-center">
      <div class="col">
        <div class="card mt-5 border-dark">
          <div class="card-body">
            <div class="alert alert-success" role="alert">
            <h4 class="text-center">Dashboard</h4>
            </div>

  <div class="row ">
    <div class="col-lg-6 mb-3">
      
      <div class="card border-dark subcard">
        <div class="card-body">
          <div class="card-title">
            <h4 class="text-center">Doctors</h4>
          </div>
          <hr>
            <div class="row ml-5">
            <div class="col-lg-6 col-sm-6">
            <h5>Total</h5>
          </div>
          <div class="col-lg-6">
            <h5>Today</h5>
          </div>
        </div>
            <hr>
          <div class="row ml-5">
            <div class="col-lg-6 col-sm-6">
          <h5><?php echo$doctorcount; ?></h5>
        </div>
         <div class="col-lg-6">
          <h5><?php echo$doctortodaycount; ?></h5>
        </div>
      </div>
        </div>
      </div>
    </div>

      <div class="col-lg-6 mb-3">
      
      <div class="card border-dark subcard">
        <div class="card-body">
          <div class="card-title">

            <h4 class="text-center">Donor</h4>
          </div>
          <hr>
            <div class="row ml-5">
            <div class="col-lg-6">
            <h5>Total</h5>
          </div>
          <div class="col-lg-6">
            <h5>Today</h5>
          </div>
        </div>
            <hr>
          <div class="row ml-5">
            <div class="col-lg-6">
          <h5><?php echo$donorcount; ?></h5>
        </div>
         <div class="col-lg-6">
          <h5><?php echo$donortodaycount; ?></h5>
        </div>
      </div>
        </div>
      </div>
    </div>
  
   
    
</div>

 <div class="row ">
    <div class="col-lg-6 mb-3">
      
      <div class="card border-dark subcard">
        <div class="card-body">
          <div class="card-title">
            <h4 class="text-center">Speaker</h4>
          </div>
          <hr>
            <div class="row ml-5">
            <div class="col-lg-6">
            <h5>Total</h5>
          </div>
          <div class="col-lg-6">
            <h5>Today</h5>
          </div>
        </div>
            <hr>
          <div class="row ml-5">
            <div class="col-lg-6">
          <h5><?php echo$speakercount; ?></h5>
        </div>
         <div class="col-lg-6">
          <h5><?php echo$speakertodaycount; ?></h5>
        </div>
      </div>
        </div>
      </div>
    </div>

      <div class="col-lg-6 mb-3">
      
      <div class="card border-dark subcard">
        <div class="card-body">
          <div class="card-title">
            <h4 class="text-center">Delivery Boy</h4>
          </div>
          <hr>
            <div class="row ml-5">
            <div class="col-lg-6">
            <h5>Total</h5>
          </div>
          <div class="col-lg-6">
            <h5>Today</h5>
          </div>
        </div>
            <hr>
          <div class="row ml-5">
            <div class="col-lg-6">
          <h5><?php echo$delivaryboycount; ?></h5>
        </div>
         <div class="col-lg-6">
          <h5><?php echo$delivaryboytodaycount; ?></h5>
        </div>
      </div>
        </div>
      </div>
    </div>
  
   
    
</div>






</div>
</div>
</div>
</div>
</div>