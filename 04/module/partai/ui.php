

<div class="add-form">
		<a class="btn-act right" href="<?php echo BASE."dashboard.php?module=partai&action=form"; ?>">+ Tambah Kandidat</a>
</div>
<div class="card">
<?php
	$query = mysqli_query($koneksi, "SELECT * FROM partai");

	while($row = mysqli_fetch_assoc($query)){
		if($level == "admin"){
			echo "

			<div class='card-partai'>
				<img src='".BASE."images/$row[gambar]'>
				<span>$row[partai]</span>

				<div class='action'>
					<a class='btn-act' href='".BASE."function/proses.php?action=pilih&user_id=$user_id&partai_id=$row[partai_id]'>Pilih</a>
					<a href='".BASE."delete.php?action=partai&partai_id=$row[partai_id]' class='btn-act'>Delete</a>

			 		  	<a href='".BASE."dashboard.php?module=partai&action=form&partai_id=$row[partai_id]' class='btn-act'>Update</a>
				</div>
			</div>";
		}
		else if($level == "petugas"){
			echo "

			<div class='card-partai'>
				<img src='".BASE."images/$row[gambar]'>
				<span>$row[partai]</span>

				<div class='action'>
				<a class='btn-act' href='".BASE."function/proses.php?action=pilih&user_id=$user_id&partai_id=$row[partai_id]'>Pilih</a>
				</div>";
		}
		
	}
?>
</div>