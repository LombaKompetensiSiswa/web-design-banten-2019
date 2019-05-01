<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save'])){
$nama_partai = $_POST['nama_partai'];
$alamat_partai = $_POST['alamat_partai'];
$no_telepon = $_POST['no_telepon'];
$flag = '1';
if($partai->create($nama_partai,$alamat_partai,$no_telepon,$flag)){
	header("Location: partai.php?inserted");
}else{
	header("Location: create.partai.php?gagal");
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>tambah data saksi</title>
</head>
<style type="text/css">
	tr{
		width: 80%;
		height: 100px;
	}
	.cecep{
		margin-right: 30px;
	}
</style>
<body>
<div class="header-menu" style="width:100%;height:150px;background:red;">
<img src="../images/bantenlogo.png" style="width:100px;height:100px;margin-left:100px;margin-top:40px;"/>
<ul style="list-style-position:vertical;list-style-type:none;float:right; margin-right:80px;">
<li><a href="partai.php">partai</a></li>
<li><a href="pemilihan.php">pemilihan</a></li>
<li><a href="tps.php">Tps</a></li>
<li><a href="saksi.php">saksi</a></li>
<li><a href="artikel.php">artikel</a></li>
</ul>
</div>
<form action="" method="POST" enctype="multipart/form-data">
	<input type="text" name="nama_partai">
	<textarea name="alamat_partai"></textarea>
	<input type="text" name="no_telepon">
	<input type="submit" name="btn-save">
</form>
</body>
</html>