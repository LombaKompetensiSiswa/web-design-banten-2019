<?php
require_once 'dbconfig.php';
if(isset($_POST['btn-save'])){
$nama_tps = $_POST['nama_tps'];
$alamat_tps = $_POST['alamat_tps'];
$status = $_POST['status'];
$flag = '1';

if($tps->create($nama_tps,$alamat_tps,$status,$flag)){
	header("Location: tps.php?inserted");
}else{
	header("Location: create.tps.php?gagal");
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

<form action="" method="POST">
	<input type="text" name="nama_tps">
	<textarea name="alamat_tps"></textarea>
	<select name="status">
		<option value="1">aktif</option>
		<option value="0">tidak aktif</option>
	</select>
	<input type="submit" name="btn-save">
</form>
</body>
</html>