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
	
	function addpatient($lname, $fname, $mname, $gender, $contact, $bdate, $address, $occupation, $cstatus, $sname, $sphone)
	{
		$db = site_db();
		$sql = "insert into patient(lname, fname, mname, gender, contactno, birthdate, address, occupation, civilstat, spousename, spousecontact, status) values (?,?,?,?,?,?,?,?,?,?,?,?)";
		$st = $db->prepare($sql);
		$st->execute(array($lname, $fname, $mname, $gender, $contact, $bdate, $address, $occupation, $cstatus, $sname, $sphone, 1));
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
	
	function delpatient($patientid)
	{
		$db = site_db();
		$sql = "update patient set status = 0 where patientid = ?";
		$st = $db->prepare($sql);
		$st->execute(array($patientid));
		$db = null;
	}
	
	function delgetpatient()
	{
		$db = site_db();
		$sql = "select patientid, lname, fname, mname from patient where status = 1 order by lname asc";
		$st = $db->prepare($sql);
		$st->execute();
		$rows = $st->fetchAll();
		$db = null;
		
		return $rows;
	}

	function getupdpatient()
	{
		$db = site_db();
		$sql = "select patientid, lname, fname, mname from patient where status = 1 order by lname asc";
		$st = $db->prepare($sql);
		$st->execute();
		$rows = $st->fetchAll();
		$db = null;
		
		return $rows;
	}
	
	  function updpatient($patientid, $lname, $fname, $mname, $gender, $contact, $bdate, $address, $occupation, $cstatus, $sname, $sphone)
	{
		if($lname != '')
			update_lname($patientid, $lname);
		if($fname != '')
			update_fname($patientid, $fname);
		if($mname != '')
			update_mname($patientid, $mname);
		if($gender != '')
			update_gender($patientid, $gender);
		if($contact != '')
			update_contact($patientid, $contact);
		if($bdate != '')
			update_bdate($patientid, $bdate);
		if($address != '')
			update_address($patientid, $address);
		if($occupation != '')
			update_occupation($patientid, $occupation);
		if($cstatus != '')
			update_cstatus($patientid, $cstatus);
		if($sname != '')
			update_sname($patientid, $sname);
		if($sphone != '')
			update_sphone($patientid, $sphone);
	}
	
	function update_lname($patientid, $lname)
	{
		$db = site_db();
		$sql = "update patient set lname = ? where patientid = ?";
		$st = $db->prepare($sql);
		$st->execute(array($lname, $patientid));
		$db = null;
	}
	