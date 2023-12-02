<html>
<head>
<!--Load the AJAX API-->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">

google.charts.setOnLoadCallback(column_chart);
function column_chart() {
var jsonData = $.ajax({
url:'column_chart.php',dataType:"json",async: false,success: function(jsonData)
{
var data = new google.visualization.arrayToDataTable(jsonData);
var chart = new google.visualization.ColumnChart(document.getElementById('columnchart_values'));
chart.draw(data);

}
}).responseText;
}
</head>
</html>