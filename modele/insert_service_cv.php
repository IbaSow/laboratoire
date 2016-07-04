 <?php 
 include ('connexion.php');
 
 $req=$bdd->prepare('INSERT INTO  service(sv_libelle) VALUES (:sv_libelle)');
 $req->execute(array('sv_libelle'=>$_POST['nv_service'])) or die(print_r($req->errorInfo()));
 
 header ('Location:../vue/chargevirale.php');
 ?>