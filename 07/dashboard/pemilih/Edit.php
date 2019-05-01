<div class="page-header">Ubah data Pemilih</div>
<?php
$kode = $_GET['id'];
$mysql = mysqli_query($koneksi, "SELECT * FROM pemilih WHERE IDPemilih = '$kode'") or die ("query error");
$ambil = mysqli_fetch_array($mysql);
?>
<form method="POST">
<?php $button = "Ubah"; include "Form.php"; ?>
</form>

<?php
if(isset($_POST['btnProses']))
{
    $NamaLengkap = $_POST['NamaLengkap'];
    $NIP = $_POST['NIP'];
    $JenisKelemain = $_POST['JenisKelamin'];
    $IDTps = $_POST['IDTps'];

    $mysql = mysqli_query($koneksi, "UPDATE pemilih SET NamaLengkap = '$NamaLengkap', NIP = '$NIP', JenisKelamin = '$JenisKelemain', IDTps = '$IDTps'") or die ("query error");

    if($mysql)
    {
        echo "<script>alert('Data berhasil diubah!');</script>";
        echo "<script>document.location='?open=Pemilih';</script>";
    }
}
?>