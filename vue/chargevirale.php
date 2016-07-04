<!DOCTYPE HTML>

<?php
session_start();

if(isset($_SESSION["id"]))
{
?>
<html>
  <head>
    <meta charset="utf-8">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	
	 <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laboratoire</title>
    <meta name="description" content="Le site de la maison de l'architecture">
	<style type="text/css">
	
	.container{
	
	margin-left:100px;
	margin-top:50px;
	}
	.btn-primary 
	{
		background-color:green;
	}
	.btn-info{
		background-color:blue;
	}
	.btn-danger{
		background-color:red;
	}	
	
	</style>
  </head>
  <body>
    <div class="container">
	<?php

require_once 'nav.php';
?>
	
	<form method="post" action="../modele/chargevirale.php" class="col-md-10">
	<h2 class="col-md-offset-5">Charge virale</h2>
	<?php/*
include('base_page.php');*/
?>

<div class="input-group col-md-12">
	<span  class="input-group-btn">
	<label for="projet" class="btn btn-primary" style="width:200px" type="button"> Programme/Projet
	</label>
</span>	<select  name="pr_numero" id="pr_numero" class="form-control col-md-1"><?php include ('../modele/projet.php');?>
</select>
	</div>
	<div class="input-group col-md-12">
	<span  class="input-group-btn">
	<label for="laboratoire" class="btn btn-primary" style="width:200px"  type="button"> NÂ° Laboratoire
	</label>
</span>	<input type="text" name="laboratoire"  class="form-control" id="laboratoire" placeholder="<?php if (isset ($_SESSION['pa_laboratoire'])) echo $_SESSION['pa_laboratoire']; ?>">

	</div>
	<div class="input-group col-md-12">
	<span  class="input-group-btn">
	<label for="dossier" class="btn btn-primary" style="width:200px"  type="button" > N Â° dossier
	</label>
</span>	<input type="text" name="dossier"  class="form-control" id="dossier" placeholder="<?php  if (isset ($_SESSION['pa_dossier'])) echo $_SESSION['pa_dossier']; ?>">

	</div>
	<div class="input-group col-md-12">
	<span  class="input-group-btn">
	<label for="nom" class="btn btn-primary" style="width:200px"  type="button" > Nom
	</label>
</span>	<input type="text" name="nom"  class="form-control" id="nom" placeholder="<?php if (isset($_SESSION['pa_nom'])) echo $_SESSION['pa_nom']; ?>">

	</div>
	<div class="input-group col-md-12">
	<span  class="input-group-btn">
	<label for="prenoms" class="btn btn-primary" style="width:200px"  type="button"> PrĂŠnom
	</label>
</span>	<input type="text" name="prenoms"  class="form-control" id="prenoms" placeholder="<?php if (isset($_SESSION['pa_prenom']))echo $_SESSION['pa_prenom']; ?>">

	</div>
	
	<div class="input-group col-md-12">
	<span  class="input-group-btn">
	<label for="age" class="btn btn-primary" style="width:200px"  type="button"> Age
	</label>
</span>	<input type="text" name="age"  class="form-control" id="age" placeholder="<?php if (isset($_SESSION['pa_age'])) echo $_SESSION['pa_age']; ?>">

	</div>
	<div class="input-group col-md-12">
	<span  class="input-group-btn">
	<label for="sexe" class="btn btn-primary" style="width:200px"  type="button"> Sexe
	</label>
</span>	

<input type="text" name="sexe"  class="form-control" id="sexe" value="<?php if (isset($_SESSION['pa_sexe'])) echo $_SESSION['pa_sexe'];?>" placeholder="<?php if (isset($_SESSION['pa_sexe'])) echo $_SESSION['pa_sexe']; ?>">
<?php /*
if($_SESSION["pa_sexe"] == "F")
	echo '<option value="H">Homme
<option value="F" selected>Femme';
else
	echo '<option value="H" selected>Homme
<option value="F">Femme';
?>
*/

?>
	</div>
	
	<div class="input-group col-md-12">
	<span  class="input-group-btn">
	
	<label for="nationalite" class="btn btn-primary" style="width:200px"  type="button"> NationalitĂŠ
	</label>
</span>	<input type="text" name="nationalite"  class="form-control" id="nationalite" value="<?php if (isset($_SESSION['pa_nationalite'])) echo $_SESSION['pa_nationalite']; ?>" placeholder="<?php if (isset($_SESSION['pa_nationalite'])) echo $_SESSION['pa_nationalite']; ?>">

	</div>
	
	
	<div class="input-group col-md-12">
	<span  class="input-group-btn">
	<label for="adresse" class="btn btn-primary" style="width:200px"  type="button"> Adresse
	</label>
	</span>	<input type="text" name="adresse"  class="form-control" id="adresse" value="<?php if (isset($_SESSION['pa_adresse'])) echo $_SESSION['pa_adresse']; ?>" placeholder="<?php if (isset($_SESSION['pa_adresse'])) echo $_SESSION['pa_adresse']; ?>">

	</div>
	<div class="input-group col-md-12">
	<span  class="input-group-btn">
	<label for="dateprelevement_d" class="btn btn-primary" style="width:200px"  type="button"> Date prelevement
	</label>
	</span>	<span><input type="date" name="dateprelevement"  style="width:160px" class="form-control" id="dateprelevement">
</span>
<span  class="input-group-btn">
	<label for="bilan" class="btn btn-primary" style="width:80px"  type="button">Bilan
	</label>
	</span>	<input type="text" name="bilan"  style="width:100px" class="form-control" id="bilan">
	
<span  class="input-group-btn">
	<label for="cv_chargevirale" class="btn btn-primary" style="width:105px"  type="button">Résultats
	</label>
	</span>	<input type="text" name="cv_chargevirale"  style="width:275px" class="form-control" id="cv_chargevirale">
	</div>
	
	
	
	<div class="input-group col-md-5">
	<span  class="input-group-btn">
	<label for="bilan" class="btn btn-primary" style="width:200px"  type="button">Technique
	</label>
	
</span>
<select  name="cv_technique" id="cv_technique" class="form-control" style="width:160px"><?php include ('../modele/technique.php');?>
</select>
<span  class="input-group-btn">
	<label for="cv_unite" class="btn btn-primary" style="width:80px"  type="button">Unité
	</label>
	</span>
<select  name="cv_unite" id="cv_unite" class="form-control" style="width:100px"><?php include ('../modele/unite.php');?>
</select>
	<span  class="input-group-btn">
	<label for="prescripteur" class="btn btn-primary" style="width:105px"  type="button">Prescripteur
	</label>
	</span><!--select  name="prescripteur" id="prescripteur" class="form-control" style="width:235px"><?php //include ('../modele/prescripteur.php');?>
</select--><input type="text" name="prescripteur"  style="width:235px" class="form-control" id="prescripteur">
<span class="input-group-btn">
<a class="btn" href="new_prescripteur_cv.php"><span class="glyphicon glyphicon-plus"></span></a>
	</span>
	</div>
	
	<div class="input-group col-md-12">
	<span  class="input-group-btn">
	<label for="service" class="btn btn-primary" style="width:200px"  type="button">Service
	</span>	<select  name="service" id="service" class="form-control"><?php include ('../modele/service.php');?>
</select>

<span class="input-group-btn">
<a class="btn" href="new_service_cv.php"><span class="glyphicon glyphicon-plus"></span></a>
	</span>
</div>
<div class="input-group col-md-12">
	<span  class="input-group-btn">
	<label for="cv_daterendue" class="btn btn-primary" style="width:200px"  type="button"> Date Rendue
	</label>
	</span>
	<input type="date" name="cv_daterendue"  style="width:160px" class="form-control" id="cv_daterendue_d">

</div>
<div class="input-group col-md-12">
<h3 >Commentaires</h3>

<textarea  name="cv_commentaire"  class="form-control" id="cv_commentaire"></textarea>
<h3 >Conclusion</h3>
	<textarea type="text" name="cv_conclusion" class="form-control" id="cv_conclusion"></textarea>
</div>
</div>
<footer class="col-md-offset-4" style="margin-top:35px">
	
<button  class="btn btn-info" style="width:110px"  type="submit" ><span class="glyphicon glyphicon-ok-sign" ></span> Enregistrer</button>
<button  class="btn btn-danger " style="width:110px" href="supprimer.php"><span class="glyphicon glyphicon-remove-sign" ></span> <a href="supprimer.php">Supprimer</a></button>
<button  class="btn btn-primary" style="width:110px"><span class="glyphicon glyphicon-plus-sign" ></span> Nouveau</button>
</footer>
</form>
	</div>
	
	<script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>

<?php
}
else
	header ("Location:../index.php");

?>
<!-- Copiright Ibra B. SOW Lamp-->