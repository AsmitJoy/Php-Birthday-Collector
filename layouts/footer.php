<!--Footer-->
<footer class="page-footer text-center font-small primary-color-dark darken-2 mt-4 wow fadeIn">


<hr class="my-4">

<!-- Social icons -->
<div class="pb-4">
  <a href="https://www.facebook.com/mdbootstrap" target="_blank">
    <i class="fab fa-facebook-f mr-3"></i>
  </a>

  <a href="https://twitter.com/MDBootstrap" target="_blank">
    <i class="fab fa-twitter mr-3"></i>
  </a>

  <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
    <i class="fab fa-youtube mr-3"></i>
  </a>

  <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
    <i class="fab fa-google-plus mr-3"></i>
  </a>

  <a href="https://dribbble.com/mdbootstrap" target="_blank">
    <i class="fab fa-dribbble mr-3"></i>
  </a>

  <a href="https://pinterest.com/mdbootstrap" target="_blank">
    <i class="fab fa-pinterest mr-3"></i>
  </a>

  <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">
    <i class="fab fa-github mr-3"></i>
  </a>

  <a href="http://codepen.io/mdbootstrap/" target="_blank">
    <i class="fab fa-codepen mr-3"></i>
  </a>
</div>
<!-- Social icons -->

<!--Copyright-->
<div class="footer-copyright py-3">
  © 2019 Copyright:
  <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> bdc.com </a>
</div>
<!--/.Copyright-->

</footer>
<!--/.Footer-->

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Initializations -->
<script type="text/javascript">
// Animations initialization
new WOW().init();

</script>

<!-- Charts -->
<script>
// Line
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
    datasets: [{
      label: '# of Votes',
      data: [12, 19, 3, 5, 2, 3],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    }
  }
});

//pie
var ctxP = document.getElementById("pieChart").getContext('2d');
var myPieChart = new Chart(ctxP, {
  type: 'pie',
  data: {
    labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
    datasets: [{
      data: [300, 50, 100, 40, 120],
      backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
      hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
    }]
  },
  options: {
    responsive: true,
    legend: false
  }
});


//line
var ctxL = document.getElementById("lineChart").getContext('2d');
var myLineChart = new Chart(ctxL, {
  type: 'line',
  data: {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [{
        label: "My First dataset",
        backgroundColor: [
          'rgba(105, 0, 132, .2)',
        ],
        borderColor: [
          'rgba(200, 99, 132, .7)',
        ],
        borderWidth: 2,
        data: [65, 59, 80, 81, 56, 55, 40]
      },
      {
        label: "My Second dataset",
        backgroundColor: [
          'rgba(0, 137, 132, .2)',
        ],
        borderColor: [
          'rgba(0, 10, 130, .7)',
        ],
        data: [28, 48, 40, 19, 86, 27, 90]
      }
    ]
  },
  options: {
    responsive: true
  }
});


//radar
var ctxR = document.getElementById("radarChart").getContext('2d');
var myRadarChart = new Chart(ctxR, {
  type: 'radar',
  data: {
    labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
    datasets: [{
      label: "My First dataset",
      data: [65, 59, 90, 81, 56, 55, 40],
      backgroundColor: [
        'rgba(105, 0, 132, .2)',
      ],
      borderColor: [
        'rgba(200, 99, 132, .7)',
      ],
      borderWidth: 2
    }, {
      label: "My Second dataset",
      data: [28, 48, 40, 19, 96, 27, 100],
      backgroundColor: [
        'rgba(0, 250, 220, .2)',
      ],
      borderColor: [
        'rgba(0, 213, 132, .7)',
      ],
      borderWidth: 2
    }]
  },
  options: {
    responsive: true
  }
});

//doughnut
var ctxD = document.getElementById("doughnutChart").getContext('2d');
var myLineChart = new Chart(ctxD, {
  type: 'doughnut',
  data: {
    labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
    datasets: [{
      data: [300, 50, 100, 40, 120],
      backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
      hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
    }]
  },
  options: {
    responsive: true
  }
});

</script>

<!--Google Maps-->
<script src="https://maps.google.com/maps/api/js"></script>
<script>
// Regular map
function regular_map() {
  var var_location = new google.maps.LatLng(40.725118, -73.997699);

  var var_mapoptions = {
    center: var_location,
    zoom: 14
  };

  var var_map = new google.maps.Map(document.getElementById("map-container"),
    var_mapoptions);

  var var_marker = new google.maps.Marker({
    position: var_location,
    map: var_map,
    title: "New York"
  });
}

new Chart(document.getElementById("horizontalBar"), {
  "type": "horizontalBar",
  "data": {
    "labels": ["Red", "Orange", "Yellow", "Green", "Blue", "Purple", "Grey"],
    "datasets": [{
      "label": "My First Dataset",
      "data": [22, 33, 55, 12, 86, 23, 14],
      "fill": false,
      "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)",
        "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)",
        "rgba(54, 162, 235, 0.2)",
        "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)"
      ],
      "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)",
        "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)",
        "rgb(201, 203, 207)"
      ],
      "borderWidth": 1
    }]
  },
  "options": {
    "scales": {
      "xAxes": [{
        "ticks": {
          "beginAtZero": true
        }
      }]
    }
  }
});

</script>
</body>

</html>
