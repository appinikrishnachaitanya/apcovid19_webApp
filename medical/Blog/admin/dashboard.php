<?php
session_start();
if ($_SESSION['adminname']=="")
{
  header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboards</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="../css/dashboard.css">
</head>
<body>
<?php include('navbar.php'); ?>
<div class="container">
  <div class="alert alert-success mt-5" role="alert">
  <h5 class="text-center"> Dashboard</h5>
  </div>
<div class="row justify-content-center mt-5">
  <div class="col-lg-6">
<div class="card text-center mt-3">
  <div class="card-header bg-info text-dark">
   <h4>Total Blogs</h4>
  </div>
  <div class="card-body">
    <h3 class="mr-5" ><span style="color: grey; float:left;" ><i class="fab fa-blogger fa-2x"></i></span><p id="demo"></p></h3>

  </div>
  <div class="card-footer text-dark">
    We are Happie To See You!
  </div>
</div>
</div>
  <div class="col-lg-6">
<div class="card text-center mt-3">
  <div class="card-header bg-success text-dark">
  <h4> Today Blogs Submitted</h4>
  </div>
  <div class="card-body">
 <h3 class="mr-5" ><span style="color: green; float:left;" ><i class="fas fa-user fa-2x"></i></span><p id="userblog"></p></h3>
  </div>
  <div class="card-footer text-dark">
    We are Happie To Be Part
  </div>
</div>
</div>    

</div>
</div>
<?php include('tabledata.php'); ?>
   
  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="../js/clean-blog.min.js"></script>

  <script type="text/javascript">
     
      function loadDoc() {
    setInterval(function(){  
     
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "dbcount.php", true);
  xhttp.send();
},1000);


} 
  
loadDoc();  


 



  </script>


 <script type="text/javascript">
  
  function loadDoc()
  {
    setInterval(function(){

    var req = new XMLHttpRequest();

    req.open("POST","countusers.php",true);
    req.send();

    req.onreadystatechange = function(){

    if (req.readyState == 4 && req.status == 200)
    {
      document.getElementById('userblog').innerHTML=req.responseText;
    }



    }



    },1000)
  }
  
  loadDoc(); 

</script>




  </body>
</html>