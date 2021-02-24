<!DOCTYPE html>
<html>
<head>
	<title>File Upload Action</title>
</head>
<body>

	<h1>File Upload Action</h1>

	<?php 

		$tmp_name = $_FILES['fileupload']['tmp_name'];
		$file_name = $_FILES['fileupload']['name'];
		$file_size = $_FILES['fileupload']['size'];
		$file_type = $_FILES['fileupload']['type'];

		move_uploaded_file($tmp_name, "uploads/" . $file_name);

		echo "File upload successful";
	?>

</body>
</html>