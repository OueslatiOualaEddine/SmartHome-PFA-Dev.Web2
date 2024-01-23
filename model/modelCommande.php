<?php

require_once ("Model.php");

Class ModelCommande extends Model{ 

private $reference; 
private $c_nom; 
private $c_prenom; 
private $pr_id; 
private $pr_quantite;
private $etat;
private $date_creation;
private $prix_totale;

protected static $table = 'commande'; 
protected static $primary = 'reference';

public function __construct($reference = NULL, $c_nom = NULL, $c_prenom = NULL, $pr_id = NULL, $pr_quantite = NULL, $etat = NULL, $date_creation = NULL, $prix_totale = NULL,) {} 

public function getReference() {}
public function getC_nom() {} 
public function getC_prenom() {}
public function getPr_id() {}
public function getPr_quantite() {}
public function getEtat() {}
public function getDate_creation() {}
public function getPrix_totale() {}

}

?>