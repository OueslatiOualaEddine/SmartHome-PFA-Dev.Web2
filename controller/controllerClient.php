<?php

$controller = "client";

require_once ("{$ROOT}{$DS}model{$DS}ModelClient.php");

if(isset($_REQUEST['action']))
    $action = $_REQUEST['action'];
else 
    $action="Home";


switch ($action) { 

case "Home":
    $pagetitle = "Welcome ";
    $view = "Home";

    require ("{$ROOT}{$DS}view{$DS}view.php");
    break;

case "menu":
    $pagetitle = "Menu Principale ";
    $view = "menu";

    require ("{$ROOT}{$DS}view{$DS}view.php");
    break;

case "enter":
        $pagetitle = "Se Connecter à votre Compte ";
        $view = "enter";

        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;

case "entred":
        $ncin = $_REQUEST["CIN"];
        $email = $_REQUEST["E-mail"];
        $mdp = $_REQUEST["Mots de Passe"];
        if ( ($ncim==$table.getNcin()) && ($email==$table.getEmail() && ($mdp==md5($table.getMdp))) ) {
            $pagetitle = "Connectée";
            $view = "entred";

            require ("{$ROOT}{$DS}view{$DS}view.php");
        }
        break;



case "read":
        if(isset($_REQUEST['CIN'])){
            $ncin = $_REQUEST['CIN'];
            $u = ModelClient::select($ncin);
            if($u!=null){
                $pagetitle = "Details du Client";
                $view = "read";

                require ("{$ROOT}{$DS}view{$DS}view.php");
            }
        }
        break;

case "create":
        $pagetitle = "Créer Votre Compte";
        $view = "create";

        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;

case "created":
            if( isset($_REQUEST['CIN']) && 
                isset($_REQUEST['Nom']) && 
                isset($_REQUEST['Prenom']) && 
                isset($_REQUEST['Genre']) &&
                isset($_REQUEST['Date de Naissance']) && 
                isset($_REQUEST['Numéro de Téléphone']) && 
                isset($_REQUEST['E-mail']) && 
                isset($_REQUEST['Mots de Passe']) ) { 

            $ncin = $_REQUEST["CIN"];
            $Nom = $_REQUEST["Nom"];
            $Prenom = $_REQUEST["Prenom"];
            $Genre = $_REQUEST["Genre"];
            $date_naissance = $_REQUEST["Date de Naissance"];
            $tel = $_REQUEST["Numéro de Téléphone"];
            $email = $_REQUEST["E-mail"];
            $mdp = md5($_REQUEST["Mots de Passe"]);

            $recherche = ModelClient::select($ncin);
            if($recherche==null){
                $u = new ModelClient( $ncin, $Nom, $Prenom , $Genre , $date_naissance , $tel , $email , $mdp );
                $tab = array(   "CIN" => $ncin,
                                "Nom" => $Nom,
                                "Prenom" => $Prenom,    
                                "Genre" => $Genre,
                                "Date de Naissance" => $date_naissance,
                                "Numéro de Téléphone" => $tel,
                                "e-mai" => $email,
                                "Mots de Passe" => $mdp );

                $u->insert($tab);
                $pagetitle = "Compte Crée";
                $view = "created";

                require ("{$ROOT}{$DS}view{$DS}view.php");
            }
        }
        break;

case "update":
        if(isset($_REQUEST['CIN'])){ 
            $ncin = $_REQUEST ['CIN'];
            $up = ModelClient::select($ncin);
            if($up!=null){
                $pagetitle = "Modifier vos Information'";
                $view = "update";

                require ("{$ROOT}{$DS}view{$DS}view.php");
            }
        }
        break;

case "updated":
        if( isset($_REQUEST['CIN']) && 
            isset($_REQUEST['Nom']) && 
            isset($_REQUEST['Prenom']) && 
            isset($_REQUEST['Genre']) &&
            isset($_REQUEST['Date de Naissance']) && 
            isset($_REQUEST['Numéro de Téléphone']) && 
            isset($_REQUEST['E-mail']) && 
            isset($_REQUEST['Mots de Passe']) ) 
            {

                $oldncin = $_REQUEST ['CIN'];
                $tableau = array (  "CIN" => $_REQUEST["CIN"],
                                "Nom" => $_REQUEST["Nom"],
                                "Prenom" => $_REQUEST["Prenom"],
                                "Genre" => $_REQUEST["Genre"],
                                "Date de Naissance" => $_REQUEST["Date de Naissance"],
                                "Numéro de Téléphone" => $_REQUEST["Numéro de Téléphone"],
                                "E-mail" => $_REQUEST["E-mail"],
                                "Mots de Passe" => $_REQUEST["Mots de Passe"] );
                $o = ModelClient::select($oldncin);
                if($o!=null){
                    $u = $o->update($tableau, $oldncin);
                    $pagetitle = "Les Modification ont bien été enregistré";
                    $view = "updated";
                    require ("{$ROOT}{$DS}view{$DS}view.php");
                }
            }
        break;

case "delete":
    if(isset($_REQUEST['CIN'])){
        $ncin = $_REQUEST['CIN'];
        $del = ModelClient::select($ncin);
        if($del!=null){
            $pagetitle = "Suppression du Compte";
            $view = "delete";

            require ("{$ROOT}{$DS}view{$DS}view.php");
        }
    }
    break; 

case "deleted":
    if( isset($_REQUEST['Êtes-vous sûr de Supprimer votre Compte']) && 
            ($_REQUEST['Êtes-vous sûr de Supprimer votre Compte']=='YES') ) {
        
        $del = ModelClient::select($ncin);
        if($del!=null){
                $del->delete($ncin);
                $pagetitle = "Compte Supprimé Définitivement";
                $view = "deleted";
                require ("{$ROOT}{$DS}view{$DS}view.php");
        }
    }
    break; 
    
}

?>