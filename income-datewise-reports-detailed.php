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
	<title>Income Report</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	
</head>
  
	<?php include_once('includes/header.php');?>
	<?php include_once('includes/sidebar.php');?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Income Report</li>
			</ol>
		</div><!--/.row-->
		
<div class="row">
			<div class="col-lg-12">
			
					<div class="panel panel-default">
					<div class="panel-heading">Income Report</div>
					<div class="panel-body">

						<div class="col-md-12">
					
<?php
$fdate=$_POST['fromdate'];
 $tdate=$_POST['todate'];
$rtype=$_POST['requesttype'];
?>
<h5 align="center" style="color:blue">Income Report from <?php echo $fdate?> to <?php echo $tdate?></h5>
<hr />
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <tr>
              <th>S.NO</th>
              <th>Date</th>
              <th>Income Amount</th>
              
                             </tr>
                                        </tr>
                                        </thead>
 <?php
$userid=$_SESSION['detsuid'];
$ret=mysqli_query($con,"SELECT incomedate,SUM(incomecost) as totaldaily FROM `income`  where (incomedate BETWEEN '$fdate' and '$tdate') && (userid='$userid') group by incomedate");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
              
                <tr>
                  <td><?php echo $cnt;?></td>
            
                  <td><?php  echo $row['incomedate'];?></td>
                  <td><?php  echo $ttlsl=$row['totaldaily'];?></td>
           
           
                </tr>
                <?php
                $totalsexp+=$ttlsl; 
$cnt=$cnt+1;
}?>

 <tr>
  <th colspan="2" style="text-align:center">Grand Total</th>     
  <td><?php echo $totalsexp;?></td>
 </tr>     

  </table>
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
			<?php include_once('includes/footer.php');?>
		</div><!-- /.row -->
	</div><!--/.main-->
	
<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>

</body>
</html>
<?php }?>


<?php
//Yearly income
$userid=$_SESSION['detsuid'];
$query5=mysqli_query($con,"select sum(incomecost)  as totalincome from income where userid='$userid';");
$result5=mysqli_fetch_array($query5);
$sum_total_income=$result5['totalincome'];
 ?>
          <div class="panel-body easypiechart-panel">
            <h4 style="color:antiquewhite;">TOTAL INCOME FOR THE YEAR </h4>
            <div class="easypiechart" id="easypiechart-red" data-percent="<?php echo $sum_total_income;?>" ><span class="percent"><?php if($sum_total_income==""){
echo "0";
} else {
echo $sum_total_income;
}
?></span></div>
          </div>
        
        </div>

      </div>


    </div>
    
    <!--/.row-->
  </div>  <!--/.main-->

 </div><!--/.row-->
     
               <?php
//Today Income
$userid=$_SESSION['detsuid'];
$tdate=date('Y-m-d');
$query=mysqli_query($con,"select sum(incomecost)  as todaysincome from income where (incomedate)='$tdate' && (userid='$userid');");
$result=mysqli_fetch_array($query);
$sum_today_income=$result['todaysincome'];
 ?> 
          <div class="panel-body easypiechart-panel">
            <h4 style="color:antiquewhite";>TODAY'S INCOME</h4>
            <div class="easypiechart" id="easypiechart-red" data-percent="<?php echo $sum_today_income;?>" ><span class="percent"><?php if($sum_today_income==""){
echo "0";
} else {
echo $sum_today_income;
}
  ?></span></div>
          </div>
        </div>
      </div>
      </div><!--/.row-->
      <div class="row">
      <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
