<?php
require_once 'dbconfig.php';
if(isset($_POST['btn-save'])){
$nama_tps = $_POST['nama_tps'];
$alamat_tps = $_POST['alamat_tps'];
$status = $_POST['status'];
$flag = '1';
$id_tps = $_GET['id_tps'];
if($tps->update($nama_tps,$alamat_tps,$status,$flag,$id_tps)){
	header("Location: tps.php?inserted");
}else{
	header("Location: update.tps.php?gagal");
}
}

?>
<?php
$id_tps = $_GET['id_tps'];
$sql = "SELECT * FROM tps WHERE id_tps=:id_tps";
$stmt = $dbconfig->prepare($sql);
$stmt->execute(array(':id_tps' => $id_tps));

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	$nama_tps = $row['nama_tps'];
	$alamat_tps = $row['alamat_tps'];
	$status = $row['status'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>update data artikel</title>
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
	<input type="text" name="nama_tps" value="<?php echo $nama_tps;?>">
	<textarea name="alamat_tps"><?php echo $alamat_tps;?></textarea>
	<select name="status" value="<?php echo $status;?>">
		<option value="1">aktif</option>
		<option value="0">tidak aktif</option>
	</select>
	<input type="submit" name="btn-save">
</form>
</body>
</html>