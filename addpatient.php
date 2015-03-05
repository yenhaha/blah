<?php	
	if(isset($_POST['submit']))
	{
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
		$pstatus = trim($_POST['pstatus']);
		addpatient($lname, $fname, $mname, $gender, $contact, $bdate, $address, $occupation, $cstatus, $sname, $sphone, $pstatus);
	}
?>
<!DOCTYPE html>
<html>
	<head><title>addpatient.php</title>
	<body>
		<br>
		<h4>ADD PATIENT</h4>
		<div class = "row">
			<div class = "col-md-3">
				<form method = "post">
					<div class = "form-group">
						<label>Last Name:</label><br>
						<input type = "text" name = "lname" required = "required"><br><br>
						<label>First Name:</label><br>
						<input type = "text" name = "fname" required = "required"><br><br>
						<label>Middle Initial:</label><br>
						<input type = "text" name = "mname" required = "required"><br><br>
						<label>Gender:</label><br>
						<input type = "radio" name = "gender" value = "Male"> Male
						<input type = "radio" name = "gender" value = "Female"> Female<br><br>
						<label>Contact No:</label><br>
						<input type = "text" name = "contact" required = "required"><br><br>
						<label>Birthdate:</label><br>
						<input type = "date" name = "bdate" required = "required"><br><br>
						<label>Address:</label><br>
						<input type = "text" name = "address" required = "required"><br><br>
						<label>Occupation:</label><br>
						<input type = "text" name = "occupation" required = "required"><br><br>
						<label>Civil Status:</label><br>
						<input type = "radio" name = "cstatus" value = "Single"> Single
						<input type = "radio" name = "cstatus" value = "Married"> Married
						<input type = "radio" name = "cstatus" value = "Widowed"> Widowed<br><br>
						<label>Spouse Name:</label><br>
						<input type = "text" name = "sname"><br><br>
						<label>Spouse Contact:</label><br>
						<input type = "text" name = "sphone"><br><br>
						<label>Status:</label><br>
						<input type = "radio" name = "pstatus" value = "1"> Active
						<input type = "radio" name = "pstatus" value = "0"> Inactive
					</div>
					<div class = "form-group">
						<button type = "submit" name = "submit" class = "btn btn-primary">Save</button>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>