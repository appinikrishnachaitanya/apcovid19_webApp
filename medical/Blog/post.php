
<div class="container">
  <div class="alert alert-secondary mb-5" role="alert">
   <h5 class="text-center">Our Stories</h5>
  </div>
  <div class="card-deck mb-3 text-center">
	<?php     
            include("includes/dbconfig.php");      
           include("pagination/function.php");
 $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
      $limit = 4; //if you want to dispaly 10 records per page then you have to change here
      $startpoint = ($page * $limit) - $limit;
        $statement = "blog_post"; //you have to pass your query over here
                        
                         $query=mysqli_query($dbconnect,"select * from {$statement} LIMIT {$startpoint} , {$limit}");
         while($resultdata=mysqli_fetch_assoc($query))
         {
         
         ?>

                            <link href="pagination/css/pagination.css" rel="stylesheet" type="text/css" />
<link href="pagination/css/A_green.css" rel="stylesheet" type="text/css" />
<div class="card">

  <img src="admin/<?php echo$resultdata['pimage']?>" class="card-img-top" alt="..." width="320" height="213">
  <div class="card-body">
    <h5 ><?php echo $resultdata['pname'];?></h5>
    <p ><?php echo substr($resultdata['post'], 0,100);?></p>
    <br>
    
    <a href="singlepost.php?id=<?php echo$resultdata['id']; ?>" target="_blank" class="btn btn-primary btn-block readbtn"> readmore</a>

   </div>
</div>


 <?php
   }
   ?>
          
 
</div>
<ul class="pagination">
              <?php echo pagination($statement,$limit,$page); ?>
            </ul>

</div>