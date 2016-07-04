<?php
include ('connexion.php');
$reponse=$bdd->prepare('DELETE FROM biochimie WHERE biochimie.bi_numero=:bi_numero');
$reponse->execute(array('bi_numero'=>$_GET['page'])) or die(print_r($reponse->errorInfo()));
header ('Location:../modele/biochimie_list.php');
?>
<!-- Copiright Ibra B. SOW Lamp-->