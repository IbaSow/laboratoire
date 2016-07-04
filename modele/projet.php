<?php
include ('connexion.php');
$reponse=$bdd->query('SELECT pr_numero,pr_libelle FROM projet ORDER BY pr_numero DESC'); 
while ($donnees=$reponse->fetch())
{
 ?>	

 <option value="<?php echo $donnees['pr_numero'];?>"><?php echo $donnees['pr_libelle']. '</br>' ;?></option>

<?php	

}
 $reponse->closeCursor();
 
?>
	