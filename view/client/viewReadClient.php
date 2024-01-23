<?php

	foreach ($tab_u as $u){
        $ncin=$u->getmdp();
        $nom=$u->getnom();
        $prenom=$u->getprenom();
        $genre=$u->getgenre();
        $date_naissance=$u->getdate_naissance();
        $tel=$u->gettel();
        $email=$u->getemail();
        $mdp=$u->getmdp();

        echo "<p> CIN : " .$ncin;
        echo " Nom : " .$nom;
        echo " Prenom : " .$prenom;
        echo " Genre : " .$genre;
        echo " Date de Naissance : " .$date_naissance;
        echo " Numéreau de Téléphone : " .$tel;
        echo " E-mail : " .$email;
        echo " Mot de Passe : " .$mdp. "<\p>
        <div class= 'update'>
            <a href='index.php?controller=client&action=update&ncin=$ncin'> Modifier </a>
        </div>
        <div class= 'delete'>
            <a href='index.php?controller=client&action=delete&ncin=$ncin'> Supprimer </a>
        </div>
        <hr/>"
        <a href='index.php?controller=client&action=menu'> Retour au Menu Principale </a>;
    }

?>