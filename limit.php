<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['detsuid']==0)) {
  header('location:logout.php');
  } else{
if(isset($_POST['submit']))
  {
    $userid=$_SESSION['detsuid'];
    $month=$_POST['month'];
     $amount=$_POST['amount'];
    $query=mysqli_query($con, "insert into budget(userid,month,amount) value('$userid','$month','$amount')");
       if($query){
echo "<script>alert('Budget has been added');</script>";
echo "<script>window.location.href='limit1.php'</script>";
} else {
echo "<script>alert('Please try again');</script>";
}
}
  ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>l</title>
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
    <?php include_once('includes/header.php');?>
    <?php include_once('includes/sidebar.php');?>
        
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
                <li class="active">limit</li>
            </ol>
        </div><!--/.row-->
        
        
    <div class="row">
            <div class="col-lg-12">
            
                
                
                <div class="panel panel-default">
                    <div class="panel-heading">limit</div>
                    <div class="panel-body">
                                               <div class="col-md-12">
                            
                            <form role="form" method="post" action="">
                                <div class="form-group">
                                    <label>MONTH</label>
                                    <input class="form-control" type="month" value="" name="month" required="true">
                                </div>
                     <div class="form-group">
                    <label>BUDGET</label> 

          <input type="text" class="form-control" name="amount" value="" required="true">   
                                </div>
                                                                                                            
                                <div class="form-group has-success">
                                    <button type="submit" class="btn btn-primary" name="submit">Add</button>
                                </div>
                                
                                
                                </div>
                                
                            </form>
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
<?php }  ?>