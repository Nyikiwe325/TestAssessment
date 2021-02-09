<!DOCTYPE HTML>
<html>
<head>
<title>Read One Record </title>
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
// get passed parameter value, in this case, the record ID
			// isset() is a PHP function used to verify if a value is there or

			$id=isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID notfound.');
			//include database connection
			include 'database.php';
			// read current record's data
			try {
			// prepare select query
			$query = "SELECT id, itemId, name, Qty, cost, total FROM product WHERE id = ? LIMIT 0,1";
			$stmt = $con->prepare( $query );
			// this is the first question mark
			$stmt->bindParam(1, $id);
			// execute our query
			$stmt->execute();
			// store retrieved row to a variable
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			// values to fill up our form
			$itemId = $row['itemId'];
			$name = $row['name'];
			$Qty = $row['Qty'];
			$cost = $row['cost'];
			$total = $row['total'];
			}
			// show error
			catch(PDOException $exception){
			die('ERROR: ' . $exception>getMessage());
		}
?>
<!we have our html table here where new user information will be displayed>
		<table class='table tablehover tableresponsive tablebordered'>
			<tr>
				<td>ItemId</td>
				<td><?php echo htmlspecialchars($itemId, ENT_QUOTES); ?></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><?php echo htmlspecialchars($name, ENT_QUOTES); ?></td>
			</tr>
			<tr>
				<td>Qty</td>
				<td><?php echo htmlspecialchars($Qty, ENT_QUOTES);?></td>
			</tr>
			<tr>
				<td>Cost</td>
				<td><?php echo htmlspecialchars($cost, ENT_QUOTES); ?></td>
			</tr>
			<tr>
				<td>Total</td>
				<td><?php echo htmlspecialchars($total, ENT_QUOTES); ?></td>
			</tr>
			<tr>
				<td></td>
			<td>
			<a href='read.php' class='btn btndanger'>Back to read products</a>
		</td>
	</tr>
	</table>
<div class="pageheader">
	<h1>Read Product</h1>
</div>
<!dynamic content will be here >
</div> <!end.container >
<!jQuery(necessary for Bootstrap's JavaScript plugins) >
<script src="libs/jquery3.0.0.min.js"></script>
<!Include all compiled plugins (below), or include individual files as needed >
<script src="libs/bootstrap3.3.6/js/bootstrap.min.js"></script>
</body>
</html>