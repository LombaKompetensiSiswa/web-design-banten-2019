<!DOCTYPE html>
<html>
<head>
	<?php 
	include '../config/koneksi.php';
	?>
	<title></title>
</head>
<body>
	<?php
	$id_partai = $_GET['id_partai'];
	$sql = mysqli_query($koneksi,"SELECT * FROM partai WHERE id_partai='$id_partai'");
	$data = mysqli_fetch_array($sql);
	?>	
	<section id="tambahpartai">
		<h1>Tambah Partai</h1>
		<form action="proses.php?i=editpartai&id_partai=<?php echo $id_partai?>" method="POST" enctype="multipart/form-data">
		<label>Nama Partai</label>
		<input type="text" value="<?php echo $data['nama_partai']?>" name="nama" required>
		<label>Tambah Logo Partai</label>
		<input type="file" value="<?php echo $data['foto_partai']?>" name="logo">
		<input type="submit" name="submit">
	</form>
	</section>
	
</body>
</html>