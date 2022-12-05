<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<div style="background-color:#8a2be2;color:white" id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div  class="profile-sidebar">
            
            <div class="profile-usertitle">
                <?php
$uid=$_SESSION['detsuid'];
$ret=mysqli_query($con,"select FullName from tbluser where ID='$uid'");
$row=mysqli_fetch_array($ret);
$name=$row['FullName'];

?>
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color:#8878c3;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: white;
  padding: 16px;
  text-decoration: none;
}
 


.sidebar a:hover {
  background-color: white;
  color: black;
}



@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>

                <div class="profile-usertitle-name" align="center" ><h3><i class='fas fa-user-circle'></i>&nbsp;<?php echo $name; ?></h3></div>
               
            </div>
            
        </div>
        
        
        <div class="sidebar">
            <a class="active" href="dashboard.php">&nbsp; Dashboard</a>
            <a class="active" href="add-expense.php"><em class="fa fa-dashboard">&nbsp;</em> Add Expenses</a>
            <a class="active" href="manage-expense.php"><em class="fa fa-dashboard">&nbsp;</em> Manage Expense</a>
            <a class="active" href="expense-datewise-reports.php"><em class="fa fa-dashboard">&nbsp;</em> Datewise Expenses</a>
            <a class="active" href="expense-monthwise-reports.php"><em class="fa fa-dashboard">&nbsp;</em> Monthwise Expenses</a>
            <a class="active" href="expense-yearwise-reports.php"><em class="fa fa-dashboard">&nbsp;</em> Yearwise Expenses</a>
            <a class="active" href="add-income.php"><em class="fa fa-dashboard">&nbsp;</em> Add Income</a>
            <a class="active" href="manage-income.php"><em class="fa fa-dashboard">&nbsp;</em> Manage Income</a>
            <a class="active" href="balance.php"><em class="fa fa-dashboard">&nbsp;</em> Balance</a>
           <a class="active" href="logout.php"><em class="fa fa-dashboard">&nbsp;</em> Logout</a>
            
                    
</div>

            
           

    </div>