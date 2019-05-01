<div class="page-header">Tambah Data</div>
<form method="POST">
<?php $button = "Simpan"; include "Form.php"; ?>
</form>

<?php
if(isset($_POST['btnProses']))
{
    $IDPartai = customKode($koneksi, 'PR','IDPartai','partai','2','3','03');
    $NamaPartai = $_POST['NamaPartai'];
    $JumlahAnggota = $_POST['JumlahAnggota'];

    $mysql = mysqli_query($koneksi, "INSERT INTO partai VALUES('$IDPartai','$NamaPartai','$JumlahAnggota')") or die ("query error");

    if($mysql)
    {
        echo "<script>alert('Data pertai berhasil ditambahkan!');</script>";
        echo "<script>document.location='?open=Partai';</script>";
    }
}
?>