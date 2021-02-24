<?php 
	setcookie("user_id", "abc", time() + 3600);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cookie Example</title>
</head>
<body>

	<h1>Cookie Example</h1>

	<?php

		/*if(count($_COOKIE) > 0) {
			echo "Cookies are enabled";
		} 
		else {
			echo "Cookies are not enabled";
		}*/

		if(isset($_COOKIE['user_id'])) {
			echo $_COOKIE['user_id'];
		}

	?>

</body>
</html>