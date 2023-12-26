<?php

class Personne{


  

    protected $firstname;
    protected $lastname;
    protected $username;
    protected $email;
    protected $password;


    public function __construct($firstname, $lastname, $username, $email, $password){
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    public function getFirstname(){
        return $this->firstname;
    }
    public function getLastname(){
        return $this->lastname;
    }
    public function getUsername(){
        return $this->username;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }    

}