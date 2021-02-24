<?php 

	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Session Example</title>
</head>
<body>

	<h1>Session Example</h1>

	<?php 

		$_SESSION['user_id'] = "abc";
		$_SESSION['user_name'] = "Mr. abc";

		echo "Session value user_id is: " . $_SESSION['user_id'];

		echo "<br>";

		echo "Session value user_name is: " . $_SESSION['user_name'];

		session_unset();

		echo "<br>";

		echo "Session value user_id is: " . $_SESSION['user_id'];

		echo "<br>";

		echo "Session value user_name is: " . $_SESSION['user_name'];


		// To destroy a session after login
		session_destroy();
	?>

</body>
</html>