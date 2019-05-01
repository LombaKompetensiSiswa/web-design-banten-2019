<!DOCTYPE html>
<html>
<head>
</head>
<?php
include '../config/koneksi.php'
?>
	<title></title>
</head>
<body>

	<section id="tambahberita">
		<h1>Tambah Berita</h1>
		<form action="proses.php?i=tambahberita" method="POST" enctype="multipart/form-data">
			<label>Judul Berita</label>
			<input type="text" name="judul" required>
			<label>Konteks Berita</label>
			<textarea rows="5"  cols="20"  name="konteks" required>
			</textarea>
			<label>Foto Berita</label>
			<input type="file" name="foto" required>
			<label>Tanggal Berita</label>
			<input type="date" name="tanggal" required>
			<input type="submit" name="submit">
		</form>
	</section>

	<section id="daftarberita">
		<table>
			<tr>
				<th>No</th>
				<th>Foto</th>
				<th>Judul</th>
				<th>Tanggal</th>
				<th>Action</th>
			</tr>
			<?php
			$no =1;
			$sql = mysqli_query($koneksi,"SELECT * FROM berita ORDER BY tanggal_berita DESC");
			while ($r = mysqli_fetch_array($sql)) {
				# code...
			
			?>
			<tr>
				<td><?php echo $no++?></td>
				<td><a href="../images/<?php echo $r['foto_berita']?>"><img src="../images/<?php echo $r['foto_berita']?>" height="128"></a></td>
				<td><?php echo $r['judul_berita']?></td>
				<td><?php echo date("d M Y",strtotime($r['tanggal_berita']))?></td>
				<td>
					<a href="editberita.php?id_berita=<?php echo $r['id_berita']?>">Edit</a>
					<a href="proses.php?i=deleteberita&id_berita=<?php echo $r['id_berita']?>" onclick="return confirm('Apakah Anda Yakin ?')">Delete</a>
				</td>

			</tr>
			<?php
		}
		?>
		</table>
	</section>
</body>
</html>