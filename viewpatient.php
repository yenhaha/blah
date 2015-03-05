<?php
	$patient = viewpatient();
?>
<!DOCTYPE html>
<html>
	<head><title>viewpatient.php</title></head>
	<body>
		<div class = "col-md-8">
			<table class = "table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Last Name</th>
						<th>First Name</th>
						<th>MI</th>
						<th>Gender</th>
						<th>Contact</th>
						<th>BirthDate</th>
						<th>Address</th>
						<th>Occupation</th>
						<th>CivilStatus</th>
						<th>Spouse Name</th>
						<th>Spouse Phone</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($patient as $pat): ?>
						<tr>
							<td><?php echo htmlentities($pat['patientid']); ?></td>
							<td><?php echo htmlentities($pat['lname']); ?></td>
							<td><?php echo htmlentities($pat['fname']); ?></td>
							<td><?php echo htmlentities($pat['mname']); ?></td>
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