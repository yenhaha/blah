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
		$sql = "select * from patient where status = ? order by 1 asc";
		$st = $db->prepare($sql);
		$st->execute(array(1));
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
	function update_fname($patientid, $fname)
	{
		$db = site_db();
		$sql = "update patient set fname = ? where patientid = ?";
		$st = $db->prepare($sql);
		$st->execute(array($fname, $patientid));
		$db = null;
	}
	function update_mname($patientid, $mname)
	{
		$db = site_db();
		$sql = "update patient set mname = ? where patientid = ?";
		$st = $db->prepare($sql);
		$st->execute(array($mname, $patientid));
		$db = null;
	}
	function update_gender($patientid, $gender)
	{
		$db = site_db();
		$sql = "update patient set gender = ? where patientid = ?";
		$st = $db->prepare($sql);
		$st->execute(array($gender, $patientid));
		$db = null;
	}
	function update_contact($patientid, $contact)
	{
		$db = site_db();
		$sql = "update patient set contact = ? where patientid = ?";
		$st = $db->prepare($sql);
		$st->execute(array($contact, $patientid));
		$db = null;
	}
	function update_bdate($patientid, $bdate)
	{
		$db = site_db();
		$sql = "update patient set bdate = ? where patientid = ?";
		$st = $db->prepare($sql);
		$st->execute(array($bdate, $patientid));
		$db = null;
	}
	function update_address($patientid, $address)
	{
		$db = site_db();
		$sql = "update patient set address = ? where patientid = ?";
		$st = $db->prepare($sql);
		$st->execute(array($address, $patientid));
		$db = null;
	}
	function update_occupation($patientid, $occupation)
	{
		$db = site_db();
		$sql = "update patient set occupation = ? where patientid = ?";
		$st = $db->prepare($sql);
		$st->execute(array($occupation, $patientid));
		$db = null;
	}
	function update_cstatus($patientid, $cstatus)
	{
		$db = site_db();
		$sql = "update patient set cstatus = ? where patientid = ?";
		$st = $db->prepare($sql);
		$st->execute(array($cstatus, $patientid));
		$db = null;
	}
	function update_sname($patientid, $sname)
	{
		$db = site_db();
		$sql = "update patient set sname = ? where patientid = ?";
		$st = $db->prepare($sql);
		$st->execute(array($sname, $patientid));
		$db = null;
	}
	function update_sphone($patientid, $sphone)
	{
		$db = site_db();
		$sql = "update patient set sphone = ? where patientid = ?";
		$st = $db->prepare($sql);
		$st->execute(array($sphone, $patientid));
		$db = null;
	}
