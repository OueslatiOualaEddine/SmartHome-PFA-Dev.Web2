<?php

require_once ("{$ROOT}{$DS}model{$DS}ModelPanier.php");

if(isset($_REQUEST['action']))
    $action = $_REQUEST['action'];
else 
    $action="Home";


switch ($action) {

    case "fxr4a":

        $modele = "Mi Router 4A" ;
        $quantite = $_REQUEST["quantité"];

        $pagetitle = "Continuer votre Achat";        
        $view = "fxr4a";

        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;


    case "fxrpro":

        $modele = "Mi Repeater Pro" ;
        $quantite = $_REQUEST["quantite"];

        $pagetitle = "Continuer votre Achat";        
        $view = "fxrpro";

        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;
    

    case "sghmsn":

        $modele = $_REQUEST["Home"] ;
        $quantite = $_REQUEST["quantite"];

        $pagetitle = "Continuer votre Achat";        
        $view = "sghmsn";

        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;
    

    case "sgnma":

        $modele = $_REQUEST["Nest"] ;
        $quantite = $_REQUEST["quantite"];

        $pagetitle = "Continuer votre Achat";        
        $view = "sgnma";

        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;


    case "samm":

        $modele = $_REQUEST["HomePod"] ;
        $quantite = $_REQUEST["quantite"];

        $pagetitle = "Continuer votre Achat";        
        $view = "samm";

        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;
    

    case "saed":

        $modele = "echo dot" ;
        $quantite = $_REQUEST["quantite"];

        $pagetitle = "Continuer votre Achat";        
        $view = "saed";

        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;
    
        
    case "txsbl":
       
        $modele = "Mi LED Smart Bulb" ;
        $quantite = $_REQUEST["quantite"];

        $pagetitle = "Continuer votre Achat";        
        $view = "txsbl";

        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;


    case "txsby":
       
        $modele = " Mi Yeelight Smart Bulb " ;
        $quantite = $_REQUEST["quantite"];

        $pagetitle = "Continuer votre Achat";        
        $view = "txsby";

        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;


    case "tasbel":
       
        $modele = "Eufy Lumos Smart Bulb" ;
        $quantite = $_REQUEST["quantite"];

        $pagetitle = "Continuer votre Achat";        
        $view = "tasbel";

        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;


    case "qgnlt":
       
        $modele = "Nest learning Thermostat" ;
        $quantite = $_REQUEST["quantite"];

        $pagetitle = "Continuer votre Achat";        
        $view = "qgnlt";

        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;


    case "cxmhsc":
       
        $modele = "Mi Home Security Camera" ;
        $quantite = $_REQUEST["quantite"];

        $pagetitle = "Continuer votre Achat";        
        $view = "cxmhsc";

        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;


    case "cxmsss":
       
        $modele = "Mi Smart Sensor Set" ;
        $quantite = $_REQUEST["quantite"];

        $pagetitle = "Continuer votre Achat";        
        $view = "cxmsss";

        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;
        

    case "caec2pro":
       
        $modele = "Eufy Cam 2 Pro" ;
        $quantite = $_REQUEST["quantite"];

        $pagetitle = "Continuer votre Achat";        
        $view = "caec2pro";

        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;


    case "caesk":
       
        $modele = "Eufy Security Kit" ;
        $quantite = $_REQUEST["quantite"];

        $pagetitle = "Continuer votre Achat";        
        $view = "caesk";

        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;


    case "wxvcs9":
       
        $modele = "Viomie Cleaner S9" ;
        $quantite = $_REQUEST["quantite"];

        $pagetitle = "Continuer votre Achat";        
        $view = "wxvcs9";

        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;


    case "waervg30":
        
        $modele = "Eufy RoboVac G30"  ;
        $quantite = $_REQUEST["quantite"];

        $pagetitle = "Continuer votre Achat";
        $view = "waervg30";

        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;


    case "ordred":

            $sqlid ="SELECT id_produit FROM produit WHERE modele =" .$modele ;
            $sqlp ="SELECT prix FROM produit WHERE modele =" .$modele ;

            $reference = NULL ;
            $c_ncin = $_SESSION["ncin"];
            $pr_id = query ($sqlid);
            $etat = "en attente" ;
            $date_creation = date("d-m-Y H:i:s");
            $prix_u = query ($sqlp);
            $prix_totale = $prix_u * $quantite ;

            $u = new ModelPanier( $reference, $c_ncin, $pr_id, $quantite , $etat , $date_creation , $prix_totale );
            $tab = array(   "reference" => $reference,
                            "c_ncin" => $c_ncin,
                            "pr-id" => $pr_id,    
                            "quantite" => $quantite,
                            "etat" => $etat,
                            "date_creation" => $date_creation,
                            "prix_totale" => $prix_totale );

            $u->insert($tab);
            $pagetitle = "Continuer votre Achat";        
            $view = "ordred";

            require ("{$ROOT}{$DS}view{$DS}view.php");

        
    break;

    
}
           

?>