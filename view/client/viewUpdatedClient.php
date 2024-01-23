<p> Les Modification ont bien été enregistré</p>
<?php
$ncin = $u->getNcin(); 
echo "<p> <a href='index.php?controller=client&action=read&ncin=$ncin'> Vérifier vos Information </a> </p>" ;
?>