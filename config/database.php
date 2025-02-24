<?php
// class Database
// {
//     protected $host = "localhost";
//     protected $dbname = "mvc_tuto";
//     protected $dbport = "3306";
//     protected $username = "root";
//     protected $password = "";
//     public $conn;
//     public function getConnection()
//     {
//         $this->conn = null;
//         try {
//             $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname;port=$this->dbport", $this->username, $this->password);
//             $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         } catch (PDOException $e) {
//             die("Database Connection Failed: " . $e->getMessage()); // Завершает скрипт при ошибке
//         }
//         return $this->conn;
//     }
    
// }

class Database
{
    protected $host = "127.0.0.1";
    protected $dbname = "mvc_tuto";
    protected $dbport = "3306";
    protected $username = "root";
    protected $password = "";
    public $conn;
    
    public function getConnection()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname;port=$this->dbport", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database Connection Failed: " . $e->getMessage()); // Xatolikni chiqaradi va skriptni to‘xtatadi
        }
        return $this->conn;
    }
}
# mvs-project
