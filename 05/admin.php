<html>
<head>
    <title>Admin Page - TPU</title>
    <link href="login.css" rel="stylesheet" type="text/css">
</head>
<body class="badan">
    <a href="index.php">Home</a>
    <br/>
    <br/>
    <ul>
      <li><a href="tambahUser.php">Tambah User</a></li>
      <li><a href="tambahSaksi.php">Tambah Saksi</a></li>
      <li><a href="rekap.php">Rekapitulasi Hasil Suara</a></li>
      <li><a href="tambahInfo.php">Tambah Info Website</a></li>
      <li><a href="tambahPartai.php">Tambah Partai</a></li>
      <li><a href="tambahGaleri.php">Tambah Gambar Galeri</a></li>
    </ul>
    <label>List Partai</label><br/>
    <?php
      include_once('config.php');
    ?>
    <label>Daftar Pemilih</label><br/>
    <?php
      include_once('config.php');
    ?>
    <label>Daftar Saksi</label><br/>
    <?php
      include_once('config.php');
    ?>
</body>
</html>
