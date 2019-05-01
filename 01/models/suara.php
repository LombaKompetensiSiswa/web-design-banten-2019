<?php
    include_once('models/core.php');
    class Suara
    {
        private $conn;
        public function __construct() {
            $db = new Database();
            $this->conn = $db->getConnection();
        }

        public function addSuara($data,$petugas)
        {
            $nik = $data['nik'];
            $kd_partai = $data['kd_partai'];
            $sql = "INSERT INTO suara (nik,kd_partai,petugas) VALUES('{$nik}','{$kd_partai}','{$petugas}')";
            $result = $this->conn->query($sql);
            if ($result) {
                return 200;
             } 
            else 
            {
                return 201;
            }
        }

        public function searchSuara($id)
        {
            
        }

        public function avgSuara()
        {
            
        }
    }
    