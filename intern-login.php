<?php include('server.php');
include('db.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<div class="container">


	<div class="header">
		
		<h2>Log in</h2>

	</div>

	
								<!-- <form id="login-form" action="https://phpoll.com/login/process" method="post" > -->
	<div class="panel-body">
		<div class="row">
		<div class="col-lg-12">
	<form action="" method="post" role="form" style="display: block;">
		<div class="form-group">
			<label for="username">Username :</label>
			<input type="text" name="username" required="require" tabindex="1" class="form-control" id="username">
		</div>

		<div class="form-group">
			<label for="password">Password :</label>
			<input type="password" name="password_1" required="require" tabindex="2" class="form-control" id="password">
		</div>

		<!-- <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In"> -->

		<!-- <button type="submit" name="login_user"  class="active" id="login-form-link" href="./index-intern.php">Log In</button> -->
		<a href="./index-intern.php" class="btn-readmore">Log In</a>
	</div>
		</div>
	</div>
	</form>



	
</div>
<script src="login.js"></script>
</body>
</html>
