<?php
    include_once('models/core.php');
    class Saksi
    {
        private $conn;
        public function __construct() {
            $db = new Database();
            $this->conn = $db->getConnection();
        }

        public function searchSaksi()
        {
            $rows = [];
            $sql = "SELECT saksi.nik,pemilih.nama,partai.nama as partai,kecamatan.nama as kecamatan, tps.nama as tps FROM saksi,pemilih,partai,tps,kecamatan WHERE saksi.nik = pemilih.nik AND saksi.kd_partai = partai.kd_partai AND saksi.kd_tps = tps.kd_tps AND tps.kd_kecamatan = kecamatan.kd_kecamatan";
            $result = $this->conn->query($sql);
            if ($result) {
                while ($row[] = $result->fetch_assoc()) {
                    $rows = $row;
                }
                return $rows;
            }
        }

        public function addSaksi($data)
        {
            $nik = $data['nik'];
            $kd_partai = $data['kd_partai'];
            $kd_tps = $data['kd_tps'];
            $sql = "INSERT INTO saksi (nik,kd_partai,kd_tps) VALUES('{$nik}','{$kd_partai}','{$kd_tps}')";
            $result = $this->conn->query($sql);
            if ($result) {
                return 200;
             } 
            else 
            {
                return 201;
            }
        }
    }
    