<?php
include '../config/koneksi.php';

$i = $_GET['i'];

if ($i == 'tambahtps') {
	$nama = mysqli_escape_string($koneksi,$_POST['nama']);
	$lokasi = mysqli_escape_string($koneksi,$_POST['lokasi']);
	date_default_timezone_set('Asia/Jakarta');
	$date = $_POST['jadwaltps'];
	$time = $_POST['waktutps'];

	$sql = mysqli_query($koneksi,"INSERT INTO tps VALUES (
			'',
			'$nama',
			'$lokasi',
			'$date',
			'$time'
			)");
	if ($sql ) {
		echo "<script>alert ('TPS berhasil Ditambahkan');window.location='settingtps.php'</script>";
	} else {
			echo "<script>alert ('TPS Gagal Ditambahkan');window.location='settingtps.php'</script>";
	}
}
if ($i == 'tambahsaksi') {
	$nama = mysqli_escape_string($koneksi,$_POST['nama']);
	$partai = mysqli_escape_string($koneksi,$_POST['partai']);
	$id_tps = $_GET['id_tps'];
	$cekpartai = mysqli_query($koneksi,"SELECT * FROM saksi WHERE id_partai='$partai' AND id_tps='$id_tps'");
	$jmlh = mysqli_num_rows($cekpartai);
	if ($jmlh > 0) {
		echo "<script>alert ('Maaf ! Perwakilan Partai anda sudah didaftarkan');window.location='viewtps.php?id_tps=".$id_tps."'</script>";
	} else {
	$saksi = mysqli_query($koneksi,"INSERT INTO saksi VALUES (
		'',
		'$nama',
		'$partai',
		'$id_tps'
)");
	if ($saksi) {
		echo "<script>alert ('Saksi berhasil Ditambahkan');window.location='viewtps.php?id_tps=".$id_tps."'</script>";
	} else {
		echo "<script>alert ('Saksi berhasil Ditambahkan');window.location='viewtps.php?id_tps=".$id_tps."'</script>";
	}
}
}

if ($i == "deletesaksi") {
	$id_tps = $_GET['id_tps'];
	$id_saksi = $_GET['id_saksi'];
	$deletesaksi = mysqli_query($koneksi,"DELETE FROM saksi WHERE id_saksi='$id_saksi'");
	if ($deletesaksi) {
		echo "<script>alert ('Saksi berhasil Dihapus');window.location='viewtps.php?id_tps=".$id_tps."'</script>";
	} else {
		echo "<script>alert ('Saksi Gagal Dihapus');window.location='viewtps.php?id_tps=".$id_tps."'</script>";
	}
}

if ($i == "tambahsuara") {
	$total = $_POST['total'];
	$sah = $_POST['sah'];
	$partai = $_POST['partai'];
	$tsah = $_POST['tidaksah'];
	$id_tps = $_GET['id_tps'];
	if ($sah + $tsah <> $total) {
		echo "<script>alert ('Maaf ! Jumlah suara sah & tidak sah tidak memenuhi total suara');window.location='inputsuara.php?id_tps=".$id_tps."'</script>";
	} else {
		$cek = mysqli_query($koneksi,"SELECT * FROM suara WHERE id_tps='$id_tps' AND id_partai='$partai'");
		$jmlh = mysqli_num_rows($cek);
		if ($jmlh > 0) {
			echo "<script>alert ('Suara telah diinput');window.location='inputsuara.php?id_tps=".$id_tps."'</script>";
		} else {
		$insert = mysqli_query($koneksi,"INSERT INTO suara VALUES (
			'',
			'$total',
			'$partai',
			'$id_tps',
			'$sah',
			'$tsah'
	)");
		if ($insert ) {
			echo "<script>alert ('Suara berhasil diinput');window.location='inputsuara.php?id_tps=".$id_tps."'</script>";
		} else {
			echo "<script>alert ('Suara gagal diinput');window.location='inputsuara.php?id_tps=".$id_tps."'</script>";
		}
	}
}
}

if ($i == 'tambahpemilih') {
	$id_tps = $_GET['id_tps'];
	$nama= $_POST['pemilih'];
	$nik = $_POST['nik'];
	$cekpem = mysqli_query($koneksi,"SELECT * FROM pemilih WHERE id_tps='$id_tps'");
	$datapem = mysqli_fetch_array($cekpem);
	$jmlh = mysqli_num_rows($cekpem);
	if ($jmlh >= '25') {
		echo "<script>alert ('Pemilih Sudah melebih jumlah (25)');window.location='inputpemilih.php?id_tps=".$id_tps."'</script>";
	} else {
		$ceknama = mysqli_query($koneksi,"SELECT * FROM pemilih WHERE nama_pemilih='$nama' OR nik_pemilih='$nik'");
		$jmlhnama = mysqli_num_rows($ceknama);
		if ($jmlhnama > 0) {
			echo "<script>alert ('Pemilih Sudah terdaftar');window.location='inputpemilih.php?id_tps=".$id_tps."'</script>";
		} else {
		$tambahpemilih = mysqli_query($koneksi,"INSERT INTO pemilih VALUES (
			'',
			'$nama',
			'$nik',
			'$id_tps'
		)");
		if ($tambahpemilih) {
			echo "<script>alert ('Pemilih Berhasil Diinput');window.location='inputpemilih.php?id_tps=".$id_tps."'</script>";
		} else {
			echo "<script>alert ('Pemilih Gagal Diinput');window.location='inputpemilih.php?id_tps=".$id_tps."'</script>";
		}
	 }
	}
}

if ($i == 'editpemilih') {
	$id_tps=$_GET['id_tps'];
	$id_pemilih=$_GET['id_pemilih'];
	$nama= $_POST['pemilih'];
	$nik = $_POST['nik'];
	$updatepemilih = mysqli_query($koneksi,"UPDATE pemilih SET nama_pemilih='$nama', nik_pemilih='$nik' WHERE id_pemilih='$id_pemilih'");
	if ($updatepemilih) {
		echo "<script>alert ('Pemilih Berhasil Diedit');window.location='inputpemilih.php?id_tps=".$id_tps."'</script>";
	}
}

if ($i == 'deletepemilih') {
	$id_tps = $_GET['id_tps'];
	$id_pemilih = $_GET['id_pemilih'];
	$deletepem = mysqli_query($koneksi,"DELETE FROM pemilih WHERE id_pemilih='$id_pemilih'");
	if ($deletepem) {
		echo "<script>alert ('Pemilih Berhasil Dihapus');window.location='inputpemilih.php?id_tps=".$id_tps."'</script>";
	} else {
		echo "<script>alert ('Pemilih Gagal Dihapus');window.location='inputpemilih.php?id_tps=".$id_tps."'</script>";
	}
}
if ($i == 'tambahpartai') {
	$nama = $_POST['nama'];
	$img = $_FILES['logo']['name'];
	$tmp = $_FILES['logo']['tmp_name'];

	$cek = mysqli_query($koneksi,"SELECT * FROM partai WHERE nama_partai='$nama'");
	$ada = mysqli_num_rows($cek);
	if ($ada > 0) {
		echo "<script>alert ('Nama Partai Sudah ada');window.location='tambahpartai.php'</script>";
	} else {
		if (isset(($img))) {
			if (!empty($img)) {
				$location = '../images/';
				$upload = move_uploaded_file($tmp, $location.$img);
				if ($upload) {
					$tambahpartai = mysqli_query($koneksi,"INSERT INTO partai VALUES (
						'',
						'$nama',
						'$img'
							)");
					if ($tambahpartai) {
						echo "<script>alert ('Partai Telah ditambahkan !');window.location='tambahpartai.php'</script>";
					} else {
						echo "<script>alert ('Partai Gagal ditambahkan !');window.location='tambahpartai.php'</script>";
					}
				}
			}
		}
	}
}
if ($i == 'deletepartai') {
	$id_partai = $_GET['id_partai'];
	$deletepartai = mysqli_query($koneksi,"DELETE FROM partai WHERE id_partai='$id_partai'");
	if ($deletepartai) {
		echo "<script>alert ('Partai Telah dihapus !');window.location='tambahpartai.php'</script>";
	} else {
		echo "<script>alert ('Partai Gagal dihapus !');window.location='tambahpartai.php'</script>";
	}
}
if ($i == 'editpartai') {
	$nama = $_POST['nama'];
	$id = $_GET['id_partai'];
	$img = $_FILES['logo']['name'];
	$tmp = $_FILES['logo']['tmp_name'];
		if (isset(($img))) {
			if (!empty($img)) {
				$location = '../images/';
				$upload = move_uploaded_file($tmp, $location.$img);
				if ($upload) {
					$updatepartai = mysqli_query($koneksi,"UPDATE partai SET nama_partai='$nama', foto_partai='$img' WHERE id_partai='$id'");
					if ($updatepartai) {
						echo "<script>alert ('Partai Telah diupdate !');window.location='tambahpartai.php'</script>";
					} else {
						echo "<script>alert ('Partai Gagal diupdate !');window.location='tambahpartai.php'</script>";
					}
				}
			} else {
				$datepartai = mysqli_query($koneksi,"UPDATE partai SET nama_partai='$nama' WHERE id_partai='$id'");
					if ($datepartai) {
						echo "<script>alert ('Partai Telah diupdate !');window.location='tambahpartai.php'</script>";
					} else {
						echo "<script>alert ('Partai Gagal diupdate !');window.location='tambahpartai.php'</script>";
					}
			}
		}
}
if ($i == 'tambahgaleri') {
	$img = $_FILES['galeri']['name'];
	$tmp = $_FILES['galeri']['tmp_name'];
	if (isset($img)) {
		if (!empty($img)) {
			$location = '../images/';
			$load = move_uploaded_file($tmp, $location.$img);
			if ($load) {
				$insertgaleri = mysqli_query($koneksi,"INSERT INTO galeri VALUES (
					'',
					'$img'
					)");
				if ($insertgaleri) {
					echo "<script>alert ('Galeri Berhasil Ditambahkan !');window.location='settinggaleri.php'</script>";
				} else {
					echo "<script>alert ('Galeri Gagal Ditambahkan !');window.location='settinggaleri.php'</script>";
				}
			}
		}
	}
}
if ($i == 'deletegaleri') {
	$id_galeri=$_GET['id_galeri'];
	$deletegaleri = mysqli_query($koneksi,"DELETE FROM galeri WHERE id_galeri='$id_galeri'");
	if ($deletegaleri) {
		echo "<script>alert ('Galeri Berhasil Dihapus !');window.location='settinggaleri.php'</script>";
	} else {
		echo "<script>alert ('Galeri Gagal Dithapus !');window.location='settinggaleri.php'</script>";
	}
}
if ($i == 'tambahberita') {
	$judul = $_POST['judul'];
	$konteks = $_POST['konteks'];
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
	$date = $_POST['tanggal'];
	if (isset($foto)) {
		if (!empty($foto)) {
			$location= '../images/';
			$upload = move_uploaded_file($tmp, $location.$foto);
			if ($upload) {
				$insertberita = mysqli_query($koneksi,"INSERT INTO berita VALUES (
					'',
					'$judul',
					'$konteks',
					'$foto',
					'$date'
			)");
				if ($insertberita) {
					echo "<script>alert ('Berita Berhasil Ditambahkan !');window.location='settingberita.php'</script>";
				} else {
					echo "<script>alert ('Berita Gagal Ditambahkan !');window.location='settingberita.php'</script>";
				}
			}
		}
	}
}

if ($i == 'editberita') {
	$judul = $_POST['judul'];
	$konteks = $_POST['konteks'];
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
	$date = $_POST['tanggal'];
	$id_berita = $_GET['id_berita'];
	if (isset($foto)) {
		if (!empty($foto)) {
			$location = '../images/';
			$uploadfoto = move_uploaded_file($tmp, $location.$foto);
			if ($uploadfoto) {
				$editberita = mysqli_query($koneksi,"UPDATE berita SET judul_berita='$judul',context_berita='$konteks', foto_berita='$foto', tanggal_berita='$date' WHERE id_berita='$id_berita'");
				if ($editberita) {
					echo "<script>alert ('Berita Berhasil Diupdate !');window.location='settingberita.php'</script>";
				} else {
					echo "<script>alert ('Berita Gagal Diupdate !');window.location='settingberita.php'</script>";
				}
			}
		} else {
			$updateberita = mysqli_query($koneksi,"UPDATE berita SET judul_berita='$judul',context_berita='$konteks', tanggal_berita='$date' WHERE id_berita='$id_berita' ");
			if ($updateberita) {
				echo "<script>alert ('Berita Berhasil Diupdate !');window.location='settingberita.php'</script>";
			} else {
				echo "<script>alert ('Berita Gagal Diupdate !');window.location='settingberita.php'</script>";
			}
		}
	}
}
if ($i == 'deleteberita') {
	$id_berita=$_GET['id_berita'];
	$delete = mysqli_query($koneksi,"DELETE FROM berita WHERE id_berita='$id_berita'");
	if ($delete) {
	echo "<script>alert ('Berita Berhasil Dihapus!');window.location='settingberita.php'</script>";
	} else {
		echo "<script>alert ('Berita Gagal Diupdate !');window.location='settingberita.php'</script>";
	}
}
if ($i == 'tambahuser') {
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$status = $_POST['status_user'];

	$cek= mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' AND nama_user='$nama'");
	$jmlh = mysqli_num_rows($cek);
	if ($jmlh > 0) {
		echo "<script>alert ('Username  Sudah Digunakan !');</script>";
	} else {
		$insert = mysqli_query($koneksi,"INSERT INTO user VALUES (
			'',
			'$nama',
			'$username',
			'$password',
			'$status'
			)");
		if ($insert) {
			echo "<script>alert ('User Berhasil Ditambahkan!');window.location='settinguser.php'</script>";
		} else {
			echo "<script>alert ('User Gagal Ditambahkan!');window.location='settinguser.php'</script>";
		}
	}
}
if ($i == 'edituser') {
	$id_user=$_GET['id_user'];
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$status = $_POST['status'];
		$update = mysqli_query($koneksi,"UPDATE user SET nama_user='$nama',username='$username',password='$password', status_user='$status' WHERE id_user='$id_user'");
		if ($update) {
			echo "<script>alert ('User Berhasil Diupdate!');window.location='settinguser.php'</script>";
		} else {
			echo "<script>alert ('User Gagal Diupdate!');window.location='settinguser.php'</script>";
		}
}
if ($i == 'deleteuser') {
	$id_user = $_GET['id_user'];
	$delete = mysqli_query($koneksi,"DELETE FROM user WHERE id_user='$id_user'");
	if ($delete) {
		echo "<script>alert ('User Berhasil Dihapus!');window.location='settinguser.php'</script>";
	} else {
		echo "<script>alert ('User Gagal Dihapus!');window.location='settinguser.php'</script>";
	}
}
if ($i == 'editabout') {
	$about = $_POST['about'];
	if (empty($about)) {
			echo "<script>alert ('Maaf About tidak boleh Kosong !')</script>";
	} else {
			$upabout = mysqli_query($koneksi,"UPDATE about SET content_about='$about'");
			if ($upabout ) {
				echo "<script>alert ('Update About Berhasil !');window.location='settingabout.php'</script>";
			} else {
				echo "<script>alert ('Update About Gagal  !');;window.location='settingabout.php'</script>";
			}
	}

}
if ($i == 'edittps') {
	$idtps = $_GET['id_tps'];
	$nama = mysqli_escape_string($koneksi,$_POST['nama']);
	$lokasi = mysqli_escape_string($koneksi,$_POST['lokasi']);
	date_default_timezone_set('Asia/Jakarta');
	$date = $_POST['tanggal'];
	$time = $_POST['waktu'];

	$uptodate = mysqli_query($koneksi,"UPDATE tps SET nama_tps='$nama',lokasi_tps='$lokasi',jadwalhari_tps='$date', jadwalwaktu_tps='$time' WHERE id_tps='$idtps'");
	if ($uptodate) {
		echo "<script>alert ('Update TPS Berhasil !');window.location='viewtps.php?id_tps=".$idtps."'</script>";
	} else {
		echo "<script>alert ('Update TPS Gagal !');window.location='viewtps.php?id_tps=".$idtps."'</script>";
	}
}

if ($i == 'hapustps') {
	$id_tps = $_GET['id_tps'];
	$deletetps = mysqli_query($koneksi,"DELETE FROM tps WHERE id_tps='$id_tps'");
	if ($deletetps) {
		echo "<script>alert ('Delete TPS Berhasil !');window.location='settingtps.php'</script>";
	} else {
		echo "<script>alert ('Delete TPS gagal !');window.location='settingtps.php'</script>";
	}
}

?>