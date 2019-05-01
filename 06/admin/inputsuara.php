
	<?php
	include 'header.php';
if ($_SESSION['status_user'] == '1' ) {
		echo "<script>alert ('Petugas Only ! !');window.location='index.php'</script>";
}
	include '../config/koneksi.php';
	$id = $_GET['id_tps'];
	?>
	<div class="content-index">
		<form action="proses.php?i=tambahsuara&id_tps=<?php echo $id?>" method="POST">
		<label>Pilih Partai</label> 
		<select name="partai">
			<?php
			$sql = mysqli_query($koneksi,"SELECT * FROM partai");
			while ($data = mysqli_fetch_array($sql)) {
				# code...
			
			?>
			<option value="<?php echo $data['id_partai']?>"><?php echo $data['nama_partai']?></option>
			<?php
		}
		?>
		</select><br>
		<label>Total Suara</label>
		<input type="number" name="total" max="25" required><br>
		<label>Masukan Jumlah Suara Sah</label>
		<input type="number" name="sah" required=""><br>
		<label>Masukan Jumlah Suara Tidak Sah</label>
		<input type="number" name="tidaksah" required="">
		<br>

		<button type="submit" class="login-btn">Tambah</button>
	</form>
	</div>
	<h1>Input Suara</h1>
	
</body>
</html>