<?php
class Database {
    private $host = 'localhost';
    private $db_name = 'articles';
    private $username = 'root';
    private $password = '';
    private $conn;

    public function getConnect() {
        try {
            $this->conn = new PDO(
                "mysql:host={$this->host};dbname={$this->db_name}",
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (PDOException $exception) {
            echo 'error de conection: ' . $exception->getMessage();
        }

        return $this->conn;
    }
}

?>
