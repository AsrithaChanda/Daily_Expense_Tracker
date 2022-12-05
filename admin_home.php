<style>
  .topnav a:hover {
  background-color:#8a2be2;
 
  text-decoration:none;
 padding: 4px 2px;
}


</style>


<div  class="responsive">
    
		<div style="background-color:black;font-size:25px;" class="topnav">
		
			
			<a style="margin:12px; color:white;" href="t8.html" >Home</a>

	</div>
	</div>

<div class="table-responsive">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<h3 align="center">USER DETAILS</h3>
<hr />
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <tr style="background-color:#8a2be2; color:white;">
              <th >ID</th>
              <th>USER NAME</th>
              <th>USER EMAIL ID</th>
              <th>MOBILE NO</th>
              <th>REGISTRATION DATE</th>
              
              
                </tr>
                                        </tr>
                                        </thead>



<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "detsdb";

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = 'SELECT * from tbluser';


if (mysqli_query($conn, $sql)) {

echo "";

} else {

echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}




$count=1;

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

// output data of each row

while($row = mysqli_fetch_assoc($result)) { ?>

<tbody>

<tr>

<th>

<?php echo $row['ID']; ?>

</th>

<td>

<?php echo $row['FullName']; ?>

</td>

<td>

<?php echo $row['Email']; ?>

</td>

<td>

<?php echo $row['MobileNumber']; ?>

</td>

<td>

<?php echo $row['RegDate']; ?>

</td>

</tr>

</tbody>

<?php

$count++;

}

} else {

echo '0 results';

}

?>

</table>