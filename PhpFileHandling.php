<!DOCTYPE html>
<html>
<head>
	<title>Php File Handling</title>
</head>
<body>

	<h1>Php File Handling</h1>

	<?php

		$filePath = "temp.txt";

		echo readfile($filePath);

		echo "<br>";

		$f1 = fopen($filePath, "r");

		echo "<br>";

		echo fread($f1, filesize($filePath));
		/*echo fread($f, filesize($filePath) - 3);*/

		fclose($f1);

		$f2 = fopen($filePath, "r");

		$data = fread($f2, filesize($filePath));

		echo "<br>";

		echo $data;

		echo "<br>";

		echo "strlen: " . strlen($data);

		echo "<br>";

		echo "word count: " . str_word_count($data);

		fclose($f2);

		$f3 = fopen($filePath, "w");

		fwrite($f3, "Hello PHP");

		fclose($f3);


		$f4 = fopen($filePath, "a");

		fwrite($f4, "Hello PHP\n");

		fclose($f4);

	?>

</body>
</html>