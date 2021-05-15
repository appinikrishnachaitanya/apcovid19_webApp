 <?php
$data=file_get_contents("https://api.covid19india.org/v3/data.json");
$coronalive=json_decode($data,true);
$active=$coronalive['AP']['total']['confirmed']-$coronalive['AP']['total']['recovered']-$coronalive['AP']['total']['deceased'];
?>



  
<div class="container">
      <div class="alert alert-primary text-center mt-5" role="alert">
        <h4>COVID-19 Visulization</h4>
</div>
<div class="row justify-content-center">
  <div class="col-lg-6 col-sm-12">

<canvas id="myChart"></canvas>
</div>
 <div class="col-lg-6 col-sm-12">

<canvas id="myChart2"></canvas>
</div>
</div>

  <script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ["Total Confirmed Cases", "Active Cases", "Recovered", "Deaths"],
      datasets: [
        {
          label: "Cases",
          backgroundColor: ["#fcdf8a", "#13f1fc","#c3ec52","#F36265"],
          data: [<?php echo $coronalive['AP']['total']['confirmed']; ?>, <?php echo $active; ?>,<?php echo $coronalive['AP']['total']['recovered']; ?>,<?php echo $coronalive['AP']['total']['deceased']; ?>]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'AP COVID-19 CASES'
      }
    }
});
</script>
<script>
var ctx = document.getElementById('myChart2').getContext('2d');
var myChart2 = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ["Total Confirmed Cases", "Active Cases", "Recovered", "Deaths"],
      datasets: [
        {
          label: "Cases",
          backgroundColor: ["#fcdf8a", "#13f1fc","#c3ec52","#F36265"],
          data: [<?php echo $coronalive['AP']['total']['confirmed']; ?>, <?php echo $active; ?>,<?php echo $coronalive['AP']['total']['recovered']; ?>,<?php echo $coronalive['AP']['total']['deceased']; ?>]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'AP COVID-19 CASES'
      }
    }
});
</script>
  
</div>









