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

		echo "<br>";

		echo count($fruits);

		/* if-else */

		echo "<br>";

		$z = 20;

		if($z ==20) {
			echo "The value is 20";
		}
		else {
			echo "The value is not empty";
		}

		echo "<br>";

		$s = "str";

		if($s == "stz") {
			echo "Test is stz";
		}
		elseif($s == "str") {
			echo "Test is str";
		}
		else {
			echo "Text is not known";
		}

		/* Switch */

		echo "<br>";

		$day = "WEDNESDAY";

		switch ($day) {
			case 'SUNDAY':
				echo "It's Sunday";
				break;
			case 'MONDAY':
				echo "It's Monday";
				break;
			case 'WEDNESDAY':
				echo "It's Wednesday";
				break;
			default:
				echo "Unknown";
		}

		/* Loops */

		echo "<br>";

		for($p = 1; $p <= 10; $p++) {
			echo $p . "<br>";
		}

		echo "<br>";

		$q = 1;
		while($q <= 10) {
			echo $q . "<br>";
			$q++;
		}

		// do-while

		/* do {} while(expression);
		*/

		$cars = array("toyota", "honda", "mitsubishi");

		foreach ($cars as $v) {
			echo $v . "<br>";
		}

		$carsArray = array("toyota" => "1", "honda" => "2", "mitsubishi" => "3");

		foreach ($carsArray as $v => $k) {
			/*echo $v . "<br>";
			echo $k . "<br>";*/

			echo $k . " " . $v . "<br>";
		}

		/* break & continue */

		/* PHP Number (isNaN) */

		/* PHP String */
		echo "<br>";

		$sample = "Hello PHP";

		echo "Number of words. " . str_word_count($sample);

		echo "<br>";

		echo "Position: " . strpos($sample, "PHP");

		echo "<br>"; 

		echo "Uppercase: " . strtoupper($sample);

		echo "<br>";

		echo "Length: " . strlen($sample);

		/* Function */

		function greetings() {
			echo "Good Afternoon";
		}

		echo "<br>";

		greetings();

		echo "<br>";

		function greetingsWithReturn() {
			return "Good Afternoon with return";
		}

		$greet = greetingsWithReturn();

		echo $greet;

		echo "<br>";

		echo greetingsWithReturn();

		echo "<br>";

		// declare(strict_types=1)

		function greetingWithParameter($msg) : string {
			return $msg;
		}

		echo greetingWithParameter("Custom greetings");

		echo "<br>";

		/* PHP constants */

		define("pi", "3.1416");

		echo pi;

		echo "<br>";

		/* RegEx */

		// preg_match(), preg_match_all(), preg_replace();

		/* SUPERGLOBAL Variables*/

		// $GLOBAL
		// $_SERVER
		// $_GET
		// $_POST
		// $_FILES
		// $_REQUEST
		// $_ENV
		// $_SESSION
		// $_COOKIE
	?>

</body>
</html>