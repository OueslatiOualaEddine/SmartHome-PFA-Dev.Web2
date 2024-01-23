<?php

require_once ("Model.php");

Class ModelFournisseur extends Model{ 

private $id_frs; 
private $marque; 
private $url_FB; 
private $url_WEB;
private $adress;
private $tel_frs;   

protected static $table = 'fournisseur'; 
protected static $primary = 'id_frs';

public function __construct($id_frs = NULL, $marque = NULL, $url_FB = NULL, $url_WEB = NULL, $adress = NULL, $tel_frs = NULL) {} 

public function getId_frs() {}
public function getMarque() {} 
public function getUrl_FB() {}
public function getUrl_WEB() {}
public function getAdress() {}
public function getTel_frs() {}

}

?>