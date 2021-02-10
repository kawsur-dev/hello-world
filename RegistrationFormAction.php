<!DOCTYPE html>
<html>
<head>
	<title>Registration Form Action</title>
</head>
<body>

	<h1>Registration Form Action</h1>

	<?php 

		$firstName = $_POST['fname'];
		$lastName = $_POST['lname'];

		echo "Client name is: $firstName $lastName";
	?>

</body>
</html>