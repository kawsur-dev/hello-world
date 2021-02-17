<!DOCTYPE html>
<html>
<head>
	<title>Registration Form Self</title>
</head>
<body>

	<?php 

		$firstName = $lastName = $website = "";
		$firstNameErr = $lastNameErr = $websiteErr = "";

		if($_SERVER['REQUEST_METHOD'] == "POST") {

			if(empty($_POST['fname'])) {
				$firstNameErr = "Please fill up the firstname";
			}
			else {
				$firstName = $_POST['fname'];
			}

			if(empty($_POST['lname'])) {
				$lastNameErr = "Please fill up the lastname";
			}
			else {

				$lastName = trim($_POST['lname']);
				$lastName = htmlspecialchars($_POST['lname']);
			}

			if(empty($_POST['website'])) {
				$websiteErr = "Please fill up the website";
			}
			else if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$_POST['website'])) {
  				$websiteErr = "Invalid URL";
			}
			else {
				$website = $_POST['website'];
			}

			if($firstNameErr == "" && $lastNameErr == "" && $websiteErr == "") {
				echo "Successful " . $firstName . " " . $lastName . " " . $website;
			}
		}
	?>

	<h1>Registration Form Self</h1>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">

		<label for="firstName">First Name</label>
		<input type="text" id="firstName" name="fname" value="<?php echo $firstName ?>">
		<p><?php echo $firstNameErr; ?></p>

		<br>
		
		<label for="lastName">Last Name</label>
		<input type="text" id="lastName" name="lname" value="<?php echo $lastName ?>">
		<p><?php echo $lastNameErr; ?></p>

		<br>

		<label for="website">Website</label>
		<input type="url" id="website" name="website" value="<?php echo $website ?>">
		<p><?php echo $websiteErr; ?></p>

		<br>

		<input type="submit" value="Submit">

	</form>

</body>
</html>