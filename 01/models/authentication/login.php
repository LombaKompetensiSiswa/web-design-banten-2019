<?php
    include_once('models/core.php');
    class Login
    {
        private $conn;
        public function __construct() {
            $db = new Database();
            $this->conn = $db->getConnection();
        }

        public function log($data)
        {
            $data;
            $nik = $data['nik'];
            $password = $data['password'];
            $sql = "SELECT pemilih.nama,status,password,pemilih.kd_kecamatan,kd_tps FROM user,pemilih WHERE pemilih.nik = user.nik AND user.nik = '{$nik}' ";
            $result = $this->conn->query($sql);
            if ($result) {
                while ($row = $result->fetch_assoc()) {
                    if (password_verify($password,$row['password'])) {
                        $_SESSION['status'] = $row['status'];
                        $_SESSION['nama'] = $row['nama'];
                        $_SESSION['kec'] = $row['kd_kecamatan'];
                        $_SESSION['nik'] = $nik;
                        $_SESSION['kd_tps'] = $row['kd_tps'];
                        $data = 200;
                        return $data;
                    }else
                    {
                        $data = 202;
                        return $data;
                    }
                }
             } 
            else 
            {
                $data = 201;
                return $result;
            }
        }
    }
    