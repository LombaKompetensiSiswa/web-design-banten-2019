<?php

include_once('config.php');
$result = mysqli_query($mysqli,"SELECT * FROM tpu ORDER BY id DESC" )

?>
<!DOCTYPE html>
<html>
<head>
    <title>Tempat Pemungutan Suara (TPU)</title>
    <link href='style.css' rel="stylesheet" type="text/css" />
</head>
<section>
    <body class="badan">

    <div class="atas">
        <img src="images/kotakpemilu.png" alt="kotakpemilu" />
        <a href='login.php' id="login">Login</a>
        <a href="index.php" id="home">Tempat Pemunguat Suara (TPS)</a>
    </div>

    <div class="welcome">
        <h1>17 April, siap memilih !</h1>
        <img src="images/pemilu.png" alt="pemilu" />
        <p>Ratusan TPS di berbagai daerah di seluruh Nusantara telah tersebar. Ayo gunakan hak pilih anda untuk menentukan masa depan bangsa dan negara Republik Indonesia !</p>
    </div>

    <div class="artikel">
        <h1 class="judul-artikel">Informasi TPS</h1>

        <h1 class="judul-artikel">Informasi Partai Pemilu</h1>
        <ul>
            <li>
                <div class="partai">
                    <img src="images/partai1.png" alt="partai1" />
                    <h1>Partai A</h1>
                </div>
            </li>
            <li>
                <div class="partai">
                    <img src="images/partai1.png" alt="partai1" />
                    <h1>Partai B</h1>
                </div>
            </li>
            <li>
                <div class="partai">
                    <img src="images/partai1.png" alt="partai1" />
                    <h1>Partai C</h1>
                </div>
            </li>
            <li>
                <div class="partai">
                    <img src="images/partai1.png" alt="partai1" />
                    <h1>Partai D</h1>
                </div>
            </li>
            <li>
                <div class="partai">
                    <img src="images/partai1.png" alt="partai1" />
                    <h1>Partai E</h1>
                </div>
            </li>
        </ul>
        <div class="tambahPartai">
            <a href='tambahPartai.php'>Tambah Partai
            </a>
        </div>
    </div>

    <div class="artikel">
        <h1 class="judul-artikel">Daftar pemilih</h1>
            <table border="1" style="border-color: #000;" width="30%">
                <tr>
                    <label>TPS 1</label>
                    <br/>
                    <br/>
                    <th>Nama</th>
                </tr>
                <tr><td>Pemilih 1</td></tr>
                <tr><td>Pemilih 2</td></tr>
                <tr><td>Pemilih 3</td></tr>
                <tr><td>Pemilih 4</td></tr>
                <tr><td>Pemilih 5</td></tr>
                <tr><td>Pemilih 6</td></tr>
                <tr><td>Pemilih 7</td></tr>
                <tr><td>Pemilih 8</td></tr>
                <tr><td>Pemilih 9</td></tr>
                <tr><td>Pemilih 10</td></tr>
                <tr><td>Pemilih 11</td></tr>
                <tr><td>Pemilih 12</td></tr>
                <tr><td>Pemilih 13</td></tr>
                <tr><td>Pemilih 14</td></tr>
                <tr><td>Pemilih 15</td></tr>
                <tr><td>Pemilih 16</td></tr>
                <tr><td>Pemilih 17</td></tr>
                <tr><td>Pemilih 18</td></tr>
                <tr><td>Pemilih 19</td></tr>
                <tr><td>Pemilih 20</td></tr>
                <tr><td>Pemilih 21</td></tr>
                <tr><td>Pemilih 22</td></tr>
                <tr><td>Pemilih 23</td></tr>
                <tr><td>Pemilih 24</td></tr>
                <tr><td>Pemilih 25</td></tr>
            </table>
        <br/>
        <br/>
            <table border="1" style="border-color: #000;" width="30%">
                <tr>
                    <label>TPS 2</label>
                    <br/>
                    <br/>
                    <th>Nama</th>
                </tr>
                <tr><td>Pemilih 1</td></tr>
                <tr><td>Pemilih 2</td></tr>
                <tr><td>Pemilih 3</td></tr>
                <tr><td>Pemilih 4</td></tr>
                <tr><td>Pemilih 5</td></tr>
                <tr><td>Pemilih 6</td></tr>
                <tr><td>Pemilih 7</td></tr>
                <tr><td>Pemilih 8</td></tr>
                <tr><td>Pemilih 9</td></tr>
                <tr><td>Pemilih 10</td></tr>
                <tr><td>Pemilih 11</td></tr>
                <tr><td>Pemilih 12</td></tr>
                <tr><td>Pemilih 13</td></tr>
                <tr><td>Pemilih 14</td></tr>
                <tr><td>Pemilih 15</td></tr>
                <tr><td>Pemilih 16</td></tr>
                <tr><td>Pemilih 17</td></tr>
                <tr><td>Pemilih 18</td></tr>
                <tr><td>Pemilih 19</td></tr>
                <tr><td>Pemilih 20</td></tr>
                <tr><td>Pemilih 21</td></tr>
                <tr><td>Pemilih 22</td></tr>
                <tr><td>Pemilih 23</td></tr>
                <tr><td>Pemilih 24</td></tr>
                <tr><td>Pemilih 25</td></tr>
            </table>
            </div>
    </div>

    <div class="artikel">
        <h1 class="judul-artikel">Grafik Perolehan Suara</h1>
        <img src="images/graph.jpg" class="grafik" alt="grafik">
        <h1>Jumlah Suara Sah</h1>
        <p>000</p>
        <h1>Jumlah Suara Tidak Sah</h1>
        <p>000</p>
        <div class="clearfix"></div>
    </div>

    <div class="artikel">
        <h1 class="judul-artikel">Tentang</h1>
        </br>
        </br>
        <p>Sukseskan Pemilu 2019 !</p>
    </div>

    </body>
</section>
<footer>
    <div class="footer">
        <p>©Copyright, KPU 2019</p>
    </div>
</footer>

<?php

?>
</html>
