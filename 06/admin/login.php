<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<?php
	include '../config/koneksi.php';
	if (isset($_POST['login'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$select = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' AND password='$password'");
		$data = mysqli_fetch_array($select);
		$jmlh = mysqli_num_rows($select);
		if ($jmlh == '0') {
			echo "<script>alert ('Akun tidak ditemukan !')</script>";
		} else {
			if ($data['password'] <> $password) {
				echo "<script>alert ('Password Salah !')</script>";
			} else {
				session_start();
				$_SESSION['status_user']=$data['status_user'];
				$_SESSION['username']=$data['username'];
				$_SESSION['password']=$data['password'];
				$_SESSION['nama_user']=$data['nama_user'];
				if ($data['status_user'] == '0') {
					$status="Petugas";
				} else {
					$status = "Admin";
				}
				echo "<script>alert ('Login Berhasil ! Logged in as ".$status."');window.location='index.php'</script>";	
			}
		}
	}

	?>
	<link rel="stylesheet" type="text/css" href="assets/admin.css">
</head>
<body>

	<section id="login">
		<table style="width: 100%;">
			<tr align="center" style="top:50%;">
				<td>
					<div class="card-login" align="center">
						<img src="../images/user.png" class="img-responsive" height="64">
							<form action="" method="POST">
								<label>Username</label><br>
								<input type="text" class="mt-5" name="username"><br>
								<label>Password</label><br>
								<input type="password" class="mt-5" name="password"><br>
								<button type="submit" name="login" class="login-btn mt-5">Login !</button>
							</form>
					</div>
				</td>
			</tr>
		</table>
	
	</section>
</body>
</html>