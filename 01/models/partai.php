<?php
include_once('models/core.php');
class Partai
{
    private $conn;
    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function searchPartai()
    {
        $rows = [];
        $sql = "SELECT kd_partai,nama FROM partai";
        $result = $this->conn->query($sql);
        if ($result) {
            while ($row[] = $result->fetch_assoc()) {
                $rows = $row;
            }
            return $rows;
        }
    }

    public function addPartai($data)
    {
        $nama = $data['nama'];
        $sql = "INSERT INTO partai(nama) VALUES('{$nama}');";
        $result = $this->conn->query($sql);
        if($result)
        {
            return 200;
        }
        return 201;
    }
}
