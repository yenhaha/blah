<?php
	$error = '';
	$username = '';
	$password = '';
	
	if(isset($_POST['login']))
	{
		$username = $_POST['user'];
		$password = $_POST['password'];

		if(login($username, $password))
		{
			if($_SESSION['isloginadmin'] == true)
				header('Location:admin');
			/*else if($_SESSION['isloginpatient'] == true)
				header('Location:admin');
			*/
		}
		else
			$error = "<code>Incorrect username or password</code>";

	}
?>

<!Doctype html>
<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
		<script src="../bootstrap/3.3.2/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-3 col-md-offset-4">
					<div class="account-wall" style = "margin-top:50%">
						<h3 class="text-center login-title">Log In</h1>
						<form class="form-signin" role = "form" method = "post">
							<input type="text" class="form-control" name = "user" placeholder= "Username" required = "required" autofocus><br>
							<input type="password" class="form-control" name = "password" placeholder= "Password" required = "required"><br>
							<?php if($error != ''){ echo $error; } ?>
							<input type="submit" class="btn btn-lg btn-primary btn-block" name = "login" value = "Log In">
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
