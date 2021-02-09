<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<style type="text/css">
#ab1:hover{cursor:pointer;}
</style>
<body>
<div class="container" style="width:400px;margin-top:30px;" >
<div class="card">
<img src="image/c2.jpg" class="card-image-top">
<div class="card-body">
	<form class="form-group" action="func.php" method="post">
	<label>Surname :</label><br>
	<input type="text" name="username" class="form-control" placeholder="enter username"><br>
	<label>Password :</label><br>
	<input type="password" name="password" class="form-control" placeholder="enter password"><br>
	<input type="submit" name="login_submit" id="ab1" class="btn btn-primary"> 
	</form>
</div>
</div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
