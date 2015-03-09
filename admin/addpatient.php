<?php	
	if(isset($_POST['submit']))
	{
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
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
		
		addpatient($username, $password, $lname, $fname, $mname, $gender, $contact, $bdate, $address, $occupation, $cstatus, $sname, $sphone);
		echo "<div style = 'color: #61C000;'>Patient added successfully!</div>" . "<br />";
	}
?>
<!DOCTYPE html>
<html>
	<head><title>Add Patient</title>
	<body>
		<br>
		<h4>ADD PATIENT</h4>
		<hr />
		<div class = "row">
			<div class = "col-md-2">
				<form method = "post">
					<div class = "form-group">
						<label>Username:</label>
						<input type = "text" name = "username" required = "required" class = "form-control"><br><br>
						<label>Password:</label>
						<input type = "password" name = "password" required = "required" class = "form-control"><br><br>
						<label>Last Name:</label><br>
						<input type = "text" name = "lname" required = "required" class = "form-control"><br><br>
						<label>First Name:</label><br>
						<input type = "text" name = "fname" required = "required" class = "form-control"><br><br>
						<label>Middle Initial:</label><br>
						<input type = "text" name = "mname" required = "required" class = "form-control"><br><br>
						<label>Gender:</label><br>
						<select class = "form-control" name = "gender" required = "required">
							<option value = "Male">Male</option>
							<option value = "Female">Female</option>
						</select><br>
						<label>Contact No:</label><br>
						<input type = "text" name = "contact" required = "required" class = "form-control"><br><br>
						<label>Birthdate:</label><br>
						<input type = "date" name = "bdate" required = "required" class = "form-control"><br><br>
						<label>Address:</label><br>
						<input type = "text" name = "address" required = "required" class = "form-control"><br><br>
						<label>Occupation:</label><br>
						<input type = "text" name = "occupation" required = "required" class = "form-control"><br><br>
						<label>Civil Status:</label><br>
						<select name = "cstatus" required = "required" class = "form-control">
							<option value = "Single">Single</option>
							<option value = "Married">Married</option>
							<option value = "Widowed">Widowed</option>
						</select><br>
						<label>Spouse Name:</label><br>
						<input type = "text" name = "sname" class = "form-control"><br><br>
						<label>Spouse Contact:</label><br>
						<input type = "text" name = "sphone" class = "form-control"><br><br>
					</div>
					<div class = "form-group">
						<button type = "submit" name = "submit" class = "btn btn-primary">Save</button>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>