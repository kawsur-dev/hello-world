<!DOCTYPE html>
<html>
<head>
	<title>Json Array Example</title>
</head>
<body>

	<h1>Json Array Example</h1>

	<?php 

	$filepath = "temp.txt";

	/*$jsonObj = array('name' => 'abc', 'gender' => 'male');
	$f1 = fopen($filepath, "w");
	$json_encode_1 = json_encode($jsonObj);
	fwrite($f1, $json_encode_1 . "\n");
	fclose($f1);

	$f2 = fopen($filepath, "r");
	$data = fread($f2, filesize($filepath));
	$data_expolode_by_newline = explode("\n", $data);
	$json_decode_1 = json_decode($data_expolode_by_newline[0], true);
	fclose($f2);

	print_r($json_decode_1)

	echo $json_decode_1["name"];
	echo "<br>";
	echo $json_decode_1["gender"];*/


	/*$jsonArray = array('apple', 'orange', 'pineapple');
	$f3 = fopen($filepath, "w");
	$json_encode_2 = json_encode($jsonArray);
	fwrite($f3, $json_encode_2 . "\n");
	fclose($f3);

	$f4 = fopen($filepath, "r");
	$data_arr = fread($f4, filesize($filepath));
	$data_expolode_by_newline_1 = explode("\n", $data_arr);
	$json_decode_2 = json_decode($data_expolode_by_newline_1[0]);

	print_r($json_decode_2);

	echo "<br>";
	echo $json_decode_2[0];
	echo "<br>";
	echo $json_decode_2[1];*/

	?>

</body>
</html>
