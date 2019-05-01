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
		<td>id partai</td>
		<td>nama partai</td>
		<td>alamat partai</td>
		<td>status</td>
		<td>action</td>
	</tr>
		<?php
		include 'dbconfig.php';
		$query = $dbconfig->prepare("SELECT * FROM tps WHERE flag=1");
		$query->execute();
		while($row = $query->fetch()){
			echo"<tr style='height:20px;'>";
			echo "<td>".$row['id_tps']."</td>";
			echo "<td>".$row['nama_tps']."</td>";
			echo "<td>".$row['alamat_tps']."</td>";
			if($row['status'] == 1){
				echo "<td>aktif</td>";
			}elseif($row['status'] == 0){
				echo "<td>tidak aktif</td>";
			}
			echo "<td class='cecep'><a href=updatetps.php?id_tps=".$row['id_tps'].">update</a>";
			echo "<a href=delete.tps.php?id_tps=".$row['id_tps'].">delete</a></td>";
			echo "</tr>";
		}
		?>
</table>
</body>
</html>