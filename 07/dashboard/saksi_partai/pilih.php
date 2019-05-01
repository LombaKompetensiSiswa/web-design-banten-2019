<?php
include "../../koneksi/koneksi.php";
include "../library.php";
$kode = $_GET['id'];

$cek = mysqli_query($koneksi, "SELECT * FROM saksi_partai ORDER BY IDSaksiPartai DESC") or die ("query error");
$ambil = mysqli_query($koneksi, "SELECT * FROM saksi WHERE IDSaksi = '$kode'") or die ("query error");
$select = mysqli_fetch_array($ambil);

if(mysqli_num_rows($cek) > 0)
{
    $IDSaksiPartai = customKode($koneksi, 'SP','IDSaksiPartai','saksi_partai','2','3','03');
}
else
{
    $IDSaksiPartai = "SP001";
}

$IDSaksi = $IDSaksiPartai;
$IDSaksi1 = $select['IDSaksi'];

$cekin = mysqli_query($koneksi, "SELECT * FROM detail_saksi_partai WHERE IDSaksiPartai = '$IDSaksiPartai'") or die ("query error");
if(mysqli_num_rows($cekin) >= 3)
{
    echo "<script>alert('Maaf saksi hanya bisa 3 saksi!');</script>";
    echo "<script>document.location='../template.php?open=Saksi-Partai-Tambah';</script>";
}
else
{
    $insert = mysqli_query($koneksi, "INSERT INTO detail_saksi_partai VALUES('$IDSaksi','$IDSaksi1')") or die ("query error");
    header("location:../template.php?open=Saksi-Partai-Tambah");
}
?>