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
</span>	<input type="text" name="laboratoire"  class="form-control" id="laboratoire" placeholder="<?php if (isset($_SESSION['pa_laboratoire']))echo $_SESSION['pa_laboratoire']; ?>">

	</div>
	<div class="input-group col-md-12">
	<span  class="input-group-btn">
	<label for="dossier" class="btn btn-primary" style="width:200px"  type="button"> N ° dossier
	</label>
</span>	<input type="text" name="dossier"  class="form-control" id="dossier" placeholder="<?php if (isset($_SESSION['pa_dossier'])) echo $_SESSION['pa_dossier']; ?>">

	</div>
	<div class="input-group col-md-12">
	<span  class="input-group-btn">
	<label for="nom" class="btn btn-primary" style="width:200px"  type="button"> Nom
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
</span>	<input type="text" name="sexe"  class="form-control" value="<?php if (isset($_SESSION['pa_sexe'])) echo $_SESSION['pa_sexe']; ?>" id="sexe" placeholder="<?php if (isset($_SESSION['pa_sexe'])) echo $_SESSION['pa_sexe']; ?>">

	</div>
	
	<div class="input-group col-md-12">
	<span  class="input-group-btn">
	<label for="nationalite" class="btn btn-primary" style="width:200px"  type="button"> Nationalité
	</label>
</span>	<input type="text" name="nationalite"  class="form-control" style="width:200px" id="nationalite" placeholder="<?php if (isset($_SESSION['pa_nationalite'])) echo $_SESSION['pa_nationalite']; ?>">
	<span  class="input-group-btn">
	<label for="adresse" class="btn btn-primary" style="width:100px"  type="button"> Adresse
	</label>
	</span>	<input type="text" name="adresse"  style="width:422px" class="form-control" id="adresse" placeholder="<?php if (isset($_SESSION['pa_adresse'])) echo $_SESSION['pa_adresse']; ?>">
	</div>
	
	
	<div class="input-group col-md-12">

	<span  class="input-group-btn">
	<label for="dateprelevement_d" class="btn btn-primary" style="width:200px"  type="button"> Date prelevement
	</label>
	</span>	<span><input type="date" name="bi_dateprelevement"  style="width:200px" class="form-control" id="dateprelevement_d"></span>

	
	<span  class="input-group-btn">
	<label for="service" class="btn btn-primary" style="width:105px"  type="button">Technique
	</span>	<select  name="bi_technique" id="bi_technique" class="form-control" style="width:233px"><?php include ('../modele/technique.php');?>
</select>
<span  class="input-group-btn">
	<label for="bilan" class="btn btn-primary" style="width:80px"  type="button">Bilan
	</label>
	</span>	<input type="text" name="bilan"  style="width:100px" class="form-control" id="bilan">

	</div>
	