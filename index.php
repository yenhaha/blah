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
				font-color: #023E58;
			}
			.page-header{
				position: relative;
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
			<div class = "page-header">
				<h3>Tan Dental Clinic</h3>
			</div>
			<div class = "content">
				<div class = "link-section">
					<ul class="nav nav-pills">
						<li role="presentation"><a href="?p=addpatient">Add</a></li>
						<li role="presentation"><a href="#">Update</a></li>
					</ul>
				</div>
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