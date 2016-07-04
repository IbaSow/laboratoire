<?php

include ('connexion.php');
$reponse=$bdd->prepare('DELETE FROM chargevirale WHERE chargevirale.cv_numero=:cv_numero');
$reponse->execute(array('cv_numero'=>$_GET['page'])) or die(print_r($reponse->errorInfo()));
header ('Location:../modele/chargevirale_list.php');

?>
<!-- Copiright Ibra B. SOW Lamp-->