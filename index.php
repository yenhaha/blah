<?php
	include "db.php";
	$page = isset($_GET['p']) ? $_GET['p'] : 'index';
	
	$content = $page.".php";
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
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
				margin-left: 20px;
			}
		</style>
	</head>
	<body>
		<div class = "container-fluid">
			<div class = "content">
				  <nav class="navbar navbar-fixed">
					<div class="container-fluid">
					  <div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						  <span class="sr-only">Toggle navigation</span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="?p=index">Tan Dental Clinic</a>
					  </div>
					  <div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
						  <li><a href="?p=addpatient">Add</a></li>
						  <li><a href="#">About</a></li>
						  <li><a href="#">Contact</a></li>
						  <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
							  <li><a href="#">Action</a></li>
							  <li><a href="#">Another action</a></li>
							  <li><a href="#">Something else here</a></li>
							  <li class="divider"></li>
							  <li class="dropdown-header">Nav header</li>
							  <li><a href="#">Separated link</a></li>
							  <li><a href="#">One more separated link</a></li>
							</ul>
						  </li>
						</ul>
					  </div><!--/.nav-collapse -->
					</div><!--/.container-fluid -->
				  </nav>
				<div class = "main-content">
					<?php include_once($content); ?>
				</div>
			</div>
		</div>
		<!--
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		-->
	</body>
	
</html>