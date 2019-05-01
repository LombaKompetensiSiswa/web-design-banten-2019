<?php
include 'header.php';
if ($_SESSION['status_user'] == '1' ) {
		echo "<script>alert ('Petugas Only ! !');window.location='index.php'</script>";
}
?>
<div class="content-index" style="padding-top: 5px;">
<h1 class="text-title">Input Pemilih Berdasarkan TPS </h1>

	<section id="tps">
		<h1 class="text-title">Pilih Tps</h1>
		<table style="width: 100%;">
			<tr>
				<?php
				$tps = mysqli_query($koneksi,"SELECT * FROM tps");
				while ($r = mysqli_fetch_array($tps)) {
					# code...
				
			?>
				<td align="center">
					<div class="card">
							<img src="../images/kotaksuara.png" class="img-responsive">
							<p><?php echo $r['nama_tps']?></p>
							<a href="inputpemilih.php?id_tps=<?php echo $r['id_tps']?>">Pilih</a>
					</div>
				</td>
				
			<?php
		}
		?>
			</tr>
		</table>
		</table>
	
	</section>
</div>
</body>
</html>