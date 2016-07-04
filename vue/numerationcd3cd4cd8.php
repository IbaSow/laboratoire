<!DOCTYPE HTML>
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
	</style>
  </head>
  <body>
    <div class="container">
	<?php

require_once 'nav.php';
?>
	
	<form method="post" action="../modele/numerationcd3cd4cd8.php" class="col-md-10">
	<h2 class="col-md-offset-2">GPL Numération Lymphocitaire CD3/CD4/CD8</h2>
	<?php/*

require_once 'base_page.php';
*/?>


<?php
 session_start();
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
	<label for="laboratoire" class="btn btn-primary" style="width:200px"  type="button"> N° Laboratoire
	</label>
</span>	<input type="text" name="laboratoire"  class="form-control" id="laboratoire" placeholder="<?php if (isset($_SESSION['pa_laboratoire'])) echo $_SESSION['pa_laboratoire']; ?>">

	</div>
	<div class="input-group col-md-12">
	<span  class="input-group-btn">
	<label for="dossier" class="btn btn-primary" style="width:200px"  type="button" > N ° dossier
	</label>
</span>	<input type="text" name="dossier"  class="form-control" id="dossier" placeholder="<?php if (isset($_SESSION['pa_dossier'])) echo $_SESSION['pa_dossier']; ?>">

	</div>
	<div class="input-group col-md-12">
	<span  class="input-group-btn">
	<label for="nom" class="btn btn-primary" style="width:200px"  type="button" > Nom
	</label>
</span>	<input type="text" name="nom"  class="form-control" id="nom" placeholder="<?php if (isset($_SESSION['pa_nom'])) echo $_SESSION['pa_nom']; ?>">

	</div>
	<div class="input-group col-md-12">
	<span  class="input-group-btn">
	<label for="prenoms" class="btn btn-primary" style="width:200px"  type="button"> Prénoms
	</label>
</span>	<input type="text" name="prenoms"  class="form-control" id="prenoms" placeholder="<?php if (isset($_SESSION['pa_prenom'])) echo $_SESSION['pa_prenom']; ?>">

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
</span>	<input type="text" name="sexe"  class="form-control" id="sexe" value="<?php if (isset($_SESSION['pa_sexe'])) echo $_SESSION['pa_sexe']; ?>" placeholder="<?php if (isset($_SESSION['pa_sexe'])) echo $_SESSION['pa_sexe']; ?>">

	</div>
	
	<div class="input-group col-md-12">
	<span  class="input-group-btn">
	
	<label for="nationalite" class="btn btn-primary" style="width:200px"  type="button"> Nationalité
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
	</span>	<span><input type="date" name="nl_dateprelevement"  style="width:210px" class="form-control" id="dateprelevement_d">
</span>

	
<span  class="input-group-btn">
	<label for="bilan" class="btn btn-primary" style="width:150px"  type="button">Technique
	</label>
	


	</span>	<select  name="nl_technique" id="nl_technique" class="form-control" style="width:355px"><?php include ('../modele/technique.php');?>
</select>
	</div>
	
	
	
	<div class="input-group col-md-12">
	
	<span  class="input-group-btn">
	<label for="nl_norme" class="btn btn-primary" style="width:200px"  type="button">Norme
	</label>
	</span>	<input type="text" name="nl_norme"  style="width:210px" class="form-control" id="nl_norme">
	<span  class="input-group-btn">
	<label for="bilan" class="btn btn-primary" style="width:150px"  type="button">Bilan
	</label>
	</span>	<input type="text" name="bilan"  style="width:150px" class="form-control" id="bilan">
	<span  class="input-group-btn">
	<label for="nl_unite" class="btn btn-primary" style="width:75px"  type="button">Unité
	</span><select  name="nl_unite" id="nl_unite" class="form-control" style="width:130px"><?php include ('../modele/unite.php');?>
</select>
	</div>
	<div class="input-group col-md-12">
<span  class="input-group-btn">
	<label for="prescripteur" class="btn btn-primary" style="width:200px"  type="button">Prescripteur
	</label>
	</span><!--select  name="prescripteur" id="prescripteur" class="form-control" style="width:680px"><?php // include ('../modele/prescripteur.php');?>
</select--><input type="text" name="prescripteur"  style="width:680px" class="form-control" id="prescripteur">
<span class="input-group-btn">
<a class="btn" href="new_prescripteur_nl.php"><span class="glyphicon glyphicon-plus"></span></a>
	</span>
	</div>
	<div class="input-group col-md-5">
	<span  class="input-group-btn">
	<label for="service" class="btn btn-primary" style="width:200px"  type="button">Service
	</span>	<select  name="service" id="service" class="form-control" style="width:680px"><?php include ('../modele/service.php');?>
</select><!--input type="text" name="service"  style="width:160px" class="form-control" id="service"

Ajout nouveau service

-->
<span class="input-group-btn">
<a class="btn" href="new_service_nl.php"><span class="glyphicon glyphicon-plus"></span></a>
	</span>
</div>
	<h1 class="col-md-offset-5">Résultats</h1>
	<div class="input-group col-md-12">
	<span  class="input-group-btn">
	<label for="nl_cd4" class="btn btn-primary" style="width:90px"  type="button">CD4
	</label>
	</span>	<input type="text" name="nl_cd4"  style="width:160px" class="form-control" id="nl_cd4">
	<span  class="input-group-btn">
	<label for="nl_cd8" class="btn btn-primary" style="width:75px"  type="button">CD8
	</label>
	</span>	<input type="text" name="nl_cd8"  style="width:155px" class="form-control" id="nl_cd8">
	<span  class="input-group-btn">
	<label for="nl_cd3" class="btn btn-primary" style="width:95px"  type="button">CD3
	</span>	<input type="text" name="nl_cd3"  style="width:130px" class="form-control" id="nl_cd3">
	<span  class="input-group-btn">
	<label for="nl_rapport" class="btn btn-primary" style="width:95px"  type="button">Rapport
	</span>	<input type="text" name="nl_rapport"  style="width:125px" class="form-control" id="nl_rapport">
	</div>
	
	<div class="input-group col-md-12">
	
<span  class="input-group-btn">
	<label for="nl_conclusion" class="btn btn-primary" style="width:90px"  type="button">Conclusion
	</label>
	</span>	<input type="text" name="nl_conclusion" style="width:390px"  class="form-control" id="nl_conclusion">
	<span class="input-group-btn">
	<label for="nl_daterendue" class="btn btn-primary" style="width:100px"  type="button">	Date rendue
	</label>
	</span>
	<input type="date" name="nl_daterendue"  style="width:351px" class="form-control" id="nl_daterendue_d">

	</div>
	<div class="input-group col-md-12">
	

	<h2 class="col-md-offset-5">Remarques
	</h2>
	
	<textarea  name="nl_remarque"  class="form-control" id="bilan"></textarea>



	</div>
	<footer class="col-md-offset-4" style="margin-top:35px">
	
<button  class="btn btn-info" style="width:110px"  type="submit"><span class="glyphicon glyphicon-ok-sign" ></span> Enregistrer</button>
<button  class="btn " style="width:110px" href="supprimer.php"><span class="glyphicon glyphicon-remove-sign" ></span> <a href="supprimer.php">Supprimer</a></button>
<button  class="btn btn-primary" style="width:110px"><span class="glyphicon glyphicon-plus-sign" ></span> Nouveau</button>
</footer>
	</div>
	
	
	
	
	
	</form>
	</div>
	<script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>