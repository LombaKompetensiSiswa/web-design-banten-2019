<?php
include "../../koneksi/koneksi.php";
$kode = $_GET['id'];

$tampil = mysqli_query($koneksi, "SELECT * FROM saksi WHERE IDSaksi = '$kode'") or die ("query error");
$select = mysqli_fetch_array($tampil);
$IDTps = $select['IDTps'];
if($tampil)
{
    $mysql = mysqli_query($koneksi, "DELETE FROM saksi WHERE IDSaksi = '$kode'") or die ("query error");
    $tambah = mysqli_query($koneksi, "UPDATE tps SET JumlahSaksi = JumlahSaksi + 1 WHERE IDTps = '$IDTps'") or die ("query error");
    echo "<script>document.location='../template.php?open=Saksi';</script>";
}
?>