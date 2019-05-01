<?php
include 'header.php';
if ($_SESSION['status_user'] == '1' ) {
		echo "<script>alert ('Petugas Only ! !');window.location='index.php'</script>";
}
?>
<div class="content-index" style="padding-top: 50px;">
	<h1 class="text-title">Input Suara Berdasarkan TPS </h1>

	<section id="tps">
		<table style="width: 100%" align="center">
			<tr  align="center">
				<?php
				$tps = mysqli_query($koneksi,"SELECT * FROM tps");
				while ($r = mysqli_fetch_array($tps)) {
					# code...
				
			?>
				<td>
					<div class="card">
						
							<img src="../images/kotaksuara.png" height="45">
							<p style="font-weight: bold;" class="mt-5"><?php echo $r['nama_tps']?></p>
							<a href="inputsuara.php?id_tps=<?php echo $r['id_tps']?>" class="mt-5">Setting</a>
					</div>
						
				</td>
				
			<?php
		}
		?>
			</tr>
		</table>
	
	</section>
</div>
</body>
</html>