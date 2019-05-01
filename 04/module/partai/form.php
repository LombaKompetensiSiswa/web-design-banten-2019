<?php
	$partai_id = isset($_GET['partai_id']) ? $_GET['partai_id'] : false;

	$partai = "";
	$status = "";
	$saksi1 = "";
	$saksi2 = "";
	$saksi3 = "";
	$gambar = "";
	$button = "Add";

	if($partai_id){
		$query = mysqli_query($koneksi, "SELECT * FROM partai WHERE partai_id='$partai_id'");
		$row = mysqli_fetch_assoc($query);

		$partai = $row['partai'];
		$status = $row['status'];
		$saksi1 = $row['saksi1'];
		$saksi2 = $row['saksi2'];
		$saksi3 = $row['saksi3'];
		$gambar = $row['gambar'];
		$gambar = "<img src='".BASE."images/$row[gambar]'>";
		$button = "Update";

	}
	?>

		<form action="<?php echo BASE."function/proses.php?action=partai&partai_id=$partai_id"; ?>" method="POST" enctype="multipart/form-data">
			<div class="element-form">
				<label>Partai</label>
				<input type="text" placeholder="GOLKAR" name="partai" autocomplete="off" required="" value="<?php echo $partai; ?>">
			</div>
			<div class="element-form">
				<label>Gambar Partai</label>
				<input type="file" name="gambar"><?php echo $gambar; ?>
			</div>
			<div class="element-form">
				<label>Saksi Pertama</label>
				<input type="text" placeholder="Iman" name="saksi1" autocomplete="off" required="" value="<?php echo $saksi1; ?>">
			</div>
			<div class="element-form">
				<label>Saksi Kedua</label>
				<input type="text" placeholder="Aman" name="saksi2" autocomplete="off" required="" value="<?php echo $saksi2; ?>">
			</div>
			<div class="element-form">
				<label>Saksi Ketiga</label>
				<input type="text" placeholder="Amin" name="saksi3" autocomplete="off" required="" value="<?php echo $saksi3; ?>">
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