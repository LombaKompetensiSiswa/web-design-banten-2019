<li><a href="template.php?open=Homepage">Beranda</a></li>
<?php if($_SESSION['level'] == "admin") { ?>
<li><a href="template.php?open=Petugas">Petugas</a></li>
<li><a href="template.php?open=TPS">TPS</a></li>
<li><a href="template.php?open=Saksi">Saksi</a></li>
<li><a href="template.php?open=Saksi-Partai">Data Saksi Partai</a></li>
<li><a href="template.php?open=Partai">Partai</a></li>
<li><a href="template.php?open=Rekap">Rekap Suara</a></li>
<?php }else if($_SESSION['level'] == "petugas"){ ?>
<li><a href="template.php?open=Pemilih">Pemilih</a></li>
<li><a href="template.php?open=Input-Suara">Input Suara</a></li>
<?php } ?>
<li><a href="keluar.php" onclick="return attention('Yakin ingin keluar dari halaman ini?')">Keluar</a></li>