<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<div id="sidebar-collapse" class="col-sm-1 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="https://cdn1.vectorstock.com/i/1000x1000/45/65/user-icon-human-person-sign-vector-20444565.jpg" class="img-responsive" alt="">
            </div>
            <div class="profile-usertitle">
                <?php
$uid=$_SESSION['detsuid'];
$ret=mysqli_query($con,"select FullName from tbluser where ID='$uid'");
$row=mysqli_fetch_array($ret);
$name=$row['FullName'];
?>
                <div class="profile-usertitle-name"><?php echo $name; ?></div>
                
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        
        <ul class="nav menu">
            <li class="active"><a href="dashboard.php"><em class="fa fa-dashboard">&nbsp;</em> DASHBOARD</a></li>
                                    <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
                <em class="fa fa-navicon">&nbsp;</em>INCOME <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-1">
                    <li><a class="" href="add-income.php">
                        <span class="fa fa-arrow-right">&nbsp;</span>ADD INCOME
                    </a></li>
                   <li><a class="" href="manage-income.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> MANAGE INCOME
                    </a></li>                 
                </ul>

            </li>
           
            <li class="parent "><a data-toggle="collapse" href="#sub-item-2">
                <em class="fa fa-navicon">&nbsp;</em>EXPENSE<span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-2">
                    <li><a class="" href="add-expense.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> ADD EXPENSES
                    </a></li>
                    <li><a class="" href="manage-expense.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> MANAGE EXPENSES
                    </a></li>
                    
                </ul>
            </li>
            <li class="parent "><a data-toggle="collapse" href="#sub-item-3">
                <em class="fa fa-navicon">&nbsp;</em>EXPENSE REPORT <span data-toggle="collapse" href="#sub-item-3" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-3">
                    <li><a class="" href="expense-datewise-reports.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Daywise Expenses
                    </a></li>
                    <li><a class="" href="expense-monthwise-reports.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Monthwise Expenses
                    </a></li>
                    <li><a class="" href="expense-yearwise-reports.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Yearwise Expenses
                    </a></li>
                    
                </ul>
            </li>



<li class="parent"><a data-toggle="collapse" href="#sub-item-4">
                <em class="fa fa-navicon">&nbsp;</em>INCOME REPORT<span data-toggle="collapse" href="#sub-item-4" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-4">
                    <li><a class="" href="income-datewise-reports.php">
                        <span class="fa fa-arrow-right">&nbsp;</span>Report
                    </a></li>
                    
                   
                    
                </ul>
            </li>
           

           <li class="parent"><a data-toggle="collapse" href="#sub-item-5">
                <em class="fa fa-ban">&nbsp;</em>LIMIT<span data-toggle="collapse" href="#sub-item-5" class="icon pull-right"><em class="fa fa-ban"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-5">
                    <li><a class="" href="limit.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> SETLIMIT
                    </a></li>
                                                                      
                </ul>
            </li>

             <li class="parent"><a data-toggle="collapse" href="#sub-item-6">
                <em class="fa fa-navicon">&nbsp;</em>CHARTS<span data-toggle="collapse" href="#sub-item-6" class="icon pull-right"><em class="fa fa-line-chart"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-6">
                    <li><a class="" href="graph.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> INCOME
                    </a></li>
                            <li><a class="" href="column_chart.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> EXPENSE
                    </a></li>                                                 
                </ul>
            </li>

            <li><a href="budget.php" button onclick="alert('Hello :))\nDo not save what is left after spending, but spend what is left after saving')"><em class="fa fa-money">&nbsp;</em>BUDGET</a></li></button>
             <li><a href="user-profile.php"><em class="fa fa-user">&nbsp;</em> PROFILE</a></li>
             <li><a href="change-password.php"><em class="fa fa-clone">&nbsp;</em> CHANGE PASSWORD</a></li>
             <li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> LOGOUT</a></li>

        </ul>
		
    </div>
    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
</head>
 </html>