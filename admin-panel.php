<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="jumbtron" style="background:url('image/1.jpg') no-repeat;background-size:cover;height:300px;"></div>
<br/>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<div class="list-group">
				<a href="" class="list-group-item active" style="baground-color:#3498DB;color:ffffff;border-color:#3498DB;">Customer</a>
				<a href="customer_details.php" class="list-group-item">Customer Details</a>
				<a href="create.php" class="list-group-item">Customer Order</a>
			</div>
			<hr/>
		</div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-body" style="background-color:#3498DB;color:#ffffff;">
					Customer Order List
				</div>
				<div class="card-body">
					<form class="form-group" action="func.php" method="post">
						<label>Order Number :</label>
						<input type="text" name="OrderNum" class="form-control"><br>
						<label>First Name :</label>
						<input type="text" name="firstname" class="form-control"><br
						<label>Last Name :</label>
						<input type="text" name="lastname" class="form-control"><br>
						<label>Email :</label>
						<input type="text" name="email" class="form-control"><br>
						<label>Contact :</label>
						<input type="text" name="contact" class="form-control"><br>
						<label>Gender :</label>
						<select class="form-control" name="gender">
							<option value=""></option>
							<option value="Female">Female</option>
							<option value="Male">Male</option>
							<option value="Other">Other</option>
						</select><br>
						<label>Date :</label>
						<input type="text" name="date" class="form-control"><br>
						<label>Description :</label>
						<input type="text" name="description" class="form-control"><br>
						<label>Total Amount :</label>
						<input type="text" name="totalAmount" class="form-control"><br>
						<input type="submit" class="btn btn-primary" name="pat_submit" value="New Product">
					
					</form>
				
				
				
				
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
	</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.14.0/dist/sweetalert2.all.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
swal({
		title:'Welcome!',
		text:'Have a great day',
		imageUrl:'images/4.jpg',
		imageWidth:400,
		imageHeight:200,
		imageAlt:'Custom image',
		animation: false
	})
	</script>
</body>
</html>