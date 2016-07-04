<?php
include ('connexion.php');
$reponse=$bdd->prepare('DELETE FROM serologie WHERE serologie.sr_numero=:sr_numero');
$reponse->execute(array('sr_numero'=>$_GET['page'])) or die(print_r($reponse->errorInfo()));
header ('Location:../modele/serologie_list.php');
?>
<!-- Copiright Ibra B. SOW Lamp-->