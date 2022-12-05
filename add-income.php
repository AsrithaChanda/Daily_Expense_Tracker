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
    $dateincome=$_POST['dateincome'];
     $source=$_POST['source'];
     $income=$_POST['income'];
    $query=mysqli_query($con, "insert into tblincome(UserId,IncomeDate,Source,Income) value('$userid','$dateincome','$source','$income')");
if($query){
echo "<script>alert('income has been added');</script>";
echo "<script>window.location.href='manage-income.php'</script>";
} else {
echo "<script>alert('Something went wrong. Please try again');</script>";

}
  
}
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daily Expense Tracker || Add Income</title>
	
</head>
<body>
	
	<?php include_once('includes/sidebar.php');?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
				
				<div class="panel panel-default">
					<div class="panel-heading" style="background-color:#8a2be2; color:white;" align="center">Income</div>
					<div class="panel-body">
						<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
						<div class="col-md-12">
							
							<form role="form" method="post" action="">
								<div class="form-group">
									<label>Date of Income</label>
									<input class="form-control" type="date" value="" name="dateincome" required="true">
								</div>
								<div class="form-group">
									<label>Source</label>
									<input type="text" class="form-control" name="source" value="" required="true">
								</div>
								
								<div class="form-group">
									<label>Income</label>
									<input class="form-control" type="text" value="" required="true" name="income">
								</div>
																
								<div class="form-group has-success"  align="center">
									<button type="submit" class="btn btn-primary" name="submit">Add</button>
								</div>
								
								
								</div>
								
							</form>
						</div>
					</div>
				</div>
	
	</div>

	
</body>
</html>
<?php }  ?>