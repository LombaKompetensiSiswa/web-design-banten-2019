<?php
require_once 'dbconfig.php';
if(isset($_POST['btn-save'])){
$nama_pemilih = $_POST['nama_pemilih'];
$alamat_pemilih = $_POST['alamat_pemilih'];
$no_telepon = $_POST['no_telepon'];
$id_partai = $_POST['id_partai'];
$id_pelaksanaan = $_POST['id_pelaksanaan'];
$status_suara = $_POST['status_suara'];
$flag = '1';
if($pemilih->create($nama_pemilih,$alamat_pemilih,$no_telepon,$id_partai,$id_tps,$status_suara,$flag)){
	header("Location: pemilih.php?inserted");
}else{
	header("Location: create.pemilih.php?gagal");
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
<form action="" method="POST"  enctype="multipart/form-data">
	<input type="text" name="nama_pemilih">
	<textarea name="alamat_pemilih"></textarea>
	<input type="text" name="no_telepon">
	<select name="status_suara">
		<option value="1">suara sah</option>
		<option value="0">suara tidak sah</option>
	</select>
		<select name="id_partai">
		<?php
		include 'dbconfig.php';
		$query = $dbconfig->prepare("SELECT * FROM partai WHERE flag=1");
		$query->execute();
		while($row = $query->fetch()){
			echo "<option value=".$row['id_partai'].">".$row['nama_partai']."</td>";
		}
		?>
	</select>
			<select name="id_pelaksanaan">
		<?php
		include 'dbconfig.php';
		$query = $dbconfig->prepare("SELECT pelaksanaan.id_pelaksanaan,pelaksanaan.tgl_pelaksanaan,tps.nama_tps FROM pelaksanaan INNER JOIN tps ON pelaksanaan.id_tps = tps.id_tps WHERE pelaksanaan.flag=1");
		$query->execute();
		while($row = $query->fetch()){
			echo "<option value=".$row['id_pelaksanaan']."><p>".$row['tgl_pelaksanaan']."</p><br/><p>".$row['nama_tps']."</p></td>";
		}
		?>
	</select>
	<input type="submit" name="btn-save">
</form>
</body>
</html>