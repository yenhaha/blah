<?php
	$delpatient = delgetpatient();
	
	if(isset($_POST['submit']))
	{
		$patientid = ($_POST['patientid']);
		delpatient($_POST['patientid']);
		echo "<div style = 'color: #61C000;'>Patient deleted successfully!</div>" . "<br />";
	}
?>
<!DOCTYPE html>
<html>
	<head><title>Delete Patient</title>
	<body>
		<br>
		<h4>DELETE PATIENT</h4>
		<hr />
		<div class = "row">
			<div class = "col-md-3">
				<form class = "form" method = "post">
					<div class = "form-group">
					    <select class = "form-control" name = "patientid" required = "required">
							<option value = "" disabled>Please select</option>
							<?php foreach($delpatient as $d): ?>
								<option value = "<?php echo htmlentities($d['patientid']); ?>"><?php echo htmlentities($d['lname']); ?>, <?php echo htmlentities($d['fname']); ?> <?php echo htmlentities($d['mname']); ?>.</option>
							<?php endforeach; ?>
						 </select>
					</div>
					<div class = "form-group">
						<button type = "submit" name = "submit" class = "btn btn-primary">Save</button>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>