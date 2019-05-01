
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
			mysqli_query($koneksi, "INSERT INTO partai(partai,saksi1,saksi2,saksi3,status,gambar) VALUES('$partai', '$saksi1', '$saksi2', '$saksi3, '$status', '$nama_file')");
		}

		else if($button == "Update"){
			$partai_id = $_GET['partai_id'];
			mysqli_query($koneksi, "UPDATE partai SET partai='$partai', status='$status', saksi1='$saksi1', saksi2='$saksi2', saksi3='$saksi3' $update_gambar WHERE partai_id='$partai_id'");
		}

		header("location:".BASE."dashboard.php?module=partai&action=list");
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
			mysqli_query($koneksi, "INSERT INTO blog (judul,materi,status,gambar) VALUES('$judul','$materi','$status', '$nama_file')");
		}
		else if($button == "Update"){
			$blog_id = $_GET['blog_id'];
			mysqli_query($koneksi, "UPDATE blog SET judul='$judul', materi='$materi', status='$status' $update_gambar WHERE blog_id='$blog_id' ");
		}

		header("location:".BASE."dashboard.php?module=blog&action=list");
	}

	else if($action == "tps"){
		$tps = $_POST['tps'];
		$jadwal = $_POST['jadwal'];
		$lokasi = $_POST['lokasi'];
		$status = $_POST['status'];
		$button = $_POST['button'];

		if($button == "Add"){
			mysqli_query($koneksi, "INSERT INTO tps(tps,jadwal,lokasi,status) VALUES('$tps', '$jadwal', '$lokasi', $status')");
		}

		else if($button == "Update"){
			$tps_id = $_GET['tps_id'];

			mysqli_query($koneksi, "UPDATE tps SET tps='$tps', jadwal='$jadwal', lokasi='$lokasi', status='$status' WHERE tps_id='$tps_id'");
		}

		header("location:".BASE."dashboard.php?module=tps&action=list");
	}

	else if($action == "pemilih"){
		$pemilih = $_POST['pemilih'];
		$status = $_POST['status'];
		$button = $_POST['button'];

		if($button == "Add"){
			mysqli_query($koneksi, "INSERT INTO pemilih (pemilih, status) VALUES('$pemilih', '$status')");
		}

		else if($button == "Update"){
			$pemilih_id = $_GET['pemilih_id'];

			mysqli_query($koneksi, "UPDATE pemilih SET pemilih='$pemilih', status='$status' WHERE pemilih_id='$pemilih_id'");
		}

		header("location:".BASE."dashboard.php?module=pemilih&action=list");
	}