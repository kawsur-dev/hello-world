<?php 

if(isset($_GET['studentId'])) {

	$studentId = $_GET['studentId'];

	$f = fopen("temp.txt", "r");

	$data = fread($f, filesize("temp.txt"));

	$data_filter = explode("\n", $data);


	/*$studentList = array('1' => "abc", '2' => "def");*/

	for($i = 0; $i < count($data_filter); $i++) {
		echo $data_filter[$i];
		echo "<br>";
	}
}

?>