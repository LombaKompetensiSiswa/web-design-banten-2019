<?php
    class Database
    {
        private $conn,
                $host = 'localhost',
                $pass = '',
                $user = 'root',
                $db = 'tps';
        public function __construct() {
            $this->conn = new MYSQLI($this->host,$this->user,$this->pass,$this->db);
        }

        public function getConnection()
        {
            return $this->conn;
        }
    }
    