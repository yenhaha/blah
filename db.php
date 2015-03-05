<?php

	function site_db()
	{
		try
		{
			return new PDO('mysql:/host=localhost;dbname=clinic','root','');
		}
		catch(PDOException $ex)
		{
			echo "Connection Error: ", $ex->getMessage();
		}
	}
	
	function addpatient($lname, $fname, $mname)
	{
		$db = site_db();
		$sql = "insert into patient(patlname, patfname, patmname) values (?,?,?)";
		$st = $db->prepare($sql);
		$st->execute(array($lname,$fname,$mname));
		echo "<div class = 'alert alert-success' style = 'width: 280px;'>Patient added successfully!</div>" . "<br />";
		$db = null;
	}