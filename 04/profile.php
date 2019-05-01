<?php

	include_once("function/helper.php");
	include_once("function/koneksi.php");

	$page = isset($_GET['page']) ? $_GET['page'] : false;
	?>

<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo BASE."css/style.css"; ?>" media="all" rel="stylesheet">
</head>

<body>
	<?php
		$file = "$page.php";

		if(file_exists($file)){
			include_once($file);
		}
		else{
			echo "halaman yang anda tuju, sedang dalam perbaikan";
		}
	?>
</body>

</html>