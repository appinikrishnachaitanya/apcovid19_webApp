<?php
session_start();

if ($_SESSION['adminname']=="")
{
  header("location:index.php");
}

else
{
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>View Posts</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  
  <style type="text/css">
    .table
    {
      border: 0px;
    }
  </style>

 </head>
 <body>

 <div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col">
      <div class="alert alert-secondary" role="alert">
       <h5 class="text-center">View Posts</h5>
      </div>
   <div class="table table-responsive table-bordered ">
    <table>
      <thead>
        <th>S.NO</th>
          <th>Postname</th>
             <th>Category</th>
              <th>Posted_at</th>
              <th>written by</th>
                <th>E-mail</th>
         <th>View Post</th>
        <th >Actions</th>
      </thead>

      <tbody>
        <?php 
        $count=0;
         include('../includes/dbconfig.php');
         $selectquery="SELECT * FROM blog_post ORDER BY date DESC ";
         $selectresult=mysqli_query($dbconnect,$selectquery);
         while($resultdata=mysqli_fetch_assoc($selectresult))
         {
                 $count++;
         ?>
        <tr>
          <td><?php echo $count ?></td>
          <td><?php echo $resultdata['pname']; ?></td>
          <td><?php echo $resultdata['pcat']; ?></td>
           <td><?php echo $resultdata['posted_at']; ?></td>
           <td><?php echo $resultdata['written']; ?></td>
            <td><?php echo $resultdata['email']; ?></td>
              
               
                
                
                 <td><a href="#" class="btn btn-primary">ViewPost</a></td>
                 
                 <td><a href="del.php?id=<?php echo$resultdata['id'];?>" class="btn btn-danger">delete</a></td>

        </tr>
      <?php
    }
    ?>
      </tbody>
      </table>


  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="../js/clean-blog.min.js"></script>

</body>

</html>
<?php
}
?>