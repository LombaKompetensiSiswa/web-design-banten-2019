<?php
	include"koneksi.php";
	if(isset($_POST['simpan'])){
		$simpan=mysqli_query($koneksi,"insert into tb_tps values(null,'$_POST[namatps]','$_POST[kecamatan]','$_POST[namasaksi]')");
?>
	<script type="text/javascript">
		alert("Data berhasil disimpan!");
		document.location.href="?isi=tps";
	</script>
<?php
}
?>