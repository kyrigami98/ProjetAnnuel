<?php

include_once 'connect.php';

class user {
    
    public $idUser;
    public $email;   
    public $nom;
    public $prenom;
    public $pwd;
    public $statut;
    
    
    function getIdUser() {
        return $this->idUser;
    }

    function getEmail() {
        return $this->email;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getPwd() {
        return $this->pwd;
    }

    function getStatut() {
        return $this->statut;
    }

    function setIdUser($idUser) {
        $this->idUser = $idUser;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setPwd($pwd) {
        $this->pwd = $pwd;
    }

    function setStatut($statut) {
        $this->statut = $statut;
    }

    
    public function __construct($idUser,$nom,$prenom, $email, $pwd, $statut) {
        $this->idUser = $idUser;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->statut = $statut;
        $this->pwd = $pwd;

    }

}
