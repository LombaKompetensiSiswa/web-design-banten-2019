<?php
require_once 'dbconfig.php';
if(isset($_POST['btn-save'])){
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$isi = $_POST['isi'];
$flag = '1';
$id_artikel = $_GET['id_artikel'];
	if($artikel->update($judul,$deskripsi,$isi,$flag,$id_artikel)){
	header("Location: artikel.php?updated");
}else{
	header("Location: update.partai.php?gagal");
}

}

?>
<?php
$id_partai = $_GET['id_artikel'];
$sql = "SELECT * FROM artikel WHERE id_artikel=:id_artikel";
$query = $dbconfig->prepare($sql);
$query->execute(array(':id_artikel' => $id_artikel));

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	$judul = $row['judul'];
	$deskripsi = $row['deskripsi'];
    $isi = $row['isi'];
    $publish_status = $row['publish_status'];
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
	<input type="text" name="judul" value="<?php echo $judul; ?>">
	<textarea name="deskripsi"><?php echo $deskripsi; ?></textarea>
	<textarea name="isi"><?php echo $isi; ?></textarea>
	<select name="publish_status" value="<?php echo $publish_status; ?>">
		<option value="1">sudah publish</option>
		<option value="0">tunda publish</option>
	</select>
	<input type="submit" name="btn-save">
</form>
</body>
</html>