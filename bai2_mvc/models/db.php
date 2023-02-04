<?php
const DBNAME = "we17316";
const DBUSER = "root";
const DBPASS = "";
const DBCHARSET = "utf8";
const DBHOST = "127.0.0.1";
class Db
{
// tạo kết nối từ project php sang mysql
   public function getConnect()
    {
        $connect = new PDO("mysql:host=" . DBHOST
            . ";dbname=" . DBNAME
            . ";charset=" . DBCHARSET,
            DBUSER,
            DBPASS
        );
        return $connect;
    }
    public $conn;
    public function __construct()
    {
        //set connect
        $this->conn = $this->getConnect();
    }
// neu ko truyen gi thi se dung cho cau lenh select
// neu truyen false thi danh cho cau lenh them sua
    public function getData($query, $getAll = true)
    {
      //  $conn = getConnect();

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        if ($getAll) {
            return $stmt->fetchAll();
        }

        return $stmt->fetch();
    }
}
?>