<?php
require_once 'dbconfig.php';
if(isset($_POST['btn-save'])){
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$isi = $_POST['isi'];
$publish_status = $_POST['publish_status'];
$flag = '1';
if($artikel->create($judul,$deskripsi,$isi,$publish_status,$flag)){
	header("Location: artikel.php?inserted");
}else{
	header("Location: create.artikel.php?gagal");
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
<form action="" method="post">
	<input type="text" name="judul">
	<textarea name="deskripsi"></textarea>
	<textarea name="isi"></textarea>	
	<select name="publish_status">
		<option value="1">sudah publish</option>
		<option value="0">tunda publish</option>
	</select>
	<input type="submit" name="btn-save">
</form>
</body>
</html>