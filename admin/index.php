<?php
	include "../db.php";
	ob_start();
	if($_SESSION['isloginadmin'] == true)
	{
		$page = isset($_GET['p']) ? $_GET['p'] : 'addpatient';
		
		$id = $_SESSION['userid'];
		$content = $page.".php";
		
		if(isset($_GET['l']))
		{
			logout();
			header('Location:../');
		}
	}
	/*
	else
	{
		if($_SESSION['isloginpatient'] == true)
			header('Location:../patient');
		else
			header('Location:../');
	}
*/
?>
<!DOCTYPE html>
<html>
	<head>
		<head><title>Administrator</title></head>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
		<script src="../bootstrap/3.3.2/js/bootstrap.min.js"></script>
		<style>
			body{
				margin: 0 auto;
				font-family: Helvetica;
				color: #011A21;
			}
			.header{
				position: relative;
				background: #032436;
				height: 100px;
			}
			.header h3{
				color: #fff;
				margin-left: 20px;
			}
			.link-section{
				margin-top: 30px;
				margin-bottom: 30px;
			}
			.content{
				margin-left: 30px;
			}

		</style>
	</head>
	<body>
		<div class = "container-fluid">
			<div class = "content">
				<nav class = "navbar navbar-default"  style = "height:60px;">
					<div class = "container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>                        
							</button>
							<a class="navbar-brand" href="#" style = "padding:20px;">Tan Dental Clinic</a>
						</div>
						<div class="collapse navbar-collapse" id="myNavbar">
							<ul class = "nav navbar-nav pull-right" style = "padding:5px;">
								<li><a href ="?p=addpatient" id = "home"><span class = "glyphicon glyphicon-plus-sign"></span><b>&nbsp;Add</b></a></li>
								<li><a href ="?p=updpatient"><span class = "glyphicon glyphicon-pencil"></span><b>&nbsp;Update</b></a></li>
								<li><a href ="?p=delpatient"><span class = "glyphicon glyphicon-trash"></span><b>&nbsp;Delete</b></a></li>
								<li><a href ="?p=viewpatient"><span class = "glyphicon glyphicon-th-list"></span><b>&nbsp;View</b></a></li>
								<li><a href = "?l=true">Log Out</a></li>
							</ul>
						</div>
					</div>	
				</nav>
				<div class = "main-content">
					<?php include_once($content); ?>
				</div>
			</div>
		</div>
		<script src="../bootstrap/js/jquery.min.js"></script>
		<script src="../bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>