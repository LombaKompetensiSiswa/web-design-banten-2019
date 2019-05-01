<?php
	ob_start();
	session_start();
	include"koneksi.php";

	$tampil=mysqli_query($koneksi,"select * from tb_user where username='$_POST[username]' and password='$_POST[password]' and status='Y'");
	
	$row=mysqli_fetch_array($tampil);
	$jumlah=mysqli_num_rows($tampil);

	if($jumlah>0 and $row['level']=='admin'){
		$_SESSION['iduseradmin']=$row['iduser'];
?>
	<script type="text/javascript">
		alert("Anda berhasil login sebagai admin!");
		document.location.href="../halamanadmin.php";
	</script>
<?php
}
	else if($jumlah>0 and $row['level']=='petugas'){
		$_SESSION['iduserpetugas']=$row['idpetugas'];
?>
	<script type="text/javascript">
		alert("Anda berhasil login sebagai Petugas!");
		document.location.href="../halamanpetugas.php";
	</script>
<?php
}
	else{

	?>
		<script type="text/javascript">
			alert("Username dan Password salah!");
			document.location.href="../index.php";
		</script>
<?php
}
?>