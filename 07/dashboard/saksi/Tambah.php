<div class="page-header">Tambah Data Saksi</div>
<form method="POST">
<?php $button = "Simpan"; include "Form.php"; ?>
</form>

<?php
if(isset($_POST['btnProses']))
{
    $IDSaksi = customKode($koneksi, 'SK','IDSaksi','saksi','2','3','03');
    $NamaLengkap = $_POST['NamaLengkap'];
    $JenisKelamin = $_POST['JenisKelamin'];
    $NoTelepon = $_POST['NoTelepon'];
    $Alamat = $_POST['Alamat'];
    $IDTps = $_POST['IDTps'];

    $dataTPS = mysqli_query($koneksi, "SELECT * FROM tps") or die ("query error");
    $select = mysqli_fetch_array($dataTPS);

    if($select['JumlahSaksi'] == 0)
    {
        echo "<script>alert('Maaf saksi sudah penuh!');</script>";
        echo "<script>document.location='?open=Saksi';</script>";
    }
    else
    {
        $mysql = mysqli_query($koneksi, "INSERT INTO saksi VALUES('$IDSaksi','$NamaLengkap','$JenisKelamin','$NoTelepon','$Alamat','$IDTps')") or die ("query error");

        if($mysql)
        {
            $kurangi = mysqli_query($koneksi, "UPDATE tps SET JumlahSaksi = JumlahSaksi - 1 WHERE IDTps = '$IDTps'");
            echo "<script>alert('Data saksi berhasil ditambahkan!');</script>";
            echo "<script>document.location='?open=Saksi';</script>";
        }
    }
}
?>