<!-- title  -->
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
   <h1 class="h2">Grafik Skema</h1>
   <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
         <button class="btn btn-sm btn-outline-secondary">Share</button>
         <button class="btn btn-sm btn-outline-secondary">Export</button>
      </div>
   <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
      <span data-feather="calendar"></span>This week
   </button>
   </div>
</div>

<canvas class="my-4" id="myChart" width="21" height="9"></canvas>

<!-- Graphs -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script>

   var ctx = document.getElementById("myChart");
   var myChart = new Chart(ctx, {
   type: 'bar',
   data: {
      labels: ["Skema1", "Skema2", "Skema3", "Skema4", "Skema5", "Skema6", "Skema7"],
      datasets: [{
         data: [12, 32, 12, 64, 12, 23, 32],
         lineTension: 0,
         backgroundColor: '#007bff',
      }]
   },
   options: {
      scales: {
         yAxes: [{
         ticks: {
            beginAtZero: false
         }
         }]
      },
      legend: {
         display: false,
      }
   }
   });
</script>
