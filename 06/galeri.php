<?php
include 'header.php';
include 'config/koneksi.php';
?>


	<table style="width: 100%">
		<?php
$sql = mysqli_query($koneksi,"SELECT * FROM galeri");
while ($r = mysqli_fetch_array($sql)) {
	# code...
	?>
		<tr align="center">
			<td><img src="images/<?php echo $r['foto_galeri']?>" height="200"></td>
		</tr>
		<?php
	}
	?>
	</table>
<?php
include 'footer.php';
?>