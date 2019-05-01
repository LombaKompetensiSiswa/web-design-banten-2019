<?php
include "../../koneksi/koneksi.php";
$kode = $_GET['id'];

$mysql = mysqli_query($koneksi, "DELETE FROM detail_saksi_partai WHERE IDSaksi = '$kode'") or die ("query error");

if($mysql)
{
    header("location:../template.php?open=Saksi-Partai-Tambah");
}
?>