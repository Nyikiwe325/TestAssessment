<!DOCTYPE HTML>
<html>
<head>
<title>Order List</title>
<!Bootstrap>
<!Latest compiled and minified CSS >
<link rel="stylesheet" href="libs/bootstrap3.3.6/css/bootstrap.min.css" />
<!HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries >
<!WARNING:Respond.js doesn't work if you view the page via file:// >
<![if lt IE 9]>
<script src=" https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js "></script>
<script src=" https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js "></script>
<![endif]>
</head>
<body>
<!container>
<div class="container">
<?php
if($_POST){
// include database connection
include 'database.php';
try{
// insert query
$query = "INSERT INTO ordertbl SET OrderNum=:OrderNum,name=:name,surname=:surname, contact=:contact, gender=:gender, date=:date, description=:description, totalAmount=:totalAmount";
// prepare query for execution
$stmt = $con->prepare($query);
// posted values
$OrderNum=htmlspecialchars(strip_tags($_POST['OrderNum']));
$name=htmlspecialchars(strip_tags($_POST['name']));
$surname=htmlspecialchars(strip_tags($_POST['surname']));
$contact=htmlspecialchars(strip_tags($_POST['contact']));
$gender=htmlspecialchars(strip_tags($_POST['gender']));
$date=htmlspecialchars(strip_tags($_POST['date']));
$description=htmlspecialchars(strip_tags($_POST['description']));
$totalAmount=htmlspecialchars(strip_tags($_POST['totalAmount']));
// bind the parameters
$stmt->bindParam(':OrderNum', $OrderNum);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':surname', $surname);
$stmt->bindParam(':contact', $contact);
$stmt->bindParam(':gender', $gender);
$stmt->bindParam(':date', $date);
$stmt->bindParam(':description', $description);
$stmt->bindParam(':totalAmount', $totalAmount);
// specify when this record was inserted to the database

if($stmt->execute()){
echo "<div class='alert alertsuccess'>Record was saved.</div>";
}else{
echo "<div class='alert alertdanger'>Unable to save record.</div>";
}
}
// show error
catch(PDOException $exception){
die('ERROR: ' . $exception>getMessage());
}
}
?>
<!htmlform here where the product information will be entered >
	<form action='order.php' method='post'>
		<table class='table tablehover tableresponsive tablebordered'>
			<tr>
				<td>OrderNum</td>
				<td><input type='text' name='OrderNum' class='formcontrol'/></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type='text' name='name' class='formcontrol'/></td>
			</tr>
			<tr>
				<td>Surname</td>
				<td><input type='text' name='surname' class='formcontrol'/></td>
			</tr>
			<tr>
				<td>Contact</td>
				<td><input type='text' name='contact' class='formcontrol'/></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><input type='text' name='gender' class='formcontrol'/></td>
			</tr>
			<tr>
				<td>date</td>
				<td><input type='text' name='date' class='formcontrol'/></td>
			</tr>
			<tr>
				<td>description</td>
				<td><input type='text' name='description' class='formcontrol'/></td>
			</tr>
			<tr>
				<td>Total Amount</td>
				<td><input type='text' name='totalAmount' class='formcontrol'/></td>
			</tr>
			<tr>
				<td></td>
				<td><input type='submit' value='Save' class='btn btnprimary'/><a href='orderRead.php' class='btn btndanger'>Back to read products</a></td>
			</tr>
	</table>
</form>
<div class="pageheader">
<h1>Create Product</h1>
</div>
<!dynamic content will be here >
</div> <!end.container >
<!jQuery(necessary for Bootstrap's JavaScript plugins) >
<script src="libs/jquery3.0.0.min.js"></script>
<!Include all compiled plugins (below), or include individual files as needed >
<script src="libs/bootstrap3.3.6/js/bootstrap.min.js"></script>
</body>
</html>