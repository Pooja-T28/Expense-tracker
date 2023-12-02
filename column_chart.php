<?php
  $conn = new mysqli('localhost','root','','detsdb');
  if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection Failed : ". $conn->connect_error);
    } 
    $chartQuery = "SELECT * FROM tblexpense";
    $chartQueryRecords = mysqli_query($conn,$chartQuery);
?>
<?php
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <body style="text-align: center;">
   <a href ="Dashboard.php"> <h2 class="text-center">EXPENSE CHART</h2></a>
    <div id="regions_div" style="width: 900px; height: 500px;"></div>

    <script type="text/javascript">
      google.charts.load('current', {
        'packages':['corechart'],
        'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
      });
      google.charts.setOnLoadCallback(drawRegionsMap);
      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
             ['ExpenseDate', 'ExpenseCost'],
            <?php
                while($row = mysqli_fetch_assoc($chartQueryRecords)){
                    echo "['".$row['ExpenseDate']."',".$row['ExpenseCost']."],";
                }
            ?>
        ]);

        var options = {
        };

        var chart = new google.visualization.LineChart(document.getElementById('regions_div'));

        chart.draw(data, options);
      }
    </script>
  </head>
  </body>
</html>