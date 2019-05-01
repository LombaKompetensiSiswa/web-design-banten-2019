<?php
	include"koneksi.php";
	if(isset($_POST['simpan'])){
		$simpan=mysqli_query($koneksi,"insert into tb_partai values(null,'$_POST[namapartai]')");
?>
	<script type="text/javascript">
		alert("Data berhasil disimpan!");
		document.location.href="?isi=partai";
	</script>
<?php
}
?>