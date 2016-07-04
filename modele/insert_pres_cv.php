 <?php 
 include ('connexion.php');
 
 $req=$bdd->prepare('INSERT INTO  prescripteur( ps_nom) VALUES (:ps_nom)');
 $req->execute(array('ps_nom'=>$_POST['nv_prescripteur'])) or die(print_r($req->errorInfo()));
 
 header ('Location:../vue/chargevirale.php');
 ?>