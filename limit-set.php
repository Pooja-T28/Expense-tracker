<div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
    <br>
      <br> 
          <?php
//Yearly Expense
$userid=$_SESSION['detsuid'];
$query5=mysqli_query($con,"select sum(ExpenseCost)  as totalexpense from tblexpense where UserId='$userid';");
$result5=mysqli_fetch_array($query5);
$sum_total_expense=$result5['totalexpense'];
 ?>
          <div class="panel-body easypiechart-panel">
            <h4 align ="center" style = "color: whitesmoke">Total Expenses</h4>
            <div  align ="center" style = "color: whitesmoke" class="easypiechart" id="easypiechart-red" data-percent="<?php echo $sum_total_expense;?>" ><span class="percent"><?php if($sum_total_expense==""){
echo "0";
} else {
echo $sum_total_expense;
}

  ?></span></div>
          </div>
         </div>
      </div>
    </div>
    <br>
      <br>    
          <?php
//Yearly Expense
$userid=$_SESSION['detsuid'];
 $cyear= date("Y");
$query4=mysqli_query($con,"select sum(ExpenseCost)  as yearlyexpense from tblexpense where (year(ExpenseDate)='$cyear') && (UserId='$userid');");
$result4=mysqli_fetch_array($query4);
$sum_yearly_expense=$result4['yearlyexpense'];
 ?>
          <div class="panel-body easypiechart-panel">
            <h4 align ="center" style = "color: whitesmoke"> Current Year Expenses</h4>
            <div align ="center" style = "color: whitesmoke" class="easypiechart" id="easypiechart-white" data-percent="<?php echo $sum_yearly_expense;?>" ><span class="percent"><?php if($sum_yearly_expense==""){
echo "0";
} else {
echo $sum_yearly_expense;
}

  ?></span></div>


          </div>
        
        </div>

      </div>
       </br>


          <style>
.label {
  color: white;
  padding: 8px;
  font-family: Arial;
}
.success {background-color: #04AA6D;} /* Green */
.warning {background-color: #ff9800;} /* Orange */
.danger {background-color: #f44336;} /* Red */ 
</style>
</head>
<body>
<center>
<a href = "limit.php"><span class="label success">Safe</span>
<a href = "dashboard.php"><span class="label warning">Warning</span>
<a href = "dashboard.php"><span class="label danger">Danger</span>

</center>
 </body>

 <!-- jquery -->
 <script src="./js/jquery-3.3.1.min.js"></script>
 <!-- bootstrap js -->
 <script src="./js/bootstrap.bundle.min.js"></script>
 <!-- script js -->
 <script src="./js/app.js"></script>
</body>

</html>