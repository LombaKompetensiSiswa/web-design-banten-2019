<div class="page-header">Tambah Data Pemilih</div>
<form method="POST">
<?php $button = "Simpan"; include "Form.php"; ?>
</form>

<?php
if(isset($_POST['btnProses']))
{
    $IDPemilih = customKode($koneksi, 'PM','IDPemilih','pemilih','2','3','03');
    $NamaLengkap = $_POST['NamaLengkap'];
    $NIP = $_POST['NIP'];
    $JenisKelemain = $_POST['JenisKelamin'];
    $IDTps = $_POST['IDTps'];

    $dataTPS = mysqli_query($koneksi, "SELECT * FROM tps") or die ("query error");
    $select = mysqli_fetch_array($dataTPS);

    if($select['JumlahPemilih'] == 0)
    {
        echo "<script>alert('Maaf tps penuh!');</script>";
        echo "<script>document.location='?open=Pemilih';</script>";
    }
    else
    {
        $mysql = mysqli_query($koneksi, "INSERT INTO pemilih VALUES('$IDPemilih','$NamaLengkap','$NIP','$JenisKelemain','$IDTps')") or die ("query error");

        if($mysql)
        {
            $kurangi = mysqli_query($koneksi, "UPDATE tps SET JumlahPemilih = JumlahPemilih - 1 WHERE IDTps = '$IDTps'");
            echo "<script>alert('Data pemilih berhasil ditambahkan!');</script>";
            echo "<script>document.location='?open=Pemilih';</script>";
        }
    }
}
?>