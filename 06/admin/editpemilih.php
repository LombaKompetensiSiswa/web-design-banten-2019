<?php
include 'header.php';
if ($_SESSION['status_user'] == '1' ) {
		echo "<script>alert ('Petugas Only ! !');window.location='index.php'</script>";
}
include '../config/koneksi.php';
	$id_tps = $_GET['id_tps'];
	$id_pemilih = $_GET['id_pemilih'];
	$select = mysqli_query($koneksi,"SELECT * FROM pemilih WHERE id_pemilih='$id_pemilih'");
	$r = mysqli_fetch_array($select);
?>
<div class="content-index">
	<h1>Input Pemilih</h1>
	<form action="proses.php?i=editpemilih&id_tps=<?php echo $id_tps?>&id_pemilih=<?php echo $id_pemilih?>" method="POST">
		<label>Nama Pemilih</label>
		<input type="text" value="<?php echo $r['nama_pemilih']?>" name="pemilih" required>
		<label>Masukan Nik Pemilih</label>
		<input type="number" value="<?php echo $r['nik_pemilih']?>" name="nik" required>

		<button type="submit" class="login-btn">Submit</button>
	</form>
	</div>
	
</body>
</html>