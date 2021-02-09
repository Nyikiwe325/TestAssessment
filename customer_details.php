<!DOCTYPE html>
<?php  include("func.php");?>
<html>
<head>
	<title>Customer Details</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="jumbtron" style="background:url('image/1.jpg') no-repeat;background-size:cover;height:300px;"></div>
    <br/>
	<div class="container">
	<div class="card">
				<div class="card-body" style="background-color:#3498DB;color:#ffffff;">
				<div class="row">
					<div class="col-md-1">
					<a href="admin-panel.php" class="btn btn-light">Go Back</a>
					</div>
				<div class="col-md-3"><h3>Customer List</h3></div>
				<div class="col-md-8">
					<form class="form-group" action="customer_search.php" method="post">
						<div class="row">
						<div class="col-md-10"><input type="text" name="search" class="form-control" placeholder="Enter contact"></div>
						<div class="col-md-2"><input type="submit" name="customer_search_submit" class="btn btn-light" value="Search"></div></div>
					</form>
				</div>
				</div>
				</div>
				<div class="card-body" style="background-color:#3498DB;color:#ffffff;">
				<table class="table table-hover">
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
			  <tbody>
				<?php  get_customer_details();?>			
			  </tbody>
			</table>
			</div>
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>