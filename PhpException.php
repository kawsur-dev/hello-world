<!DOCTYPE html>
<html>
<head>
	<title>Php Exception</title>
</head>
<body>

	<h1>Php Exception</h1>

	<?php

		function test($a, $b) {
			$i = $a; 
			$j = $b;

			if($j == 0) {
				throw new Exception("Arithmatic Exception");
			}
			else {
				$result = $i/$j;
				echo $result;
			}
		}

		try {
			test(10, 0);
		}
		catch(Exception $ex) {
			echo "No error msg shown";
		}
		finally {
			echo "It will always execute";
		}



	?>
</body>
</html>