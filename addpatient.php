<?php	
	if(isset($_POST['submit']))
	{
		$lname = trim($_POST['patlname']);
		$fname = trim($_POST['patfname']);
		$mname = trim($_POST['patmname']);
		
		addpatient($lname, $fname, $mname);
	}
?>
<!DOCTYPE html>
<html>
	<head><title>addpatient.php</title>
	<body>
		<div class = "row">
			<div class = "col-md-3">
				<form method = "post">
					<div class = "form-group">
						<label>Last Name:</label><br>
						<input type = "text" name = "patlname" class = "form-group" required><br>
						<label>First Name:</label><br>
						<input type = "text" name = "patfname" class = "form-group" required><br>
						<label>Middle Initial:</label><br>
						<input type = "text" name = "patmname" class = "form-group" required><br>
					</div>
					<div class = "form-group">
						<button type = "submit" name = "submit" "class = "btn btn-primary">Save</button>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>