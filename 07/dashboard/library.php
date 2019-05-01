<?php
function customKode($koneksi, $inisial, $id, $table, $first, $last, $perKal)
{
    $data = $inisial;
    $query = mysqli_query($koneksi, "SELECT MAX($id) AS Kode FROM $table ORDER BY $id LIKE '%$data'") or die ("query error");
    $select = mysqli_fetch_array($query);
    $ambil = $select['Kode'];
    $no = substr($ambil, $first, $last);
    $urut = $no + 1;
    return $kodeOtomatis = $data.sprintf("%".$perKal."s", $urut);
}
?>