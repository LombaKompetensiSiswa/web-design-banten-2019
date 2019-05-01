<div class="page-header">Edit data TPS</div>
<?php
$kode = $_GET['id'];
$mysql = mysqli_query($koneksi, "SELECT * FROM tps") or die ("query error");
$select = mysqli_fetch_array($mysql);
?>
<form method="POST">
<?php $button = "Ubah"; include "Form.php"; ?>
</form>
<?php
if(isset($_POST['btnProses']))
{
    $KategoriTPS = $_POST['KategoriTPS'];
    $JadwalPelaksanaan = $_POST['JadwalPelaksanaan'];
    $JumlahPemilih = $_POST['JumlahPilih'];
    $JumlahSaksi = $_POST['JumlahSaksi'];

    $mysql = mysqli_query($koneksi, "UPDATE tps SET KategoriTPS = '$KategoriTPS', JadwalPelaksanaan = '$JadwalPelaksanaan', JumlahPemilih = '$JumlahPemilih', JumlahSaksi = '$JumlahSaksi'") or die("query error");

    if($mysql)
    {
        echo "<script>alert('TPS berhasil Diubah!');</script>";
        echo "<script>document.location='?open=TPS';</script>";
    }
}
?>
