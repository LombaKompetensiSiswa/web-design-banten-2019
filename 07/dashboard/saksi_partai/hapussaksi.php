<?php
include "../../koneksi/koneksi.php";
$kode = $_GET['id'];

$mysql = mysqli_query($koneksi, "DELETE FROM saksi_partai WHERE IDSaksiPartai = '$kode'") or die ("query error");

if($mysql)
{
    mysqli_query($koneksi, "DELETE FROM detail_saksi_partai WHERE IDSaksiPartai = '$kode'") or die ("query error");
    header("location:../template.php?open=Saksi-Partai");
}
?>