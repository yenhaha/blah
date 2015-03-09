<?php	
	$getupdpatient = getupdpatient();
	
	$lname = '';
	$fname = '';
	$mname = '';
	$gender = '';
	$contact = '';
	$bdate = '';
	$address = '';
	$occupation = '';
	$cstatus = '';
	$sname = '';
	$sphone = '';
	
	if(isset($_POST['submit']))
	{
		$patientid = trim($_POST['patientid']);
		$lname = trim($_POST['lname']);
		$fname = trim($_POST['fname']);
		$mname = trim($_POST['mname']);
		$gender = trim($_POST['gender']);
		$contact = trim($_POST['contact']);
		$bdate = trim($_POST['bdate']);
		$address = trim($_POST['address']);
		$occupation = trim($_POST['occupation']);
		$cstatus = trim($_POST['cstatus']);
		$sname = trim($_POST['sname']);
		$sphone = trim($_POST['sphone']);
		updpatient($patientid, $lname, $fname, $mname, $gender, $contact, $bdate, $address, $occupation, $cstatus, $sname, $sphone);
		echo "<div style = 'color: #61C000;'>Patient updated successfully!</div>" . "<br />";
	}
?>
<!DOCTYPE html>
<html>
	<head><title>Update</title>
	<body>
		<br>
		<h4>UPDATE PATIENT</h4>
		<hr />
		<div class = "row">
			<div class = "col-md-2">
				<form method = "post">
					<div class = "form-group">
						<select class = "form-control" name = "patientid">
							<option value = "" disabled>Please select</option>
							<?php foreach($getupdpatient as $d): ?>
								<option value = "<?php echo htmlentities($d['patientid']); ?>"><?php echo htmlentities($d['lname']); ?>, <?php echo htmlentities($d['fname']); ?> <?php echo htmlentities($d['mname']); ?>.</option>
							<?php endforeach; ?>
						</select><br>
						<label>Last Name:</label><br>
						<input type = "text" name = "lname" class = "form-control" value = "<?php htmlentities($lname); ?>"><br><br>
						<label>First Name:</label><br>
						<input type = "text" name = "fname" class = "form-control" value = "<?php htmlentities($fname); ?>"><br><br>
						<label>Middle Initial:</label><br>
						<input type = "text" name = "mname" class = "form-control" value = "<?php htmlentities($mname); ?>"><br><br>
						<label>Gender:</label><br>
						<select name = "gender" class = "form-control"  value = "<?php htmlentities($gender); ?>">
							<option value = "Male">Male</option>
							<option value = "Female">Female</option>
						</select><br>
						<label>Contact No:</label><br>
						<input type = "text" name = "contact" class = "form-control"  value = "<?php htmlentities($contact); ?>"><br><br>
						<label>Birthdate:</label><br>
						<input type = "date" name = "bdate" class = "form-control"  value = "<?php htmlentities($bdate); ?>"><br><br>
						<label>Address:</label><br>
						<input type = "text" name = "address" class = "form-control"  value = "<?php htmlentities($address); ?>"><br><br>
						<label>Occupation:</label><br>
						<input type = "text" name = "occupation" class = "form-control"  value = "<?php htmlentities($occupation); ?>"><br><br>
						<label>Civil Status:</label><br>
						<select name = "cstatus" class = "form-control"  value = "<?php echo htmlentities($cstatus);?>">
							<option value = "Single">Single</option>
							<option value = "Married">Married</option>
							<option value = "Widowed">Widowed</option>
						</select><br>
						<label>Spouse Name:</label><br>
						<input type = "text" name = "sname" class = "form-control"  value = "<?php htmlentities($sname); ?>"><br><br>
						<label>Spouse Contact:</label><br>
						<input type = "text" name = "sphone" class = "form-control"  value = "<?php htmlentities($sphone); ?>"><br><br>
					</div>
					<div class = "form-group">
						<button type = "submit" name = "submit" class = "btn btn-primary">Save</button>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>