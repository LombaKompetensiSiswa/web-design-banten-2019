<div class="page-header">Tambah Data TPS</div><!--penutup page-header-->
<form method="POST">
<?php $button = "Simpan"; include "Form.php"; ?>
</form>

<?php
if(isset($_POST['btnProses']))
{
    $IDTps = customKode($koneksi, 'TP','IDTps','tps','2','3','03');
    $KategoriTPS = $_POST['KategoriTPS'];
    $JadwalPelaksanaan = $_POST['JadwalPelaksanaan'];
    $JumlahPemilih = $_POST['JumlahPilih'];
    $JumlahSaksi = $_POST['JumlahSaksi'];

    $mysql = mysqli_query($koneksi, "INSERT INTO tps VALUES('$IDTps','$KategoriTPS','$JadwalPelaksanaan','$JumlahPemilih','$JumlahSaksi')") or die ("query error");

    if($mysql)
    {
        echo "<script>alert('TPS berhasil ditambahkan!');</script>";
        echo "<script>document.location='?open=TPS';</script>";
    }
}
?>