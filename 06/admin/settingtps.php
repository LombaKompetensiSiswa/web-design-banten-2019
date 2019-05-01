<?php
include 'header.php';
if ($_SESSION['status_user'] == '0' ) {
		echo "<script>alert ('Admin Only ! !');window.location='index.php'</script>";
}
include '../config/koneksi.php';
?>
<div class="content-index">
	<h1 class="text-title">Tambah TPS</h1>
		<form action="proses.php?i=tambahtps" method="POST">
		<label>Nama</label>
		<input type="text" name="nama" required> <br>
		<label>
			Lokasi TPS
		</label>
		<input type="text" name="lokasi" required> <br>
		<label>
			Jadwal TPS (Tanggal)
		</label>
		<input type="date" name="jadwaltps" required> <br>
		<label>Jadwal TPS (waktu)</label>
		<input type="time" name="waktutps" required> <br>
		<button type="submit" class="login-btn">Submit</button>
	</form>

	<h1 class="text-title">Setting's TPS</h1>
	<table style="width:100%;">
		<tr align="center">
			<?php
		$tps = mysqli_query($koneksi,"SELECT * FROM tps");
		while ($row = mysqli_fetch_array($tps)) {
			# code...
		?>
			<td align="center">
				<div class="card">
					
					<img src="../images/kotaksuara.png" height="64">
					<h4><?php echo $row['nama_tps']?></h4>
					<a href="viewtps.php?id_tps=<?php echo $row['id_tps']?>">Detail</a>
				</div>
			</td>
				<?php
	}
	?>
		</tr>
	</table>
	</div>
	

	
</body>
</html>