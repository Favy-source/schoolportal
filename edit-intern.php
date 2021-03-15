<?php include('server.php')?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit/Update Intern</title>
	<link rel="stylesheet" href="login.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>

<div class="container">


	<div class="header">
		
		<h2>Edit/Update Intern</h2>

	</div>

	<div class="panel-body">
		<div class="row">
		<div class="col-lg-12">
	<form action="edit-intern.php" method="post">
		
		<?php include('error.php') ?>
		<div class="form-group">>
			<label for="username">Username :</label>
			<input type="text" name="username" value="<?php echo $name; ?>" required="require" class="form-control">
		</div>

		<div class="form-group">>
			<label for="email">Email :</label>
			<input type="email" name="email" required="require" value="<?php echo $email; ?>" class="form-control">
		</div>
</div>
</div>
	</div>

	<?php if ($update == true): ?>
	<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
	
	<?php else: ?>
		<button type="submit" class="btn" name="reg_user">Submit</button>
	<?php endif ?>

		<input type="hidden" name="id" value="<?php echo $id; ?>">


	</form>



	
</div>

</body>
</html>