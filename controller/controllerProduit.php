<?php

require_once ("{$ROOT}{$DS}model{$DS}ModelProduit.php");

if(isset($_REQUEST['action']))
    $action = $_REQUEST['action'];
else 
    $action="Home";


if ($action=="readAll") { 

        $pagetitle = "Les Produits Disponible";
        $view = "readAll";

        require ("{$ROOT}{$DS}view{$DS}view.php");

}
                

?>