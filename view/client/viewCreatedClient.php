
<p>Le Compte a bien été créé</p>
<?php
$ncin = $u->getNcin(); 
echo "<p> Client : <a href='index.php?controller=client&action=read&ncin=$ncin'> $ncin </a> </p>" ;
?>

<p> <a href='index.php?controller=client&action=menu'> Voir le Menu Principale  </a>  </p>

<header localisation="index.php?controller=client&action=menu">