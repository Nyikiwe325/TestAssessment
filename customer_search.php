<html>
<head>
	<title>Customer Search</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<?php
include("func.php");
//include("funct.php");
if(isset($_POST['customer_search_submit']))
{
	$contact= $_POST['search'];
	$query="select * from onlinetbl where contact='$contact'";
	$result=mysqli_query($con,$query);
	echo"<div class='container-fluid' style='margin-top:5px';>
	<div class 'card'>
	<div class='card-body'><a href='customer_details.php' class= 'btn btn-light'>Go Back</a></div>
	<img src='image/1.jpg' class='card-img-top'>
	<div class='card-body' style='background-color:#3498DB;color:#ffffff;'>
				<table class='table table-hover'>
			  <thead>
				<tr>
				  <th>Order Number</th> 
				  <th>First Name</th>
				  <th>Last Name</th>
				  <th>Email</th>
				  <th>Contact</th>
				  <th>Gender</th>
				   <th>Date</th>
				    <th>Description</th>
					 <th>Total Amount</th>
				</tr>
			  </thead>
			  <tbody>";
	while($row=mysqli_fetch_array($result))
	{
		$OrderNum= $row['OrderNum'];
		$firstname=$row['firstname'];
		$lastname=$row['lastname'];
		$email=$row['email'];
		$contact=$row['contact'];
		$gender=$row['gender'];
		$date= $row['date'];
	   $description= $row['description'];
	   $totalAmount= $row['totalAmount'];
	echo"<tr>
				  <td>$OrderNum</td>
				  <td>$firstname</td>
				  <td>$lastname</td>
				  <td>$email</td>
				  <td>$contact</td>
				  <td>$gender</td>
				  <td>$date</td>
				  <td>$description</td>
				  <td>$totalAmount</td>
				</tr>";
	}
	echo"</tbody></table></div></div></div>";
	
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

