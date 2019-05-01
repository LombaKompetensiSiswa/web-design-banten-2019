<div class="page-header">Tambah Data Petugas</div><!--penutup page-header-->
<form method="POST">
<?php $button = "Simpan"; include "Form.php"; ?>
</form>
<?php
if(isset($_POST['btnProses']))
{
    $IDUser = customKode($koneksi, 'AC','IDUser','akun','2','3','03');
    $NamaLengkap = $_POST['NamaLengkap'];
    $Username = $_POST['Username'];
    $password = $_POST['password'];
    $level = "petugas";

    $mysql = mysqli_query($koneksi, "INSERT INTO akun VALUES('$IDUser','$NamaLengkap','$Username','$password','$level')") or die ("query error");

    if($mysql)
    {
        echo "<script>alert('Data petugas berhasil ditambahkan!');</script>";
        echo "<script>document.location='?open=Petugas';</script>";
    }
}
?>