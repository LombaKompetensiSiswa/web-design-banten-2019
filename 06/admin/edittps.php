<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<section>
		<?php
		include '../config/koneksi.php';
		$id_tps = $_GET['id_tps'];
		$sql = mysqli_query($koneksi,"SELECT * FROM tps WHERE id_tps='$id_tps'");
		$data = mysqli_fetch_array($sql);
		?>
		<form action="proses.php?i=edittps&id_tps=<?php echo $_GET['id_tps']?>" method="POST">
			<label>Nama</label>
		<input type="text" value="<?php echo $data['nama_tps']?>" name="nama" required>
		<label>Lokasi TPS</label>
		<input type="text" value="<?php echo $data['lokasi_tps']?>" name="lokasi" required>
		<label>Jadwal TPS </label>
		<input type="date" value="<?php echo $data['jadwalhari_tps']?>" name="tanggal" required>
		<input type="time" name="waktu" value="<?php echo $data['jadwalwaktu_tps']?>" required>
		<button type="submit" class="btn-submit">Submit !</button>
		</form>
		
	</section>
</body>
</html>