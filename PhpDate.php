<!DOCTYPE html>
<html>
<head>
	<title>Php Date Example</title>
</head>
<body>

	<h1>Php Date Example</h1>

	<?php 

		echo date("d-M-Y");

		echo "<br>";

		echo time(); 

		echo "<br>";

		echo date("d-M-Y", strtotime('+1 week'));

		echo "<br>";

		echo "&copy" . "2010" . "-" . date("Y") . " Abc company.";
	?>

</body>
</html>