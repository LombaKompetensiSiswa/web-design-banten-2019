<?php
include "../../koneksi/koneksi.php";

$kode = $_GET['id'];

$tampil = mysqli_query($koneksi, "SELECT * FROM pemilih WHERE IDPemilih = '$kode'") or die ("query error");
$select = mysqli_fetch_array($tampil);
$IDTps = $select['IDTps'];

if($tampil)
{
    $mysql = mysqli_query($koneksi, "DELETE FROM pemilih WHERE IDPemilih = '$kode'") or die ("query error");
    $tambah = mysqli_query($koneksi, "UPDATE tps SET JumlahPemilih = JumlahPemilih + 1 WHERE IDTps = '$IDTps'");
    echo "<script>document.location='../template.php?open=Pemilih';</script>";
}
?>