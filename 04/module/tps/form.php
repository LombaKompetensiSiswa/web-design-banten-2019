<?php
	$tps_id = isset($_GET['tps_id']) ? $_GET['tps_id'] : false;

	$tps= "";
	$jadwal = "";
	$lokasi = "";
	$status = "";
	$button = "Add";

	if($tps_id){
		$query = mysqli_query($koneksi, "SELECT * FROM tps WHERE tps_id='$tps_id'");
		$row = mysqli_fetch_assoc($query);

		$tps = $row['tps'];
		$jadwal = $row['jadwal'];
		$lokasi = $row['lokasi'];
		$status = $row['status'];
		$button = "Update";

	}
	?>

		<form action="<?php echo BASE."function/proses.php?action=tps&tps_id=$tps_id"; ?>" method="POST">
			<div class="element-form">
				<label>TPS</label>
				<input type="text" placeholder="Tps pertama" name="tps" autocomplete="off" required value="<?php echo $tps; ?>">
			</div>
			<div class="element-form">
				<label>Jadwal</label>
				<input type="text" placeholder="17 april 2019" name="jadwal" autocomplete="off" requiredvalue="<?php echo $jadwal; ?>">
			</div>
			<div class="element-form">
				<label>Lokasi</label>
				<textarea  placeholder="JL.partai a" name="lokasi" autocomplete="off" required><?php echo $lokasi; ?></textarea>
			</div>
			<div class="element-form">
				<label>Status</label>
				<span>
					<input type="radio" name="status" value="on" <?php if($status == "on"){echo "checked='true'";} ?> autocomplete="off" required>ON
					<input type="radio" name="status" value="off" <?php if($status == "off"){echo "checked='true'";} ?> autocomplete="off" required >OFF
				</span>
			</div>
			<div class="element-form">
				<input type="submit" value="<?php echo $button; ?>" name="button" class="btn-act">
			</div>
		</form>