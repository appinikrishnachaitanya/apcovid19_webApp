 <?php
$data=file_get_contents("https://api.covid19india.org/v3/data.json");
$coronalive=json_decode($data,true);
$active=$coronalive['AP']['total']['confirmed']-$coronalive['AP']['total']['recovered']-$coronalive['AP']['total']['deceased'];
?>
<div class="container">


   
       <div class="row text-center justify-content-center">
        <div class="col-lg-6 col-sm-12 mt-3">
        <div class="card card1">
  <div class="card-body  text-dark">
    <h5 class="card-title">Total Confirmed <img src="images/virus.png" width="" height="50"></h5>
    <hr>
    <p class="card-text">
     <?php echo $coronalive['AP']['total']['confirmed']; ?>
   </p>
  </div>
</div> 
</div>

     
     
      <div class="col-lg-6 col-sm-12 mt-3">
          <div class="card card2">
  <div class="card-body card-body  text-dark">
    <h5 class="card-title">Active Cases<img src="images/active.png" width="" height="50"></h5>
    <hr>
    <p class="card-text">
     <?php echo $active; ?>
   </p>
  </div>
       </div>
     </div>
     </div>

 
 <div class="row text-center justify-content-center">
        <div class="col-lg-6 col-sm-12 mt-3">
        <div class="card card3">
  <div class="card-body   text-dark">
    <h5 class="card-title">Recovered Cases<img src="images/recovered.png" width="" height="50"></h5>
    
     <hr>
  
    <p class="card-text">
     <?php echo $coronalive['AP']['total']['recovered']; ?>
   </p>
  </div>
</div> 
</div>

     
     
      <div class="col-lg-6 col-sm-12 mt-3">
          <div class="card card4">
  <div class="card-body  text-dark">
    <h5 class="card-title">Deaths<img src="images/death.png" width="" height="50"></h5>
     <hr>
    <p class="card-text">
    <?php echo $coronalive['AP']['total']['deceased']; ?>
   </p>
  </div>
       </div>
     </div>
     </div>
   

  
  <div class="row text-center justify-content-center">
        <div class="col-lg-6 col-sm-12 mt-3">
        <div class="card card5">
  <div class="card-body  text-dark">
    <h5 class="card-title">Total Samples Tested<img src="images/lab.png" width="" height="50"></h5>

     <hr>
    <p class="card-text">
     <?php echo $coronalive['AP']['total']['tested']; ?>
   </p>
  </div>
</div> 
</div>

     
     
      <div class="col-lg-6 col-sm-12 mt-3">
          <div class="card card6">
  <div class="card-body  text-dark">
    <h5 class="card-title">Total Samples Positive Tested<img src="images/postive.png" width="" height="50"></h5>
    <hr>
    <p class="card-text">
    <?php echo $coronalive['AP']['total']['confirmed']; ?>
   </p>
  </div>
       </div>
     </div>
     </div>
   </div>
