<!DOCTYPE html>
<html>
<head>
	<title>tabel data partai</title>
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
<table style="width: 80%; border-color: black;">
	<tr>
	<th>id pemilih</th>
		<th>nama pemilih</th>
		<th>alamat pemilih</th>
		<th>no telepon</th>
		<th>id partai</th>
		<th>id_tps</th>
		<th>status suara</th>
	</tr>
		<?php
		require_once 'dbconfig.php';
		$stmt = $dbconfig->prepare("SELECT * FROM pemilih WHERE flag=1");
		$stmt->execute();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			echo"<tr>";
			echo "<td>".$row['id_pemilih']."</td>";
			echo "<td>".$row['nama_pemilih']."</td>";
			echo "<td>".$row['alamat_pemilih']."</td>";
			echo "<td>".$row['no_telepon']."</td>";
			echo "<td>".$row['id_partai']."</td>";
			echo "<td>".$row['id_pelaksanaan']."</td>";
			echo "<td>".$row['status_suara']."</td>";
			echo "<td><a href=updatepemilih.php?id_pemilih=".$row['id_pemilih']."></a></td>";
			echo "<td><a href=delete.pemilih.php?id_pemilih=".$row['id_pemilih']."</a></td>";
			echo "</tr>";
		}
		?>
</table>
</body>
</html>
