<?php
include 'header.php';
include 'config/koneksi.php';
$id_berita = $_GET['id_berita'];
$sql = mysqli_query($koneksi,"SELECT * FROM berita WHERE id_berita='$id_berita'");
$data = mysqli_fetch_array($sql);
?>
<section>
	<div align="center">
			<a href="images/<?php echo $data['foto_berita']?>"><img src="images/<?php echo $data['foto_berita']?>" height="256"></a>
			<p class="text-center"><small><?php echo $data['tanggal_berita']?></small></p>
			<h1 class="text-title"><?php echo $data['judul_berita']?></h1>
	</div>
	<div class="wrapper">
		<p class="text-justify"><?php echo $data['context_berita']?></p>
	</div>
</section>
<?php 
include 'footer.php';
?>