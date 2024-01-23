<?php
require_once ("Model.php");
Class ModelClient extends Model{ 

private $ncin;  
private $nom; 
private $prenom; 
private $genre; 
private $date_naissance;
private $ntel;
private $email;
private $mdp;

protected static $table = 'client'; 
protected static $primary = 'ncin';

public function __construct($ncin = NULL, $nom = NULL, $prenom = NULL, $genre = NULL, $date_naissance = NULL, $ntel = NULL, $email = NULL, $mdp = NULL) {} 

public function getNcin() {}
public function getNom() {} 
public function getPrenom() {}
public function getGenre() {}
public function getDate_naissance() {}
public function getNtel() {}
public function getEmail() {}
public function getMdp() {}

}

?>