<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <!-- bootstrap css -->
 <link rel="stylesheet" href="./css/bootstrap.min.css">
 <!-- main css -->
 <link rel="stylesheet" href="./css/main.css">
 <!-- google fonts -->
 <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">

<style>
body {
font-family:Georgia, serif;
  margin: 0;
background-image: url('https://img.freepik.com/premium-vector/abstract-pink-modern-shapes-background_32996-1063.jpg?w=360');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size:100%100%;
}
</style>

 <!-- font awesome -->
 <link rel="stylesheet" href="./css/all.css">
 <title>Budget</title>
 <style>
 </style>
</head>

<body>
 <div class="container-fluid">
  <div class="row">
   <div class="col-11 mx-auto pt-3">
    <center>
    <!-- title -->
   <a href="dashboard.php"><h3 class="text-uppercase mb-4">Budget</h3></a>
    <div class="row">
     <div class="col-md-5 my-3">
        <!-- budget form -->
         <form id="budget-form" class=" budget-form">
       <h4 class="text-capitalize">please enter your budget</h4>
       <div class="form-group">
        <input type="number" class="form-control budget-input" id="budget-input">
       </div>
       <!-- submit button -->
       <button type="submit" class="btn text-capitalize budget-submit" id="budget-submit">calculate</button>
      </form>
     </div>

     <div class="col-md-7">
      <!-- app info -->
      <div class="row my-3">
       <div class="col-4 text-center mb-2">
        <h6 class="text-uppercase info-title">budget</h6>
        <span class="budget-icon"><i class="fas fa-money-bill-alt"></i></span>
        <h4 class="text-uppercase mt-2 budget" id="budget"><span>$ </span><span id="budget-amount">0</span></h4>
       </div>
       <div class="col-4 text-center">
        <h6 class="text-uppercase info-title">expenses</h6>
        <span class="expense-icon"><i class="far fa-credit-card"></i></span>
        <h4 class="text-uppercase mt-2 expense" id="expense"><span>$ </span><span id="expense-amount">0</span></h4>
       </div>
       <div class="col-4 text-center">
        <h6 class="text-uppercase info-title">balance</h6>
        <span class="balance-icon"><i class="fas fa-dollar-sign"></i></span>
        <h4 class="text-uppercase mt-2 balance" id="balance"> <span>$ </span><span id="balance-amount">0</span></h4>
       </div>
      </div>
     </div>
    </div>

    <div class="row">
     <div class="col-md-5 my-3">
      <!-- expense feedback -->
      <div class="expense-feedback alert alert-danger text-capitalize">expense feedback</div>
      <!-- expense form -->
      <form id="expense-form" class=" expense-form">
       <h5 class="text-capitalize">Comments</h5>
       <div class="form-group">
        <input type="text" class="form-control expense-input" id="expense-input">
       </div>
       <h5 class="text-capitalize">Enter expense amount</h5>
       <div class="form-group">
        <input type="number" class="form-control expense-input" id="amount-input">
       </div>

       <!-- submit button -->
       <button type="submit" class="btn text-capitalize expense-submit" id="expense-submit">add expense</button>
      </form>
     </div>
     <div class="col-md-7 my-3">
      <!-- expense list -->
      <div class="expense-list" id="expense-list">
       <!-- single expense -->

       <!-- <div class="expense">
        <div class="expense-item d-flex justify-content-between align-items-baseline">

         <h6 class="expense-title mb-0 text-uppercase list-item">- title</h6>
         <h5 class="expense-amount mb-0 list-item">amount</h5>

         <div class="expense-icons list-item">

          <a href="#" class="edit-icon mx-2" data-id="${expense.id}">
           <i class="fas fa-edit"></i>
          </a>
          <a href="#" class="delete-icon" data-id="${expense.id}">
           <i class="fas fa-trash"></i>
          </a>
         </div>
        </div>

       </div> -->

       <!-- end of single expense -->

      </div>
     </div>
    </div>

 </div>
  </div>
 </div>
 <!-- jquery -->
 <script src="./js/jquery-3.3.1.min.js"></script>
 <!-- bootstrap js -->
 <script src="./js/bootstrap.bundle.min.js"></script>
 <!-- script js -->
 <script src="./js/app.js"></script>
</body>

</html>
 <!-- jquery -->
 <script src="./js/jquery-3.3.1.min.js"></script>
 <!-- bootstrap js -->
 <script src="./js/bootstrap.bundle.min.js"></script>
 <!-- script js -->
 <script src="./js/app.js"></script>
</body>

</html>





$query = mysqli_query($conn, "SELECT * FROM patty_cash WHERE month(date) = '11' AND year(date) = '2020' ");
while($row = mysqli_fetch_assoc($query))

{
   extract($row);
   $balance = $balance + $credit - $debit; 
   echo " <td>$balance</td>";
}