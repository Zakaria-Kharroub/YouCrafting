<?php
class Article
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    

    public function affArticle()
    {
        $query = $this->conn->prepare("SELECT * FROM Article");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    


}