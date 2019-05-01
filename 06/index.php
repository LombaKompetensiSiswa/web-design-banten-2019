<?php
include 'header.php'
?>
	<section>
		<div class="hero-image">
			<div class="hero-caption">
				<h1>Selamat Datang Di Sistem Informasi TPS</h1>
				<a href="#about" class="btn-white">Lebih Lanjut</a>
			</div>
		</div>
	</section>

		<section id="about" class="mt-5">
			<?php

			$sql = mysqli_query($koneksi,"SELECT * FROM about");
			$about = mysqli_fetch_array($sql);
			?>
			<div class="about">
				<h1 class="text-title">About</h1>
				<p class="text-center"><?php echo $about['content_about']?></p>
			</div>
		</section>
		<section id="hasil" class="mt-5">
			<h1 class="text-title">Hasil Perhitungan Sementara</h1>
			<div style="overflow-x: auto;">
			<table align="center">
				<tr>
					<?php
					$partai = mysqli_query($koneksi,"SELECT * FROM partai LIMIT 5");
					$totalsuara = mysqli_query($koneksi,"SELECT SUM(total_suara) as total FROM suara");
					$totalsum = mysqli_fetch_assoc($totalsuara);
					while ($dp = mysqli_fetch_array($partai)) {
						$id = $dp['id_partai'];
						$suara = mysqli_query($koneksi,"SELECT sum(jmlh_suarasah) as totalspartai FROM suara WHERE id_partai='$id'");
						$datasuara = mysqli_fetch_assoc($suara);
					
					?>
					<td>
						<div class="card" align="center">
							<img src="images/<?php echo $dp['foto_partai']?>" class="img-responsive">
							<p class="text-bold" style="text-transform: uppercase;letter-spacing: 5px;"><?php echo $dp['nama_partai']?></p>
							<p style="font-size:20px">
								<b>Total Suara (sah) :</b>
								<?php
								echo $datasuara['totalspartai'];
								?>
							</p>
							<a href="viewpartai.php?id_partai=<?php echo $dp['id_partai']?>" class="btn-view">Lihat Partai</a>

						</div>
					</td>
					<?php
				}
				?>
				</tr>
			</table>
			</div>
		</section>


	<section id="tps" class="mt-5">
		<h1 class="text-title">Daftar TPS </h1>
		<table align="center">
		
			<tr>
					<?php
			$tps = mysqli_query($koneksi,"SELECT * FROM tps ORDER BY id_tps ASC");
			while ($datatps = mysqli_fetch_array($tps)) {
				# code...
			
			?>
				<td>
					<div class="card" align="center">
						<img src="images/kotaksuara.png" class="img-responsive">
						<p class="text-bold"><?php echo $datatps['nama_tps']?></p>
						<br>
						<a href="viewtps.php?id_tps=<?php echo $datatps['id_tps']?>" class="btn-view">Lihat TPS</a>
					</div>
				</td>
					<?php
		}
		?>
			</tr>
		
		</table>
		
	</section>
	<section id="news">
		<h1 class="text-title mt-5">Berita</h1>
		<table style="width: 100%;">
			<tr>
				<?php
				$berita = mysqli_query($koneksi,"SELECT * FROM berita");
				while ($databerita = mysqli_fetch_array($berita)) {
					# code...
				
				?>
				<td align="center">
					<div class="card-news">
						<img src="images/<?php echo $databerita['foto_berita']?>" height="32" class="img-responsive">
						<p class="text-center"><small><?php echo date("d M Y",strtotime($databerita['tanggal_berita']))?></small></p>
						<a href="viewberita.php?id_berita=<?php echo $databerita['id_berita']?>" class="news-link"><p class="text-bold text-center"><?php echo $databerita['judul_berita']?></p></a>
					</div>
				</td>
				<?php
			}
			?>
			</tr>
		</table>
	</section>
	<section id="pemilih" align="center">
		<h1 class="text-title">Info Pemilih</h1>
		<table style="width:100%;text-align: center;">
			<tr>
				<td align="center" style="width: 100%;">
					<div class="card">
						<img src="images/user.png" height="32" class="img-responsive">
						<form action="" method="POST">
							<label class="mt-5">Nama Pemilih</label><br>
							<input type="text" class="mt-5" name="nama"><br>
							<label >Nik Pemilih</label> <br>
							<input type="number" class="mt-5" name="nik"><br>
							<button class="btn-submit mt-5" type="submit" name="cari">Cari</button>
						</form>
					</div>
				</td>
			</tr>
		</table>
	</section>
	<?php
	if (isset($_POST['cari'])) {
		$nama = $_POST['nama'];
		$nik = $_POST['nik'];
		$cari = mysqli_query($koneksi,"SELECT * FROM pemilih INNER JOIN tps ON pemilih.id_tps=tps.id_tps WHERE nama_pemilih LIKE '%$nama%' ");
		$jmlh = mysqli_num_rows($cari);
		if ($jmlh < 1) {
			echo '<h1 class="text-title">Tidak Ditemukan</h1>';
		} else {
		while ($r = mysqli_fetch_array($cari)) {
			# code...
		

	
	?>
	<section id="dftrpemilih">
		<div style="overflow-x: auto;" class="tabel" align="center">
				<table style="width: 80%;border-collapse: collapse;border:2px solid black">
			<tr style="border-collapse: collapse;border:2px solid black">
				<th style="border-collapse: collapse;border:2px solid black">Nama</th>
				<th  style="border-collapse: collapse;border:2px solid black">Nik</th>
				<th  style="border-collapse: collapse;border:2px solid black">TPS</th>
				<th  style="border-collapse: collapse;border:2px solid black">Lokasi TPS</th>
				<th  style="border-collapse: collapse;border:2px solid black">Waktu Pelaksanaan</th>
			</tr>
			<tr  style="border-collapse: collapse;border:2px solid black">
				<td  style="border-collapse: collapse;border:2px solid black"><?php echo $r['nama_pemilih']?></td>
				<td  style="border-collapse: collapse;border:2px solid black"><?php echo $r['nik_pemilih']?></td>
				<td  style="border-collapse: collapse;border:2px solid black"><?php echo $r['nama_tps']?></td>
				<td  style="border-collapse: collapse;border:2px solid black"><?php echo $r['lokasi_tps']?></td>
				<td  style="border-collapse: collapse;border:2px solid black">
					<b>Hari : </b> <?php echo date("d M Y",strtotime($r['jadwalhari_tps']))?> <br>
					<b>Waktu : </b> <?php echo date("H:i",strtotime($r['jadwalwaktu_tps']))?>
				</td>
			</tr>
		</table>
		</div>
	</section>
	<?php 
}
}
}
?>

<?php
include 'footer.php';
?>