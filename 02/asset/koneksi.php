<?php
		$server = "localhost";
		$akun = "root";
		$pswd = "";
		$db = "komar";

		$koneksi = mysqli_connect("$server","$akun","$pswd");
		mysqli_select_db('$db','$koneksi');
?>