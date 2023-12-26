<?php

class Utilisateur extends Personne{

    public function __construct($firstname, $lastname, $username, $email, $password){
        parent::__construct($firstname, $lastname, $username, $email, $password);
    }
}