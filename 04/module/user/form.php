<?php
	$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : false;

	$status = "";
	$level = "";
	$user = "";
	$email = "";
	$phone = "";
	$password = "";
	$button = "Add";

	if($user_id){
		$query = mysqli_query($koneksi, "SELECT * FROM user WHERE user_id='$user_id'");
		$row = mysqli_fetch_assoc($query);

		$level = $row['level'];
		$status = $row['status'];
		$user = $row['user'];
		$email = $row['email'];
		$phone = $row['phone'];
		$password = $row['password'];
		$button = "Update";

	}
	?>

		<form action="<?php echo BASE."function/proses.php?action=register&user_id=$user_id"; ?>" method="POST">
			<div class="element-form">
				<label>Username</label>
				<input type="text" placeholder="Hikman nurohman" name="user" autocomplete="off" required value="<?php echo $user; ?>">
			</div>
			<div class="element-form">
				<label>Phone</label>
				<input type="text" placeholder="085714621510" name="phone" autocomplete="off" requiredvalue="<?php echo $phone; ?>">
			</div>
			<div class="element-form">
				<label>Email</label>
				<input type="text" placeholder="Email@gmail.com" name="email" autocomplete="off" required value="<?php echo $email; ?>">
			</div>
			<div class="element-form">
				<label>Password</label>
				<input type="password" placeholder="*******" name="password" autocomplete="off" required value="<?php echo $password; ?>">
			</div>
			<div class="element-form">
				<label>Level</label>
				<span>
					<input type="radio" name="level" value="admin" <?php if($level == "admin"){echo "checked='true'";} ?> autocomplete="off" required >Admin
					<input type="radio" name="level" value="petugas" <?php if($level == "petugas"){echo "checked='true'";} ?>  autocomplete="off" required>Petugas
				</span>
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