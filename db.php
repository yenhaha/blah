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
	
	function addpatient($lname, $fname, $mname, $gender, $contact, $bdate, $address, $occupation, $cstatus, $sname, $sphone, $pstatus)
	{
		$db = site_db();
		$sql = "insert into patient(lname, fname, mname, gender, contactno, birthdate, address, occupation, civilstat, spousename, spousecontact, status) values (?,?,?,?,?,?,?,?,?,?,?,?)";
		$st = $db->prepare($sql);
		$st->execute(array($lname, $fname, $mname, $gender, $contact, $bdate, $address, $occupation, $cstatus, $sname, $sphone, $pstatus));
		echo "<div style = 'color: #61C000;'>Patient added successfully!</div>" . "<br />";
		$db = null;
	}
	
	function viewpatient()
	{
		$db = site_db();
		$sql = "select * from patient order by 1 asc";
		$st = $db->prepare($sql);
		$st->execute();
		$rows = $st->fetchAll();
		$db = null;
		
		return $rows;
	}