<?php include('server.php')?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="login.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>

<body>

<div class="container">


	<div class="header">
		
		<h2>Register</h2>

	</div>

	<div class="panel-body">
		<div class="row">
		<div class="col-lg-12">
	<form action="register-interns.php" method="post" role="form" style="display: block;" >
	  
		<?php include('error.php') ?>

		<div class="form-group">
			<label for="username">Full Name:</label>
			<input type="text" name="username" required="require" tabindex="1" class="form-control" id="username">
		</div>
		
		<div class="form-group">
			<label for="username">Username :</label>
			<input type="text" name="username" required="require" tabindex="1" class="form-control" id="username">
		</div>

		<div class="form-group">
			<label for="email">Email :</label>
			<input type="email" name="email" required="require" tabindex="1" class="form-control" id="username">
		</div>

		<div class="form-group">
			<label for="password">Password :</label>
			<input type="password" name="password_1" required="require" tabindex="2" class="form-control" id="password">
		</div>

		<div class="form-group">
			<label for="password">Confirm Password :</label>
			<input type="password" name="password_2" required="require" tabindex="2" class="form-control" id="password">
		</div>

		<button type="submit" class="active" name="reg_user" id="login-form-link">Submit</button>
	</form>
		</div>
		</div>
</div>

</body>
</html>