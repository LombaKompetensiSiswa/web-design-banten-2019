<!DOCTYPE html>
<html>
<head>
	<?php
	include '../config/koneksi.php';
	?>
	<title></title>
</head>
<body>

	<section id="tambahgaleri">
		<h1>Tambah Galeri</h1>
		<form action="proses.php?i=tambahgaleri" method="POST" enctype="multipart/form-data">
			<label>Upload Galeri</label>
			<input type="file" name="galeri" accept="image/jpg, image/png, image/jpeg">
			<input type="submit" name="submit">
		</form>
	</section>

	<section id="daftargaleri">
		<h1>Daftar Galeri</h1>
		<table>
		</table>
		<?php
		$sql = mysqli_query($koneksi,"SELECT * FROM galeri");
		while ($r = mysqli_fetch_array($sql)) {
			# code...
		
		?>
			<tr>
				<td>
					<a href="../images/<?php echo $r['foto_galeri']?>">
					<img src="../images/<?php echo $r['foto_galeri'] ?>" height="64">
					<a href="proses.php?i=deletegaleri&id_galeri=<?php echo $r['id_galeri']?>" onclick="return confirm('Apakah anda yakin')">Hapus</a>
					</a>
				</td>
			</tr>
			<?php
		}
		?>
		</section>
		</table>
	</section>
	
</body>
</html>