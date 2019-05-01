<?php
    include_once('models/core.php');
    class RegisterOperator
    {
        private $conn;
        public function __construct() {
            $db = new Database();
            $this->conn = $db->getConnection();
        }
        
        public function reg($data)
        {
            $data;
            $nik = $data['nik'];
            $password = $data['password'];
            $kd_tps = $data['kd_tps'];
            $password = password_hash($password,PASSWORD_DEFAULT);
            $sql = "INSERT INTO user(nik,password,kd_tps,status) VALUES ('{$nik}','{$password}','{$kd_tps}','2')";
            $result = $this->conn->query($sql);
            if ($result) {
                $data = 200;
                return $data;
            }
            $data = 201;
            return $data;
        }
    }
    