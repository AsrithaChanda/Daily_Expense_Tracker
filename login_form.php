<?php 
session_start(); 
session_unset(); 
session_destroy(); 
?> 
<html> 
<head> 
<title>Admin Login Page</title> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head> 
<body> 
<button style="background-color:#45b1e8;margin:10px" onclick="document.location='t8.html'">Home</button>
<h2 align="center">Daily Expense Tracker</h2>
<hr>
<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
<div class="login-panel panel panel-default">
<div class="panel-heading" align="center" style="background-color:#45b1e8">Admin Log in</div>
<form name="myloginForm" method="post" action="login_check.php"> 
    
<table width="300"  align="center" cellpadding="5" cellspacing="0"> 
<tr> 
<td style="color:rgb(6,59,118);" ><b>Login</b></td> 
<td ><input style="margin:10px" name="login" type="text" id="login" /></td> 
</tr> 
<tr> 
<td style="color:rgb(6,59,118)"><b>Password</b></td> 
<td><input style="margin:10px" name="password" type="password" /></td> 
</tr> 
<tr> 
<td  colspan="2" align="center"> 
<input class="checkbox"  type="submit" name="submit" value="Login" /></td> 
</tr> 
</table> 

</form>
</div>
</div>
</body> 
</html>
