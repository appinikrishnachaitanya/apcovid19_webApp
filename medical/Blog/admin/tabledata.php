<?php
$date=date("Y-m-d");
?>
<div class="container">
	<div class="alert alert-secondary mt-3" role="alert">
<h5 class="text-center">Daily Posts</h5>
</div>
<div class="row ">
	<div class="col-lg-3">

		<div class="table table-responsive table-bordered">
			<table>
				<thead>
					<th>Date</th>
					<th>Total Posts</th>
					
				</thead>
				<tbody>
					<?php
					include("../includes/dbconfig.php");
					$blogquery="SELECT * FROM blog_post";
                    $blogresult=mysqli_query($dbconnect,$blogquery);
                    $blogcount=mysqli_num_rows($blogresult);
                    $todaypost=0;     
                    
                    while($blogdata=mysqli_fetch_assoc($blogresult))
                    {
                       
                        $blogdate=$blogdata['date'];
                        if ($blogdate==$date)
                        {
                        	$todaypost++;
                        }
                        
                        }
                       ?>
					<tr>
						<td><?php echo$date; ?></td>
						<td><?php echo $todaypost; ?></td>
					</tr>
			
       
	</tbody>
			</table>
		</div>
	</div>

	<div class="col-lg-8">
		<div class="table table-responsive table-bordered">
			<table>
				<thead>
					<th>Date</th>
					<th> PostName</th>
					<th>Category</th>
					<th>Written by</th>
				</thead>
				<tbody>
						<?php
					include("../includes/dbconfig.php");
					$blogquery="SELECT * FROM blog_post ORDER BY date DESC";
                    $blogresult=mysqli_query($dbconnect,$blogquery);
                    $blogcount=mysqli_num_rows($blogresult);


                    while($blogdata=mysqli_fetch_assoc($blogresult))
                    {    

                       $blogdate=$blogdata['date'];
                        if ($blogdate==$date)
                        {

                    	?>
					<tr>
						<td><?php echo $blogdata['date']; ?> </td>
						<td><?php echo $blogdata['pname']; ?> </td>
						<td><?php echo $blogdata['pcat']; ?> </td>
						<td><?php echo $blogdata['written']; ?> </td>
					</tr>
					<?php
				}
			}
				?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>
