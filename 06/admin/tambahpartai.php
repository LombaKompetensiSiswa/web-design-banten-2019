<!DOCTYPE html>
<html>
<head>
	<?php 
	include '../config/koneksi.php';
	?>
	<title></title>
</head>
<body>

	<section id="tambahpartai">
		<h1>Tambah Partai</h1>
		<form action="proses.php?i=tambahpartai" method="POST" enctype="multipart/form-data">
		<label>Nama Partai</label>
		<input type="text" name="nama" required>
		<label>Tambah Logo Partai</label>
		<input type="file" name="logo" required>
		<input type="submit" name="submit">
	</form>
	</section>

	<section id="daftarpartai">
		<h1>Daftar Partai</h1>
		<table>
			<tr>
				<th>No</th>
				<th>Nama Partai</th>
				<th>Logo Partai</th>
				<th>Action</th>
			</tr>
			<?php
			$no = 1;
			$sql = mysqli_query($koneksi,"SELECT * FROM partai");
			while ($r = mysqli_fetch_array($sql)) {
				
			?>
			<tr>
				<td><?php echo $no++?></td>
				<td><?php echo $r['nama_partai']?></td>
				<td><img src="../images/<?php echo $r['foto_partai']?>" height="32"></td>
				<td>
					<a href="editpartai.php?id_partai=<?php echo $r['id_partai']?>" class="edit-btn">Edit
						<a href="proses.php?i=deletepartai&id_partai=<?php echo $r['id_partai']?>" class="delete-btn" onclick="return confirm('Apakah anda yakin?');">Delete</a>
				</td>
			</tr>
			<?php
		}
		?>
		</table>
	</section>
	
</body>
</html>