<?php

require_once ("Model.php");

Class ModelProduit extends Model{ 

private $id_panier; 
private $prix_total; 
 

protected static $table = 'panier'; 
protected static $primary = 'id_panier';

public function __construct ($id_panier = NULL , $prix_total = 0) {} 

public function getId_panier() {}
public function getPrix_total() {} 

}

?>