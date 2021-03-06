<!DOCTYPE html>
<html>
<head>
	<title>Json Object Example</title>
</head>
<body>

	<h1>Json Object Example</h1>

	<?php 

		$arr1 = array('userId' => 1, 'password' => '123', 'fullName' => "abc");
		$json_encoded_1 = json_encode($arr1);

		$arr2 = array('userId' => 2, 'password' => '345', 'fullName' => "def");
		$json_encoded_2 = json_encode($arr2);

		$arr3 = array('userId' => 3, 'password' => '789', 'fullName' => "ghi");
		$json_encoded_3 = json_encode($arr3);

		$f1 = fopen("temp.txt", "w");
		fwrite($f1, $json_encoded_1 . "\n");	
		fclose($f1);

		$f2 = fopen("temp.txt", "a");
		fwrite($f2, $json_encoded_2 . "\n");	
		fclose($f2);

		$f3 = fopen("temp.txt", "a");
		fwrite($f3, $json_encoded_3 . "\n");	
		fclose($f3);

		$f4 = fopen("temp.txt", "r");
		$data =  fread($f4, filesize("temp.txt"));

		$data_after_newline_delimeter = explode("\n", $data);

		for($i = 0; $i < count($data_after_newline_delimeter) - 1; $i++) {
			$json_decoded = json_decode($data_after_newline_delimeter[$i], true);
			echo "<br>";
			echo $json_decoded['userId'] . " " . $json_decoded['password']. " " . $json_decoded['fullName'];
		}

	?>

</body>
</html>