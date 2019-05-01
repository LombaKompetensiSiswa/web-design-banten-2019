<?php
	$blog_id = isset($_GET['blog_id']) ? $_GET['blog_id'] : false;

	$judul = "";
	$materi = "";
	$status = "";
	$button = "Add";
	$gambar = "";

	if($blog_id){
		$query = mysqli_query($koneksi, "SELECT * FROM blog WHERE blog_id='$blog_id'");
		$row = mysqli_fetch_assoc($query);

		$judul = $row['judul'];
		$materi = $row['materi'];
		$status = $row['status'];
		$button = "Update";
		$gambar = $row['gambar'];
		$gambar = "<img src='".BASE."images/$row[gambar]'>";

	}
	?>

		<form action="<?php echo BASE."function/proses.php?action=blog&blog_id=$blog_id"; ?>" method="POST" enctype="multipart/form-data">
			<div class="element-form">
				<label>Judul</label>
				<input type="text" placeholder="Jadwal pelaksanaan pemilu Di kab serang" name="judul" autocomplete="off" required value="<?php echo $judul; ?>">
			</div>
			<div class="element-form">
				<label>Banner judul</label>
				<input type="file" name="gambar" autocomplete="off" required><?php echo $gambar; ?>
			</div>
			<div class="element-form">
				<label>materi</label>
				<textarea name="materi" placeholder="Jadwal pelaksanaan tps 01 akan dilaksanakan pada tanggan 17 april 2019"></textarea>
			</div>
			<div class="element-form">
				<label>Status</label>
				<span>
					<input type="radio" name="status" value="on" <?php if($status == "on"){echo "checked='true'";} ?> >On
					<input type="radio" name="status" value="off" <?php if($status == "off"){echo "checked='true'";} ?> >Off
				</span>
			</div>

			<div class="element-form">
				<input type="submit" value="<?php echo $button; ?>" name="button" class="btn-act">
			</div>
		</form>