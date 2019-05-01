<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<section>
		<h1>Settings About</h1>
		<?php
		include '../config/koneksi.php';
		$sql = mysqli_query($koneksi,"SELECT * FROM about");
		$data = mysqli_fetch_array($sql);
		?>
		<form action="proses.php?i=editabout" method="POST">
				<textarea name="about">
					<?php echo $data['content_about']?>
				</textarea>
				<input type="submit" name="submit">
		</form>
	</section>
</body>
</html>