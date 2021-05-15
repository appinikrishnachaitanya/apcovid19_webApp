<?php
$data = file_get_contents('https://api.covid19india.org/state_district_wise.json');
$coronalive= json_decode($data, true);
//print_r($coronalive)

?>

  
  <div class="container">
  <div class="alert alert-primary text-center mt-5" role="alert">
  <h5>District-Wise Covid19</h5>
</div>
<div class="row">
  <div class="col-lg-6 col-sm-12">
 <table class="table table-responsive">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">DistrictName</th>
      <th scope="col">Confirmed</th>
      <th scope="col">Active</th>
      <th scope="col">Recovered</th>
      <th scope="col">Deaths</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Anantapur</td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Anantapur']['confirmed'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Anantapur']['active'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Anantapur']['recovered'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Anantapur']['deceased'];?></td>
    </tr>

    <td>2</td>
      <td>Chittoor</td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Chittoor']['confirmed'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Chittoor']['active'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Chittoor']['recovered'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Chittoor']['deceased'];?></td>
    </tr>

    <td>3</td>
      <td>East Godavari</td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['East Godavari']['confirmed'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['East Godavari']['active'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['East Godavari']['recovered'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['East Godavari']['deceased'];?></td>
    </tr>
    <td>4</td>
      <td>Guntur</td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Guntur']['confirmed'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Guntur']['active'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Guntur']['recovered'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Guntur']['deceased'];?></td>
    </tr>
    <td>5</td>
      <td>Krishna</td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Krishna']['confirmed'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Krishna']['active'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Krishna']['recovered'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Krishna']['deceased'];?></td>
    </tr>


     <td>6</td>
      <td>Kurnool</td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Kurnool']['confirmed'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Kurnool']['active'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Kurnool']['recovered'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Kurnool']['deceased'];?></td>
    </tr>


    <td>7</td>
      <td>Prakasam</td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Prakasam']['confirmed'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Prakasam']['active'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Prakasam']['recovered'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Prakasam']['deceased'];?></td>
    </tr>


    <td>8</td>
      <td>S.P.S. Nellore</td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['S.P.S. Nellore']['confirmed'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['S.P.S. Nellore']['active'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['S.P.S. Nellore']['recovered'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['S.P.S. Nellore']['deceased'];?></td>
    </tr>



      <td>9</td>
      <td>Srikakulam</td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Srikakulam']['confirmed'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Srikakulam']['active'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Srikakulam']['recovered'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Srikakulam']['deceased'];?></td>
    </tr>

       
       <td>10</td>
      <td>Visakhapatnam</td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Visakhapatnam']['confirmed'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Visakhapatnam']['active'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Visakhapatnam']['recovered'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Visakhapatnam']['deceased'];?></td>
    </tr>

     <td>11</td>
      <td>Vizianagaram</td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Vizianagaram']['confirmed'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Vizianagaram']['active'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Vizianagaram']['recovered'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Vizianagaram']['deceased'];?></td>
    </tr>

 <td>12</td>
      <td>West Godavari</td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['West Godavari']['confirmed'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['West Godavari']['active'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['West Godavari']['recovered'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['West Godavari']['deceased'];?></td>
    </tr>



 <td>13</td>
      <td>Y.S.R. Kadapa</td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Y.S.R. Kadapa']['confirmed'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Y.S.R. Kadapa']['active'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Y.S.R. Kadapa']['recovered'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Y.S.R. Kadapa']['deceased'];?></td>
    </tr>


 <td>14</td>
      
      <td>Foreign Evacuees</td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Foreign Evacuees']['confirmed'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Foreign Evacuees']['active'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Foreign Evacuees']['recovered'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Foreign Evacuees']['deceased'];?></td>
    </tr>

 <td>15</td>
      <td>Other State</td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Other State']['confirmed'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Other State']['active'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Other State']['recovered'];?></td>
      <td><?php echo $coronalive['Andhra Pradesh']['districtData']['Other State']['deceased'];?></td>
    </tr>




   
  </tbody>
</table>
</div>
<div class="col-lg-6 col-sm-12">
 <canvas id="myChart3"></canvas>
</div>

</div>
<script>
var ctx = document.getElementById('myChart3').getContext('2d');
var myChart3 = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ["Anantapur", "Kurnool", "Guntur", "Krishna"],
      datasets: [
        {
          label: "Cases",
          backgroundColor: ["#fcdf8a", "#13f1fc","#c3ec52","#F36265","#bb93f9"],
          data: [<?php echo $coronalive['Andhra Pradesh']['districtData']['Anantapur']['confirmed'];?>,<?php echo $coronalive['Andhra Pradesh']['districtData']['Kurnool']['confirmed'];?>, <?php echo $coronalive['Andhra Pradesh']['districtData']['Guntur']['confirmed'];?>,<?php echo $coronalive['Andhra Pradesh']['districtData']['Krishna']['confirmed'];?>]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'AP District COVID-19 CASES'
      }
    }
});
</script>
</div>

