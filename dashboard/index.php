<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link href="assets/fontawesome/css/all.css" rel="stylesheet">
    <link href="assets/css/totalcases.css" rel="stylesheet">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

    <title>APCOVID19</title>
  </head>
  <body>


      <div class="alert alert-primary text-center " role="alert">

        <h4>AndhraPradesh</h4>
  <P>Corona Dashboard</P>
  
</div>

       <?php include('livecases.php'); ?>

       <?php include('charts.php'); ?>
       <?php include('district.php'); ?>




  <script src="assets/js/jquery-3.1.0.min"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/index.js"></script>
 
    
  </body>
</html>