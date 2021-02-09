<!DOCTYPE HTML>
<html>
<head>
<title>Read Records</title>
<!Bootstrap>
<!Latest compiled and minified CSS >
<link rel="stylesheet" href="libs/bootstrap3.3.6/css/bootstrap.min.css" />
<!HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries >
<!WARNING:Respond.js doesn't work if you view the page via file:// >
<![if lt IE 9]>
<script src=" https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js "></script>
<script src=" https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js "></script>
<![endif]>
<!custom css >
<style>
.mr1em{marginright:1em; }
.mb1em{marginbottom:1em; }
.ml1em{marginleft:1em; }
</style>
</head>
<body>
<!container>
<div class="container">
<?php
// include database connection
include 'database.php';
$action = isset($_GET['action']) ? $_GET['action'] : "";
// if it was redirected from delete.php
if($action=='deleted'){
echo "<div class='alert alertsuccess'>Record was deleted.</div>";
}
// select all data
$num="";
$query = "SELECT id, itemId, name, Qty, cost, total  FROM product ORDER BY id DESC";
$stmt = $con->prepare($query);
$stmt->execute();
// this is how to get number of rows returned
$num = $stmt->rowCount();
// link to create record form
echo "<a href='create.php' class='btn btnprimary mb1em'>Create New Product</a>";
//check if more than 0 record found
if($num>0){
echo "<table class='table tablehover tableresponsive tablebordered'>";//

//creating our table heading
echo "<tr>";
echo "<th>ID</th>";
echo "<th>ItemId</th>";
echo "<th>Name</th>";
echo "<th>Qty</th>";
echo "<th>Cost</th>";
echo "<th>Total</th>";
echo "<th>Action</th>";
echo "</tr>";
// retrieve our table contents
// fetch() is faster than fetchAll()
//

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
// extract row
// this will make $row['firstname'] to
// just $firstname only
extract($row);
// creating new table row per record
echo "<tr>";
echo "<td>{$id}</td>";
echo "<td>{$itemId}</td>";
echo "<td>{$name}</td>";
echo "<td>{$Qty}</td>";
echo "<td>R{$cost}</td>";
echo "<td>R{$total}</td>";
echo "<td>";
// read one record
echo "<a href='read_one.php?id={$id}' class='btn btninfo mr1em'>Read</a>";
// we will use this links on next part of this

echo "<a href='update.php?id={$id}' class='btn btnprimary mr1em'>Edit</a>";
// we will use this links on next part of this

echo "<a href='#' onclick='delete_user({$id});'class='btn btndanger'>Delete</a>";
echo "</td>";
echo "</tr>";
}
// end table
echo "</table>";
}
// if no records found
else{
echo "<div>No records found.</div>";
}
?>
<div class="pageheader">
<h1>Read Products</h1>
</div>
<!dynamic content will be here >
</div> <!end.container >
<!jQuery(necessary for Bootstrap's JavaScript plugins) >
<script src="libs/jquery3.0.0.min.js"></script>
<!Include all compiled plugins (below), or include individual files as needed >
<script src="libs/bootstrap3.3.6/js/bootstrap.min.js"></script>
<script type='text/javascript'>
function delete_user( id ){
var answer = confirm('Are you sure you want to delete?');
if (answer){
// if user clicked ok,
// pass the id to delete.php and execute the delete query
window.location = 'delete.php?id=' + id;
}
}
</script>
</body>
</html>