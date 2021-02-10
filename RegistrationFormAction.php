<!DOCTYPE html>
<html>
<head>
	<title>Registration Form Action</title>
</head>
<body>

	<h1>Registration Form Action</h1>

	<?php 

		if($_SERVER['REQUEST_METHOD'] == "POST") {
			
			if(empty($_POST['fname']) && empty($_POST['lname'])) {
				echo "Please fill up the form properly";
			} 
			else {
				$firstName = $_POST['fname'];
				$lastName = $_POST['lname'];
				echo "Client name is: $firstName $lastName";
			}
		}
	?>

</body>
</html>