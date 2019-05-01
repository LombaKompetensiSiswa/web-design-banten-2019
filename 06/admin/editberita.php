<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<section id="">
		<h1>Edit Berita</h1>
		<?php
		include '../config/koneksi.php';
		$id_berita = $_GET['id_berita'];
		$sql = mysqli_query($koneksi,"SELECT * FROM berita WHERE id_berita='$id_berita'");
		$r = mysqli_fetch_array($sql);
		?>
		<form action="proses.php?i=editberita&id_berita=<?php echo $r['id_berita']?>" method="POST" enctype="multipart/form-data">
			<label>Judul Berita</label>
			<input type="text" name="judul" value="<?php echo $r['judul_berita']?>" required>
			<label>Konteks Berita</label>
			<textarea name="konteks" rows="10">
				<?php echo $r['context_berita']?>
			</textarea>
			<label>Tanggal Berita</label>
			<input type="date" value="<?php echo $r['tanggal_berita']?>" name="tanggal" required>
			<label>Foto Berita</label>
			<input type="file" name="foto" value="<?php echo $r['foto_berita']?>">
			<input type="submit" name=" submit">
		</form>
	</section>
</body>
</html>