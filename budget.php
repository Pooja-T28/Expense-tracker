<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['detsuid']==0)) {
  header('location:logout.php');
  } else{

  

  ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>budget</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/datepicker3.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  
  <!--Custom Font-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <style>
body {
font-family:Georgia, serif;
  margin: 0;
background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKkblcfjFYAuRLDjdwkxV4GQc-qk5LjSvvpg&usqp=CAU');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size:100%100%;
}
</style>

    <div class="row">
      <ol class="breadcrumb">
        <li><a href="dashboard.php">
          <em class="fa fa-home"></em>
        </a></li>
        <li class="active">BUDGET</li>
      </ol>
    </div><!--/.row-->
        
      <div class="col-lg-12">
      <h1 style="color:whitesmoke"; align= "center" ;class="page-header">BUDGET</h1></a>
      </div>
    </div><!--/.row-->
    
         <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
          <?php
//Yearly budget
$userid=$_SESSION['detsuid'];
$query5=mysqli_query($con,"select sum(amount)  as totalbudget from budget where UserId='$userid';");
$result5=mysqli_fetch_array($query5);
$sum_total_budget=$result5['totalbudget'];
 ?>    <center>
          <div class="panel-body easypiechart-panel">
            <h4>Total budget for the year</h4>
            <div class="easypiechart" id="easypiechart-red" data-percent="<?php echo $sum_total_budget;?>" ><span class="percent"><?php if($sum_total_budget==""){
echo "0";
} else {
echo $sum_total_budget;
}

  ?></span></div>

          </div>
  
        </div>

      </div>
    </div>
     <div class="col-xs-3 col-md-3">
        <div class="panel panel-default">
  <?php
//Yearly Expense
$userid=$_SESSION['detsuid'];
 $cyear= date("Y");
$query4=mysqli_query($con,"select sum(ExpenseCost)  as yearlyexpense from tblexpense where (year(ExpenseDate)='$cyear') && (UserId='$userid');");
$result4=mysqli_fetch_array($query4);
$sum_yearly_expense=$result4['yearlyexpense'];
 ?>
          <div class="panel-body easypiechart-panel">
           <h4>Current Year Expenses</h4>
            <div class="easypiechart" id="easypiechart-red" data-percent="<?php echo $sum_yearly_expense;?>" ><span class="percent"><?php if($sum_yearly_expense==""){
echo "0";
} else {
echo $sum_yearly_expense;
}

  ?></span></div>
</div>
</div>
          </div>

 <div class="col-xs-6 col-md-3">
  <div class="panel panel-default">
  <?php
//balance
$userid=$_SESSION['detsuid'];
 $cyear= date("Y");
$query4=mysqli_query($con,"select * from budget where amount= '';");
$result4=mysqli_fetch_array($query4);
$sum_bd=$result4['l'];
 ?>
          <div class="panel-body easypiechart-panel">
         
            <div class="easypiechart" id="easypiechart-red" data-percent="<?php echo $sum_bd;?>" ><span class="percent"><?php if($sum_bd==""){
  echo "";
   } else {
   echo $sum_bd;
  }
   {
   extract($amount);
   $balance =$sum_total_budget-$sum_yearly_expense; 
   echo "BALANCE <td>$balance</td>";
}
  ?></span></div>

          </div>
    </div>
 </div>


</head>
<body>

<div class="container">
</div>

<center><a href="budget.php"  style="color:whitesmoke"; button onclick="alert('If you spend money unncecessarily then your balance amount might become to zero!!!.so spend it wisely')"><button type="button" class="btn btn-danger"><h1>ALERT</a></button></h1>



               <!--/.row-->
  </div>  <!--/.main-->
  <?php include_once('includes/footer.php');?>
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/chart.min.js"></script>
  <script src="js/chart-data.js"></script>
  <script src="js/easypiechart.js"></script>
  <script src="js/easypiechart-data.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/custom.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script>
  window.onload = function () {
  var chart1 = document.getElementById("line-chart").getContext("2d");
  window.myLine = new Chart(chart1).Line(lineChartData, {
  responsive: true,
  scaleLineColor: "rgba(0,0,0,.2)",
  scaleGridLineColor: "rgba(0,0,0,.05)",
  scaleFontColor: "#c5c7cc"
  });
};
  </script>
   

</body>
</html>
<?php } ?>