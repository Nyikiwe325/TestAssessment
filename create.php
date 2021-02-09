<!DOCTYPE HTML>
<html>
<head>
  <title>Create a Record</title>
	<!Bootstrap><!Latest compiled and minified CSS >
	<link rel="stylesheet" href="libs/bootstrap3.3.6/css/bootstrap.min.css" />
	<!HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries >
	<!WARNING:Respond.js doesn't work if you view the page viafile:// >
	<![if lt IE 9]>
	<script src=" https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js "></script>
	<script src=" https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js "></script>
	<![endif]>
</head>
<body>
	<!container>
		<div class="container">
			<!html form here where the product information will be entered >
			<?php
			if($_POST){
			
			include 'database.php';
					try{
					// insert query
					$query = "INSERT INTO product SET itemId=:itemId, name=:name,Qty=:Qty, cost=:cost, total=:total";
					// prepare query for execution
					$stmt = $con->prepare($query);
					// posted values
					$itemId=htmlspecialchars(strip_tags($_POST['itemId']));
					$name=htmlspecialchars(strip_tags($_POST['name']));
					$Qty=htmlspecialchars(strip_tags($_POST['Qty']));
					$cost=htmlspecialchars(strip_tags($_POST['cost']));
					$total=htmlspecialchars(strip_tags($_POST['total']));
					// bind the parameters
					$stmt->bindParam(':itemId', $itemId);
					$stmt->bindParam(':name', $name);
					$stmt->bindParam(':Qty', $Qty);
					$stmt->bindParam(':cost', $cost);
					$stmt->bindParam(':total', $total);

					// Execute the query
					if($stmt->execute())
					{
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

			<form action='create.php' method='post'>
				<table class='table tablehover tableresponsive tablebordered'>
					<tr>
						<td>Item Id</td>
						<td><input type='text' name='itemId' class='formcontrol'/></td>
					</tr>
					<tr>
						<td>Name</td>
						<td><input type='text' name='name' class='formcontrol'/></td>
					</tr>
					<tr>
						<td>Qty</td>
						<td><input type='text' name='Qty' class='formcontrol'/></td>
					</tr>
					<tr>
						<td>Cost</td>
						<td><input type='text' name='cost' class='formcontrol'/></td>
					</tr>
					<tr>
						<td>Total</td>
						<td><input type='text' name='total' class='formcontrol'/></td>
					</tr>
					<tr>
						<td></td>
						<td><input type='submit' value='Save' class='btn btnprimary'/><a href='read.php' class='btn btndanger'>Back to read products</a><a href='customer_details.php' class='btn btndanger'>Back to customer list</a></td>
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