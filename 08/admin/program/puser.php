<?php
	include"koneksi.php";
	if(isset($_POST['simpan'])){
		$simpan=mysqli_query($koneksi,"insert into tb_user values(null,'$_POST[namalengkap]','$_POST[username]','$_POST[password]','$_POST[level]','$_POST[status]')");
?>
	<script type="text/javascript">
		alert("Data berhasil disimpan!");
		document.location.href="?isi=user";
	</script>
<?php
}
?>