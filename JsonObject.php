<!DOCTYPE html>
<html>
<head>
	<title>Json Object Example</title>
</head>
<body>

	<h1>Json Object Example</h1>

	<?php 

		$arr1 = array('userId' => 1, 'password' => '123', 'fullName' => "abc");
		$json_encoded = json_encode($arr1);

		$f1 = fopen("temp.txt", "w");
		fwrite($f1, $json_encoded . "\n");	
		fclose($f1);

		$f2 = fopen("temp.txt", "r");
		$read =  fread($f2, filesize("temp.txt"));

		$json_decode = json_decode($read, true);

		echo $json_decode['userId'];
		echo "<br>";
		echo $json_decode['password'];
		echo "<br>";
		echo $json_decode['fullName'];

	?>

</body>
</html>