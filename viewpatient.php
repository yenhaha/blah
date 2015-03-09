<?php
	$viewpatient = viewpatient();
?>
<!DOCTYPE html>
<html>
	<head><title>View Patients</title></head>
	<body>
		<br>
		<h4>VIEW PATIENTS</h4>
		<hr />
		<div class = "col-md-12">
			<table class = "table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Gender</th>
						<th>Contact</th>
						<th>Birth Date</th>
						<th>Address</th>
						<th>Occupation</th>
						<th>Civil Status</th>
						<th>Spouse Name</th>
						<th>Spouse Phone</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($viewpatient as $pat): ?>
						<tr>
							<td><?php echo htmlentities($pat['patientid']); ?></td>
							<td><?php echo htmlentities($pat['lname']); ?>, <?php echo htmlentities($pat['fname']); ?> <?php echo htmlentities($pat['mname']); ?>.</td>
							<td><?php echo htmlentities($pat['gender']); ?></td>
							<td><?php echo htmlentities($pat['contactno']); ?></td>
							<td><?php echo htmlentities($pat['birthdate']); ?></td>
							<td><?php echo htmlentities($pat['address']); ?></td>
							<td><?php echo htmlentities($pat['occupation']); ?></td>
							<td><?php echo htmlentities($pat['civilstat']); ?></td>
							<td><?php echo htmlentities($pat['spousename']); ?></td>
							<td><?php echo htmlentities($pat['spousecontact']); ?></td>
							<td><?php echo htmlentities($pat['status']); ?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</body>
</html>