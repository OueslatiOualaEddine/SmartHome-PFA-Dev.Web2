<?php

$ROOT = __DIR__;

$DS = DIRECTORY_SEPARATOR;

$controleur_default = "client" ;

if(!isset($_REQUEST['controller']))
    $controller=$controleur_default;
else 
    $controller = $_REQUEST['controller'];

switch ($controller) {
case "client" :
    require("{$ROOT}{$DS}controller{$DS}controllerClient.php");
    break;

case "fournisseur" : 
    require ("{$ROOT}{$DS}controller{$DS}controllerFournisseur.php");
    break;

case "panier" :
    require ("{$ROOT}{$DS}controller{$DS}controllerPanier.php");
    break;

case "commande" :
    require ("{$ROOT}{$DS}controller{$DS}controllerCommande.php");
    break;

case "produit" :
    require ("{$ROOT}{$DS}controller{$DS}controllerProduit.php");
    break;

case "default" :
    require ("{$ROOT}{$DS}controller{$DS}controllerClient.php");
    break;
}



?>