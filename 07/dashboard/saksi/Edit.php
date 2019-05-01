<div class="page-header">Edit data Saksi</div>
<?php
$kode = $_GET['id'];
$mysql = mysqli_query($koneksi, "SELECT * FROM saksi") or die ("query error");
$ambil = mysqli_fetch_array($mysql);
?>
<form method="POST">
<?php $button = "Ubah"; include "Form.php"; ?>
</form>

<?php
if(isset($_POST['btnProses']))
{
    $NamaLengkap = $_POST['NamaLengkap'];
    $JenisKelamin = $_POST['JenisKelamin'];
    $NoTelepon = $_POST['NoTelepon'];
    $Alamat = $_POST['Alamat'];
    $IDTps = $_POST['IDTps'];

    $mysql = mysqli_query($koneksi, "UPDATE saksi SET NamaLengkap = '$NamaLengkap', JenisKelamin = '$JenisKelamin', NoTelepon = '$NoTelepon', Alamat = '$Alamat', IDTps = '$IDTps'") or die ("query error");

    if($mysql)
    {
        echo "<script>alert('Perubahan data saksi berhasil!');</script>";
        echo "<script>document.location='?open=Saksi';</script>";
    }
}
?>