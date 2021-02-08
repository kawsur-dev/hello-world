<!DOCTYPE html>
<html>
<head>
	<title>PHP Detail</title>
</head>
<body>		

	<h1>PHP Detail Example</h1>

	<?php 

		// This is comment;
		# This is comment

		/* 
		This is comment
		*/

		/* echo vs print */
		echo "Hello PHP";
		echo "<br>";
		print "Hello PHP";

		echo "<br>";

		/* Data type */

		// String
		// Integer
		// Float
		// Boolean
		// Array
		// Object
		// NULL

		$x = "PHP";
		$y = "Learn";

		echo $x . " " . $y;

		echo "<br>";

		var_dump($x);

		$c = false;

		var_dump($c);

		echo "<br>";

		$fruits = array("Apple", "Banana", 20);

		echo $fruits[0] . $fruits[2];

		echo "<br>";

		$i = "10";
		$j = "20.5";

		echo $i + $j;

		
	?>

</body>
</html>