<?php
include_once('models/core.php');
class News
{
    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function addNews($data)
    {
        $name = $data['name'];
        $content = $data['content'];
        $sql = "INSERT INTO content(name,content,date) VALUES('{$name}','{$content}',DATE(NOW()))";
        $result = $this->conn->query($sql);
        if ($result) {
            return 200;
        }
        else
        {
            return 201;
        }
    }

    public function searchNews()
    {
        $rows = [];
            $sql = "SELECT name,content,date FROM content";
            $result = $this->conn->query($sql);
            if ($result) {
                while ($row[] = $result->fetch_assoc()) {
                    $rows = $row;
                }
                return $rows;
            }
    }
}
