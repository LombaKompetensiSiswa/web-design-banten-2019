<?php
    include_once('models/core.php');
    class Pages
    {

        private $query = "";

        public function __construct() {
            return $this->Authentication();
        }
        
        public function GetQuery()
        {
            if(isset($_GET['page']))
            {
                $this->query = $_GET['page'];
            }
        }

        private function Authentication()
        {
            $this->GetQuery();
            if (isset($_SESSION['status']) && $_SESSION['status'] == '1') {
                $this->AdminPages();
            } else if(isset($_SESSION['status']) && $_SESSION['status'] == '2') {
                $this->OperatorPages();
            } else{
                $this->DefaultPages();
            }
            
        }

        private function DefaultPages()
        {
            switch ($this->query) {
                case 'about':
                    include_once('views/includes/header/home.php');
                    include_once('views/default/about.php');
                    include_once('views/includes/footer/footer.php');
                    break;
                case 'news':
                    include_once('models/news.php');
                    $news = new News();
                    $data = $news->searchNews();
                    include_once('views/includes/header/home.php');
                    include_once('views/default/news.php');
                    include_once('views/includes/footer/footer.php');
                    break;
                case 'suara':
                    include_once('views/includes/header/home.php');
                    include_once('views/default/suara.php');
                    include_once('views/includes/footer/footer.php');
                    break;
                case 'login':
                    include_once("views/includes/header/login.php");
                    include_once('views/default/login.php');
                    include_once('models/authentication/login.php');
                    if (isset($_POST['submit'])) {
                        $login = new Login();
                        $result = $login->log($_POST);
                        var_dump($result);
                        if ($result == 200) {
                            echo "<script>window.location.href = '/01'</script>";
                        }else if ($result == 201)
                        {
                            echo "NIK Salah";
                        }else if ($result == 202)
                        {
                            echo "Password salah";
                        }
                    }
                    break;
                case 'set1':
                    $_SESSION['status'] = 1;
                    echo('<script>window.location.href = "/01"</script>');
                    break;
                case 'set2':
                    $_SESSION['status'] = 2;
                    echo('<script>window.location.href = "/01"</script>');
                    break;
                default:
                    include_once('views/includes/header/home.php');
                    include_once('views/default/index.php');
                    include_once('views/includes/footer/footer.php');
                    break;
            }
        }

        private function OperatorPages()
        {
            switch ($this->query) {
                case 'logout':
                    include_once('models/authentication/logout.php');
                    break;
                case 'pemilih':
                    include_once('models/data.php');
                    $data = new Data();
                    $pemilih = $data->pemilih();
                    include_once('views/includes/header/operator.php');
                    include_once('views/operator/pemilih.php');
                    include_once('views/includes/footer/footer.php');
                    break;
                case 'input-pemilih':
                    include_once('models/data.php');
                    $data = new Data();
                    include_once('views/includes/header/operator.php');
                    include_once('views/operator/input-pemilih.php');
                    include_once('views/includes/footer/footer.php');
                    if (isset($_POST['submit'])) {
                        $result = $data->addPemilih($_POST,$_SESSION['kec']);
                        if ($result == 200) {
                            echo('Berhasil');
                        }
                        else if($result == 201)
                        {
                            echo('Gagal');
                        }
                    }
                    break;
                case 'input-suara':
                    include_once('models/partai.php');
                    $partai = new Partai();
                    $test = $partai->searchPartai();
                    include_once('views/includes/header/operator.php');
                    include_once('views/operator/input-suara.php');
                    include_once('views/includes/footer/footer.php');
                    include_once('models/suara.php');
                    if (isset($_POST['submit'])) {
                        $suara = new Suara();
                        $result = $suara->addSuara($_POST,$_SESSION['nik']);
                        if($result == 200)
                        {
                            echo 'Data Berhasil Masuk';
                        }else if($result == 201){
                            echo 'Data Gagal Masuk';
                        }
                    }
                    break;
                default:
                    include_once('models/data.php');
                    $data = new Data();
                    $tps = $data->searchOperator($_SESSION['nik']);
                    foreach ($tps as $value) {
                        $nama = $value['nama'];
                        $tps = $value['tps'];
                        $kecamatan = $value['kecamatan'];
                    }
                    include_once('views/includes/header/operator.php');
                    include_once('views/operator/index.php');
                    include_once('views/includes/footer/footer.php');
                    break;
            }
        }

        private function AdminPages()
        {
            switch ($this->query) {
                case 'logout':
                    include_once('models/authentication/logout.php');
                    break;
                case 'register-operator':
                    include_once('models/data.php');
                    $data = new Data();
                    $pemilih = $data->searchPemilih($_GET['nik']);
                    foreach ($pemilih as $value) {
                        $nik = $value['nik'];
                        $nama = $value['nama'];
                        $kec = $value['kd_kecamatan'];
                    }
                    $tps = $data->searchTPS($kec);
                    include_once('views/includes/header/admin.php');
                    include_once('views/admin/register-operator.php');
                    include_once('views/includes/footer/footer.php');
                    include_once('models/authentication/register-operator.php');
                    if (isset($_POST['submit'])) {
                        $reg = new RegisterOperator();
                        $result = $reg->reg($_POST);
                        if ($result == 200) {
                            echo "Register Berhasil";
                        }
                        else if($result == 201)
                        {
                            echo "Register Gagal";
                        }
                    }
                    break;
                case 'partai':
                    include_once('models/partai.php');
                    $partai = new Partai();
                    $partai = $partai->searchPartai();
                    $x = 1;
                    include_once('views/includes/header/admin.php');
                    include_once('views/admin/partai.php');
                    include_once('views/includes/footer/footer.php');
                    break;
                case 'tambah-partai':
                    include_once('models/partai.php');
                    $partai = new Partai();
                    include_once('views/includes/header/admin.php');    
                    include_once('views/admin/tambah-partai.php');
                    include_once('views/includes/footer/footer.php');
                    if (isset($_POST['submit'])) {
                        $result = $partai->addPartai($_POST);
                        if ($result == 200) {
                            echo("Berhasil");
                        }
                        else
                        {
                            echo("Gagal");
                        }
                    }
                    break;
                case 'operator':
                    include_once('models/data.php');
                    $data = new Data();
                    $pemilih = $data->pemilihOperator();
                    include_once('views/includes/header/admin.php');
                    include_once('views/admin/operator.php');
                    include_once('views/includes/footer/footer.php');
                    break;
                case 'saksi':
                    include_once('models/saksi.php');
                    $saksi = new Saksi();
                    $data = $saksi->searchSaksi();
                    include_once('views/includes/header/admin.php');
                    include_once('views/admin/saksi.php');
                    include_once('views/includes/footer/footer.php');
                    break;
                case 'input-saksi':
                    include_once('models/partai.php');
                    $partai = new Partai();
                    $test = $partai->searchPartai();
                    include_once('models/data.php');
                    $data = new Data();
                    $tps = $data->searchTPS($_SESSION['kec']);
                    include_once('views/includes/header/admin.php');
                    include_once('views/admin/input-saksi.php');
                    include_once('views/includes/footer/footer.php');
                    include_once('models/saksi.php');
                    if (isset($_POST['submit'])) {
                        $saksi = new Saksi();
                        $result = $saksi->addSaksi($_POST);
                        if ($result == 200) {
                            echo "Data Berhasil Masuk";
                        }
                        else if ($result == 201)
                        {
                            echo "Data Gagal Masuk";
                        }else{
                            echo "Something Error";
                        }
                    }
                    break;
                case 'news-edit':
                    include_once('models/news.php');
                    include_once('views/includes/header/admin.php');
                    if(isset($_POST['submit']))
                    {
                        $news = new News();
                        $result = $news->addNews($_POST);
                        if ($result == 200) {
                            echo "Data Berhasil Masuk";
                        }
                        else
                        {
                            echo "Data Gagal Masuk";
                        }
                    }
                    include_once('views/admin/news-edit.php');
                    include_once('views/includes/footer/footer.php');
                    break;
                default:
                    include_once('models/data.php');
                    $data = new Data();
                    $operator = $data->searchOperator($_SESSION['nik']);
                    foreach ($operator as $value) {
                        $kecamatan = $value['kecamatan'];
                    }
                    include_once('views/includes/header/admin.php');
                    include_once('views/admin/index.php');
                    include_once('views/includes/footer/footer.php');
                    break;
            }
        }
    }