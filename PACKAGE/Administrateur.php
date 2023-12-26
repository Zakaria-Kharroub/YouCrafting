<?php
require_once 'Utilisateur.php';

class Administrateur extends Personne{
    private $phone;
    private $CIN;

    public function __construct($firstname, $lastname, $username, $email, $password, $phone, $CIN){
        parent::__construct($firstname, $lastname, $username, $email, $password);
        $this->phone = $phone;
        $this->CIN = $CIN;
    }
    
    public function getPhone(){
        return $this->phone;
    }
    public function getCIN(){
        return $this->CIN;
    }

}
?>