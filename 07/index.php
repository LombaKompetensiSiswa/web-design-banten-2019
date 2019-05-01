<?php
include "koneksi/koneksi.php";
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TPS 2019</title>
        <link rel="stylesheet" type="text/css" href="assets/css/tampilan.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="navbar">
                <nav>
                    <div class="logo">TPS</div>
                    <ul class="nav-links">
                        <li><a href="index.php">Beranda</a></li>
                        <li><a href="#tps">TPS</a></li>
                        <li><a href="#partai">Partai</a></li>
                        <li><a href="#grafik">Grafik</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                    <div class="bars">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                    </div>
                </nav>
            </div>
            <div class="slideshow">
                <div class="slider">
                    <div class="slide"><p>Slide 1</p></div>
                    <div class="slide"><p>Slide 2</p></div>
                    <div class="slide"><p>Slide 3</p></div>
                    <div class="slide"><p>Slide 4</p></div>
                </div>
            </div>
            <div class="content">
                <div class="box-posisi">
                    <div class="box-tps">
                        <?php
                        $mysql = mysqli_query($koneksi, "SELECT * FROM tps") or die ("query error");
                        while($data = mysqli_fetch_array($mysql)){
                            $IDTPS = $data['IDTps'];
                        ?>
                        <h2><?= $data['KategoriTPS']; ?></h2>
                        <div class="box-1" id="tps">                        
                            <div class="gambar">
                                <img src="images/img20190417134555-min-42a512f6f0e15655727b53982aa32b6b_600x400.jpg">
                            </div>
                            <div class="table-informasi">
                                <h3>Jadwal Pelaksanaan</h3>
                                <p><?= $data['JadwalPelaksanaan']; ?></p>
                            </div>
                            <div class="table">
                                <table border="1" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pemilih</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $no = 0;
                                    $query = mysqli_query($koneksi, "SELECT * FROM pemilih WHERE IDTps = '$IDTPS'");
                                    while($data = mysqli_fetch_array($query)){
                                        $no++;
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td><center><?= $no; ?></center></td>
                                            <td><center><?= $data['NamaLengkap']; ?></center></td>
                                        </tr>
                                    </tbody>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div> 
                <div class="box-posisi">
                    <div class="box-partai">
                        <div class="partai" id="partai">Partai</div>
                        <?php
                        $partai = mysqli_query($koneksi, "SELECT * FROM partai") or die ("query error");
                        while($data = mysqli_fetch_array($partai)){
                        ?>
                        <div class="list-partai" >
                            <div class="gambar-1">
                                <img src="images/vote1.jpg">
                            </div>
                            <div class="nama-partai">
                                <p>Partai <?= $data['NamaPartai']; ?></P>
                                <p>Anggota <?= $data['JumlahAnggota']; ?></p>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div> 
                <div class="box-posisi">
                    <h2 id="grafik">Grafik Suara</h2>
                    <div class="gambar-grafik">
                        <img src="images/grafik-partai.png">
                    </div>
                    <div class="perhitungan">
                        <table class="table-style" border="1" width="100%">
                            <tr>
                                <th>No</th>
                                <th>Nama Partai</th>
                                <th>Jumlah Suara</th>
                                <th>Suara Sah</th>
                                <th>Suara Tidak Sah</th>
                                <th>Presentase Suara Sah</th>
                                <th>Presentase Suara Tidak Sah</th>
                            </tr>
                            <?php
                            $no = 0;
                            $rekap = mysqli_query($koneksi, "SELECT * FROM rekap, partai, detail_rekap WHERE rekap.IDPartai = partai.IDPartai AND rekap.IDPartai = partai.IDPartai AND rekap.IDRekap = detail_rekap.IDRekap") or die ("Query error");
                            while($data = mysqli_fetch_array($rekap))
                            {
                                $no++;

                                $suaraResmi = ($data['SuaraSah'] / $data['JumlahSuara']) * 100;
                                $suaraTidakResmi = ($data['SuaraTidakSah'] / $data['JumlahSuara']) * 100;
                            ?>
                            <tr>
                                <td><center><?= $no++; ?></center></td>
                                <td><center><?= $data['NamaPartai']; ?></center></td>
                                <td><center><?= $data['JumlahSuara']; ?></center></td>
                                <td><center><?= $data['SuaraSah']; ?></center></td>
                                <td><center><?= $data['SuaraTidakSah']; ?></center></td>
                                <td><center><?= ceil($suaraResmi); ?>%</center></td>
                                <td><center><?= ceil($suaraTidakResmi); ?>%</center></td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="footer">
                <h2>Copyright &copy; 2019 | TPS</h2>
            </div>
        </div>
        <script src="assets/js/jquery.js"></script>
    </body>
</html>