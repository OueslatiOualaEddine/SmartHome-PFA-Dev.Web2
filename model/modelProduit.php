<?php

require_once ("Model.php");

Class ModelProduit extends Model{ 

private $id; 
private $categorie; 
private $marque; 
private $modele;
private $prix;
private $stock;   

protected static $table = 'produit'; 
protected static $primary = 'id';

public function __construct($id = NULL, $categorie = NULL, $marque = NULL, $modele = NULL, $prix = NULL, $stock = NULL) {} 

public function getId() {}
public function getCategorie() {} 
public function getMarque() {}
public function getModele() {}
public function getPrix() {}
public function getStock() {}

}

?>