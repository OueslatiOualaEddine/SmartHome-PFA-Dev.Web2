<?php

require_once ("{$ROOT}{$DS}model{$DS}ModelFournisseur.php");

if(isset($_REQUEST['action']))
    $action = $_REQUEST['action'];
else 
    $action="Home";


if ($action=="readAll") { 

        $pagetitle = "Nos Fournisseur ";
        $view = "readAll";

        require ("{$ROOT}{$DS}view{$DS}view.php");

}
                

?>