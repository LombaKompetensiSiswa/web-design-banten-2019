<?php
include "../../koneksi/koneksi.php";

$kode = $_GET['id'];
$mysql = mysqli_query($koneksi, "DELETE FROM partai WHERE IDPartai = '$kode'") or die ("query error");

if($mysql)
{
    header('location:../template.php?open=Partai');
}
?>