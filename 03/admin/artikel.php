<!DOCTYPE html>
<html>
<head>
	<title>tabel data artikel</title>
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
</ul>
</div>
<table style="width: 80%; border-color: black;">
	<tr>
		<th>id artikel</th>
		<th>judul</th>
		<th>deskripsi</th>
		<th>isi</th>
		<th>tgl tambah</th>
		<th>status publish</th>
		<th>action</th>
	</tr>
		<?php
		require_once 'dbconfig.php';
		$stmt = $dbconfig->prepare("SELECT * FROM artikel WHERE flag=1");
		$stmt->execute();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			echo"<tr>";
			echo "<td>".$row['id_artikel']."</td>";
			echo "<td>".$row['judul']."</td>";
			echo "<td>".$row['deskripsi']."</td>";
			echo "<td>".$row['isi']."</td>";
			echo "<td>".$row['tgl_tambah']."</td>";
			if($row['publish_status'] == 1){
				echo "<td>sudah publish</td>";
			}elseif($row['publish_status'] == 0){
				echo "<td>tunda publish</td>";
			}
			echo "<td><a href=updateartikel.php?id_artikel=".$row['id_artikel'].">update</a>";
			echo "<a href=deleteartikel.php?id_artikel=".$row['id_artikel'].">delete</a></td>";
			echo "</tr>";
		}
		?>
</table>
</body>
</html>
