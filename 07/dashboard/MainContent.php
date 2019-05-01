<?php
if($_GET)
{
    switch($_GET['open'])
    {
        case 'Homepage':
        include "homepage/index.php";
        break;

        case 'Petugas':
        include "petugas/index.php";
        break;

        case 'Petugas-Tambah':
        include "petugas/Tambah.php";
        break;

        case 'Petugas-Edit':
        include "petugas/Edit.php";
        break;

        case 'TPS':
        include "tps/index.php";
        break;

        case 'TPS-Tambah':
        include "tps/Tambah.php";
        break;

        case 'TPS-Edit':
        include "tps/Edit.php";
        break;

        case 'Saksi':
        include "saksi/index.php";
        break;

        case 'Saksi-Tambah':
        include "saksi/Tambah.php";
        break;

        case 'Saksi-Edit':
        include "saksi/Edit.php";
        break;

        case 'Pemilih':
        include "pemilih/index.php";
        break;

        case 'Pemilih-Tambah':
        include "pemilih/Tambah.php";
        break;

        case 'Pemilih-Edit':
        include "pemilih/Edit.php";
        break;

        case 'Partai':
        include "partai/index.php";
        break;

        case 'Partai-Tambah':
        include "partai/Tambah.php";
        break;

        case 'Partai-Edit':
        include "partai/Edit.php";
        break;

        case 'Input-Suara':
        include "suara/index.php";
        break;

        case 'Saksi-Partai':
        include "saksi_partai/index.php";
        break;

        case 'Saksi-Partai-Tambah':
        include "saksi_partai/Tambah.php";
        break;

        case 'Saksi-Partai-Detail':
        include "saksi_partai/Detail.php";
        break;

        case 'Rekap':
        include "rekap/index.php";
        break;

        case 'Rekap-Detail':
        include "rekap/Detail.php";
        break;
    }
}
?>