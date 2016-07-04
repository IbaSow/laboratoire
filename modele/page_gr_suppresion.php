<?php
include ('connexion.php');
$reponse=$bdd->prepare('DELETE FROM grossesse WHERE grossesse.gr_numero=:gr_numero');
$reponse->execute(array('gr_numero'=>$_GET['page'])) or die(print_r($reponse->errorInfo()));
header ('Location:../modele/grossesse_list.php');
?>