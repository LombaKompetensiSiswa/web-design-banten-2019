<?php
	include_once("helper.php");
	include_once("koneksi.php");

	$action = $_GET['action'];

	if($action == "register"){
		$user = $_POST['user'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$password = md5($_POST["password"]);
		$status = $_POST['status'];
		$level = $_POST['level'];
		$button = $_POST['button'];

		if($button == "Add"){
			
			mysqli_query($koneksi, "INSERT INTO user (user, phone, level, status, email, password) VALUES('$user', '$phone', '$level', '$status', '$email', '$password')");
		}
		else if($button == "Update"){
			$user_id = $_GET['user_id'];

			mysqli_query($koneksi, "UPDATE user SET user='$user', phone='$phone', email='$email', password='$password', level='$level', status='$status' WHERE user_id='$user_id'");
		}

		header("location:".BASE."dashboard.php?module=user&action=list");
	}

	else if ($action == "login") {
		$email = $_POST['email'];
		$password = md5($_POST['password']);

		$query = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email' AND password='$password' AND status='on'");

		if(mysqli_num_rows($query) == 0){
			header("location:".BASE."index.php?module=user&action=form&notif=valid");
		}
		else{
			$query = mysqli_query($koneksi, "SELECT * FROM user");
			$row = mysqli_fetch_assoc($query);

			session_start();

			$_SESSION["user_id"]  = $row["user_id"];
			$_SESSION["user"] = $row["user"];
			$_SESSION["level"] = $row["level"];

			header("location:".BASE."index.php");
		}
	}

	else if($action == "partai"){
		$partai = $_POST['partai'];
		$status = $_POST['status'];
		$saksi1 = $_POST['saksi1'];
		$saksi2 = $_POST['saksi2'];
		$saksi3 = $_POST['saksi3'];
		$button = $_POST['button'];
		$update_gambar = "";

		if(!empty($_FILES['gambar']['name'])){
			$nama_file = $_FILES['gambar']['name'];

			move_uploaded_file($_FILES['gambar']['tmp_name'], "../images/".$nama_file);

			$update_gambar = ", gambar='$nama_file'";
		}
		
		if($button == "Add"){
			mysqli_query($koneksi, "INSERT INTO partai(partai,gambar,status,saksi1,saksi2,saksi3) VALUES ('$partai','$nama_file','$status', '$saksi1', '$saksi2', '$saksi3')");
		}

		else if($button == "Update"){
			$partai_id = $_GET['partai_id'];
			mysqli_query($koneksi, "UPDATE partai SET partai='$partai', status='$status', saksi1='$saksi1', saksi2='$saksi2', saksi3='$saksi3' $update_gambar WHERE partai_id='$partai_id'");
		}

		header("location:".BASE."dashboard.php?module=partai&action=list");
	}

	else if($action == "tps"){
		$tps = $_POST['tps'];
		$jadwal = $_POST['jadwal'];
		$lokasi = $_POST['lokasi'];
		$status = $_POST['status'];
		$button = $_POST['button'];

		if($button == "Add"){
			mysqli_query($koneksi, "INSERT INTO tps (tps,status,jadwal,lokasi) VALUES('$tps', '$status', '$jadwal', '$lokasi')");
		}

		else if($button == "Update"){
			$tps_id = $_GET['tps_id'];

			mysqli_query($koneksi, "UPDATE tps SET tps='$tps', jadwal='$jadwal', lokasi='$lokasi', status='$status' WHERE tps_id='$tps_id'");
		}

		header("location:".BASE."dashboard.php?module=tps&action=list");
	}

	else if($action == "pemilih"){
		$pemilih = $_POST['pemilih'];
		$tps_id = $_POST['tps_id'];
		$status = $_POST['status'];
		$button = $_POST['button'];

		if($button == "Add"){
			mysqli_query($koneksi, "INSERT INTO pemilih (pemilih, status, tps_id) VALUES('$pemilih', '$status', '$tps_id')");
		}

		else if($button == "Update"){
			$pemilih_id = $_GET['pemilih_id'];

			mysqli_query($koneksi, "UPDATE pemilih SET pemilih='$pemilih', tps_id='$tps_id', status='$status' WHERE pemilih_id='$pemilih_id'");
		}

		header("location:".BASE."dashboard.php?module=pemilih&action=list");
	}

	else if($action == "blog"){
		$judul = $_POST['judul'];
		$materi = $_POST['materi'];
		$status = $_POST['status'];
		$button = $_POST['button']; 
		$update_gambar = "";

		if(!empty($_FILES['gambar']['name'])){
			$nama_file = $_FILES['gambar']['name'];

			move_uploaded_file($_FILES['gambar']['tmp_name'], "../images/".$nama_file);

			$update_gambar = ", gambar='$nama_file'";
		}

		if($button == "Add"){
			mysqli_query($koneksi, "INSERT INTO blog(judul,materi,gambar,status) VALUES('$judul', '$materi', '$nama_file', '$status')");
		}

		else if($button == "Update"){
			$blog_id = $_GET['blog_id'];
			mysqli_query($koneksi, "UPDATE blog SET judul='$judul', materi='$materi', status='$status' $update_gambar WHERE blog_id='$blog_id' ");
		}
		header("location:".BASE."dashboard.php?module=blog&action=list");
	}

	?>