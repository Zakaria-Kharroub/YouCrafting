<?php

include_once '../lib/Database.php';

class Article {

    private $conn;
    private $id;
    private $titre;
    private $contenu;
    private $date_de_creation;
    private $user_id;

    public function __construct($conn){
        $this->conn = $conn;
    }

    // id
    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }
    // titre
    public function getTitre(){
        return $this->titre;
    }

    public function setTitre($titre){
        $this->titre = $titre;
    }

    // content
     public function getContenu(){
        return $this->contenu;
    }

    public function setContenu($contenu){
        $this->contenu = $contenu;
    }

    // date dcreation
    public function getDateCeation(){
        return $this->date_de_creation;
    }

    public function setDateCeation($date_de_creation){
        $this->date_de_creation = $date_de_creation;
    }

    // user-id
    public function getUserId(){
        return $this->user_id;
    }

    public function setUserId($user_id){
        $this->user_id = $user_id;
    }

    
    public function affArticle()
    {
        $query = $this->conn->query("SELECT * FROM article");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }


    // method ajout
    public function addArticle(){
        $query = $this->conn->prepare("INSERT INTO article (titre, contenu, date_de_creation, user_id) VALUES (:titre, :contenu, :date_de_creation, :user_id)");
        $query->bindParam(':titre', $this->titre);
         $query->bindParam(':contenu', $this->contenu);
        $query->bindParam(':date_de_creation', $this->date_de_creation);
        $query->bindParam(':user_id', $this->user_id);
        $query->execute();
    }

    // methode delete
    public function deleteArticle(){
        $query = $this->conn->prepare("DELETE FROM article WHERE id = :id");
        $query->bindParam(':id', $this->id);
        $query->execute();
    }

    // methode update
    public function updateArticle(){
        $query = $this->conn->prepare("UPDATE article SET titre = :titre, contenu = :contenu, date_de_creation = :date_de_creation, user_id = :user_id WHERE id = :id");
        $query->bindParam(':id', $this->id);
        $query->bindParam(':titre', $this->titre);
        $query->bindParam(':contenu', $this->contenu);
        $query->bindParam(':date_de_creation', $this->date_de_creation);
        $query->bindParam(':user_id', $this->user_id);
        $query->execute();
    }
}
?>
