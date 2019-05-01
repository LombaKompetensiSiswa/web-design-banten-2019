<?php
include "../../koneksi/koneksi.php";

$kode = $_GET['id'];

$mysql = mysqli_query($koneksi, "DELETE FROM detail_rekap WHERE IDRekap = '$kode'") or die ("query error");

if($mysql)
{
    header("location:../template.php?open=Input-Suara");
}
?>