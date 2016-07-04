<?php
include ('connexion.php');
$reponse=$bdd->prepare('DELETE FROM numerationlcd3cd4cd8 WHERE numerationlcd3cd4cd8.nl_numero=:nl_numero');
$reponse->execute(array('nl_numero'=>$_GET['page'])) or die(print_r($reponse->errorInfo()));
header ('Location:../modele/numerationlcd3cd4cd8_list.php');
?>
<!-- Copiright Ibra B. SOW Lamp-->