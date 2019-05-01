<style type="text/css">
	table {
		padding-left: 50%;
		padding-top: 10%;
	}
</style>
<div class="login">
	<form action="" method="post">
	<table>
		<tr>
			<td colspan="2">Silahkan Login</td>
		</tr>
		<tr>
			<td>Username</td>
			<td>: <input type="text" name="username"></td>
		</tr>
	<tr>
		<td>Password</td>
		<td>: <input type="text" name="password"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="login" value="Login"> <input type="reset" name="batal" value="Batal">
	</tr>
	<tr>
		<td><a href="admin.php">Next</a></td>
	</tr>
</table>
	<?php
		if (isset ($_POST['login'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			$login = $_POST['login'];

			$server = "localhost";
			$akun = "root";
			$pswd = "";
			$db = "komar";

			$koneksi = mysqli_connect("$server","$akun","$pswd");
			mysqli_select_db("$db");
			$insert = ("insert into akun values('','$username','$password')");
			mysqli_query('$koneksi','$insert');
		}
	?>

</div>