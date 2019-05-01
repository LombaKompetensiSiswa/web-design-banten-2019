<div class="page-header">Ubah data partai</div>
<?php
$kode = $_GET['id'];
$mysql = mysqli_query($koneksi, "SELECT * FROM partai WHERE IDPartai = '$kode'") or die ("query error");
$ambil = mysqli_fetch_array($mysql);
?>
<form method="POST">
<?php $button = "Ubah"; include "Form.php"; ?>
</form>

<?php
if(isset($_POST['btnProses']))
{
    $NamaPartai = $_POST['NamaPartai'];
    $JumlahAnggota = $_POST['JumlahAnggota'];

    $mysql = mysqli_query($koneksi, "UPDATE partai SET NamaPartai = '$NamaPartai', JumlahAnggota = '$JumlahAnggota' WHERE IDPartai = '$kode'") or die ("query error");

    if($mysql)
    {
        echo "<script>alert('Ubah Data pertai berhasil!');</script>";
        echo "<script>document.location='?open=Partai';</script>";
    }
}
?>