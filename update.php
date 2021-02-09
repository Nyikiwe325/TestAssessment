<!DOCTYPE HTML>
<html>
<head>
<title>Update a Record</title>
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

$id=isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');
// read current record's data
try {
// prepare select query

$query = "SELECT id, itemId,name, Qty, cost,total FROM product WHERE id = ? LIMIT 0,1";
$itemId =isset ($row['itemId']);
$name = isset($row['name']);
$Qty = isset($row['Qty']);
$cost =isset ($row['cost']);
$total = isset($row['total']);
}
// show error
catch(PDOException $exception){
die('ERROR: ' . $exception>getMessage());
}
?>
<?php
// get passed parameter value, in this case, the record ID
// isset() is a PHP function used to verify if a value is there or

$id=isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');
//include database connection
include 'database.php';
// check if form was submitted
if($_POST){
try{
// write update query
// in this case, it seemed like we have so many fields to

// it is better to label them and not use question marks
$query = "UPDATE product SET itemId=:itemId,name=:name, Qty=:Qty,cost=:cost,total=:total WHERE id = :id";
// prepare query for excecution
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
$stmt->bindParam(':id', $id);
// Execute the query
if($stmt->execute()){
echo "<div class='alert alertsuccess'>Record was updated.</div>";
}else{
echo "<div class='alert alertdanger'>Unable to update record. Please try again.</div>";
}
}
// show errors
catch(PDOException $exception){
die('ERROR: ' . $exception>getMessage());
}
}
?>
<!we have our html form here where new user information will be entered>
<form action='update.php?id=<?php echo htmlspecialchars($id); ?>'method='post' border='0'>
<table class='table tablehover tableresponsive tablebordered'>
<tr>
<td>Item Id</td>
<td><input type='text' name='itemId' value="<?php echo htmlspecialchars($itemId, ENT_QUOTES); ?>" class='formcontrol'/></td>
</tr>
<tr>
<td>Name</td>
<td><input type='text' name='name' value="<?php echo htmlspecialchars($name, ENT_QUOTES); ?>" class='formcontrol'/></td>
</tr>
<tr>
<td>Qty</td>
<td><input type='text' name='Qty' value="<?php echo htmlspecialchars($Qty, ENT_QUOTES); ?>" class='formcontrol'/></td>
</tr>
<tr>
<td>Cost</td>
<td><input type='text' name='cost' value="<?php echo htmlspecialchars($cost, ENT_QUOTES); ?>" class='formcontrol'/></td>
</tr>
<tr>
<td>Total</td>
<td><input type='text' name='total' value="<?php echo htmlspecialchars($total, ENT_QUOTES); ?>" class='formcontrol'/></td>
</tr>
<tr>
<td></td>
<td>
<input type='submit' value='Save Changes' class='btn btnprimary'/><a href='read.php' class='btn btndanger'>Back to read products</a>
</td>
</tr>
</table>
</form>
<div class="pageheader">
<h1>Update Product</h1>
</div>
<!dynamic content will be here >
</div> <!end.container >
<!jQuery(necessary for Bootstrap's JavaScript plugins) >
<script src="libs/jquery3.0.0.min.js"></script>
<!Include all compiled plugins (below), or include individual files as needed >
<script src="libs/bootstrap3.3.6/js/bootstrap.min.js"></script>
</body>
</html>