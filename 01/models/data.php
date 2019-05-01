<?php
    include_once('models/core.php');
    class Data
    {
        private $conn;
        public function __construct() {
            $db = new Database();
            $this->conn = $db->getConnection();
        }

        public function pemilih()
        {
            $rows = [];
            $sql = "SELECT nik,pemilih.nama,alamat,kecamatan.nama as kecamatan FROM pemilih,kecamatan WHERE pemilih.kd_kecamatan = kecamatan.kd_kecamatan";
            $result = $this->conn->query($sql);
            if ($result) {
                while ($row[] = $result->fetch_assoc()) {
                    $rows = $row;
                }
                return $rows;
            }
        }
        
        public function pemilihOperator()
        {
            $rows = [];
            $sql = "SELECT 
                        pemilih.nik,pemilih.nama,alamat,kecamatan.nama as kecamatan 
                    FROM pemilih,kecamatan
                    WHERE pemilih.kd_kecamatan = kecamatan.kd_kecamatan";
            $result = $this->conn->query($sql);
            if ($result) {
                while ($row[] = $result->fetch_assoc()) {
                    $rows = $row;
                }
                return $rows;
            }
        }

        public function addPemilih($data,$kec)
        {
            $nama = $data['nama'];
            $nik = $data['nik'];
            $alamat = $data['alamat'];
            $sql = "INSERT INTO pemilih(nik,nama,alamat,kd_kecamatan) VALUES('{$nik}','{$nama}','{$alamat}','{$kec}');";
            $result = $this->conn->query($sql);
            if ($result) {
                return 200;
            }else
            {
                return 201;
            }
        }

        public function searchPemilih($id)
        {
            $rows = [];
            $sql = "SELECT nik,nama,kd_kecamatan FROM pemilih WHERE nik = '{$id}'";
            $result = $this->conn->query($sql);
            if ($result) {
                while ($row[] = $result->fetch_assoc()) {
                    $rows = $row;
                }
                return $rows;
            }
        }

        public function searchTPS($id)
        {
            $rows = [];
            $sql = "SELECT kd_tps,nama FROM tps WHERE kd_kecamatan = {$id}";
            $result = $this->conn->query($sql);
            if ($result) {
                while ($row[] = $result->fetch_assoc()) {
                    $rows = $row;
                }
                return $rows;
            }
        }

        public function searchOperator($id)
        {
            $rows = [];
            $sql = "SELECT tps.nama as tps,pemilih.nama,kecamatan.nama as kecamatan FROM user,pemilih,tps,kecamatan WHERE user.nik = pemilih.nik AND user.kd_tps = tps.kd_tps AND tps.kd_kecamatan = kecamatan.kd_kecamatan AND user.nik = {$id}";
            $result = $this->conn->query($sql);
            if ($result) {
                while ($row[] = $result->fetch_assoc()) {
                    $rows = $row;
                }
                return $rows;
            }
        }

        public function kota()
        {
            $rows = [];
            $sql = "SELECT nama,kd_kota FROM kota";
            $result = $this->conn->query($sql);
            if ($result) {
                while ($row[] = $result->fetch_assoc()) {
                    $rows = $row;
                }
                return $rows;
            }
            return false;
        }

        public function kecamatan($data)
        {
            $rows = [];
            $kota = $data['kota'];
            $sql = "SELECT nama,kd_kecamatan FROM kecamatan WHERE kd_kota = {$kota}";
            $result = $this->conn->query($sql);
            if ($result) {
                while ($row[] = $result->fetch_assoc()) {
                    $rows = $row;
                }
                return $rows;
            }
            return false;
        }
    }
    