<div class="page-header">Edit data petugas</div><!--penutup page-header-->
<?php
$kode = $_GET['id'];
$mysql = mysqli_query($koneksi, "SELECT * FROM akun WHERE level = 'petugas' AND IDUser = '$kode'") or die ("query error");
$ambil = mysqli_fetch_array($mysql);
?>
<form method="POST">
<?php $button = "Ubah"; include "Form.php"; ?>
</form>

<?php
if(isset($_POST['btnProses']))
{
    $NamaLengkap = $_POST['NamaLengkap'];
    $Username = $_POST['Username'];
    $password = $_POST['password'];
    $level = "petugas";

    $mysql = mysqli_query($koneksi, "UPDATE akun SET NamaLengkap = '$NamaLengkap', Username = '$Username', password = '$password' WHERE IDUser = '$kode'") or die ("query error");

    if($mysql)
    {
        echo "<script>alert('Perubahan data petugas berhasil!');</script>";
        echo "<script>document.location='?open=Petugas';</script>";
    }
}
?>