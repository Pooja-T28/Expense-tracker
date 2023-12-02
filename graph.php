<?php

include_once("includes/dbconnection.php");

?>

<html>

    <head>

        <!--chart js -->

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    </head>

    <body>
       <center> <a href ="Dashboard.php"> <h2 class="text-center">INCOME CHART</h2></a>

         <?php

      $chkresults = mysqli_query($con,"SELECT incomeitem AS inc, COUNT(*) AS incomecost FROM income GROUP BY inc,incomecost");

          ?>

    <script type="text/javascript">

      google.charts.load('current', {'packages':['Line']});

      google.charts.setOnLoadCallback(drawChart);

       function drawChart() {

        var data = google.visualization.arrayToDataTable([

           ['inc','incomecost'],

         <?php

        while($row=mysqli_fetch_assoc($chkresults)){
           echo "['".$row["inc"]."',".$row["incomecost"]."],";

          }

         ?>

        ]);

        var options = {

          chart: {

            title: 'INCOME',          

          },

          bars:'vertical',

          vAxis: {format:'decimal'},

          height: 300,

          colors: ['#d95f02']

        };

    var chart = new google.charts.Line(document.getElementById('line-chart-location'));

    chart.draw(data, google.charts.Line.convertOptions(options));

      }

    </script>
        <div style="width:50%" id="line-chart-location">

        </div>

    </body>

</html>