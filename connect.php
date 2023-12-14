<?php
class Database{

    private String $host = 'localhost';
    private string $db_name = 'articles';
    private string $username = 'root';
    private string $password = '';
    private $conn;

    public function getConect()
    {
        try {
            $this->conn = new PDO("mysql:host={$this->host};
            dbname={$this->db_name}",
            $this->username,
             $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $exception) {
            echo 'errore de connection: ' . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>