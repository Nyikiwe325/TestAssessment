<?php
$con=mysqli_connect("localhost","root","","assessment");
if(isset($_POST['login_submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query ="Select * from logintb where username='$username' and password='$password'";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		
		header("Location:admin-panel.php");
	}
	else
	{ 
		echo"<script>alert('Error Login')</script>";
		echo "<script>window.open('index.php','_self')</script>";
	}
}
if(isset($_POST['pat_submit']))
{
	$OrderNum= $_POST['OrderNum'];
	$firstname= $_POST['firstname'];
	$lastname= $_POST['lastname'];
	$email= $_POST['email'];
	$contact= $_POST['contact'];
	$gender= $_POST['gender'];
	$date= $_POST['date'];
	$description= $_POST['description'];
	$totalAmount= $_POST['totalAmount'];
	$query= "insert into onlinetbl(OrderNum,firstname,lastname,email,contact,gender,date,description,totalAmount) values('$OrderNum','$firstname','$lastname','$email','$contact','$gender','$date','$description','$totalAmount')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo"<script>alert('Customer Registered.')</script>";
		echo "<script>window.open('customer_details.php','_self')</script>";
	}
}
function get_customer_details()
{
	global $con;
	$query= "select * from onlinetbl";
	$result=mysqli_query($con,$query);
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
}

?>