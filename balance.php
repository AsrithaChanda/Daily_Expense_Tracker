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
	<title>Daily Expense Tracker - balance</title>
	
	
	
</head>
<body>
<?php include_once('includes/header.php');?>
	<?php include_once('includes/sidebar.php');?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
      
	<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Balance</h1>
			</div>
		</div><!--/.row-->

<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<?php
//balance
$userid=$_SESSION['detsuid'];
$query5=mysqli_query($con,"select sum(ExpenseCost)  as totalexpense from tblexpense where UserId='$userid';");
$result5=mysqli_fetch_array($query5);
$sum_total_expense=$result5['totalexpense'];
$query6=mysqli_query($con,"select sum(Income)  as totalincome from tblincome where UserId='$userid';");
$result6=mysqli_fetch_array($query6);
$sum_total_income=$result6['totalincome'];
 ?>
					<div class="panel-body easypiechart-panel" style="background-color:#e6e6fa;">
					<center> <h4>Total balance</h4> </center> 
						<div class="easypiechart" ><span class="percent"><center> <?php if($sum_total_income-$sum_total_expense==""){
echo "0";
} else {
echo $sum_total_income-$sum_total_expense;
}

	?></center> </span></div>


					</div>
				
				</div>

			</div>

			</div>

			







</body>
</html>
<?php } ?>