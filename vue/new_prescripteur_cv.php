<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	 <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laboratoire</title>
	<!-- Button trigger modal -->
	
	
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Ajouter nouveau prescripteur
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
	<form method="post" action="../modele/insert_pres_cv.php">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nouveau prescripteur</h4>
      </div>
      <div class="modal-body">
	  <div class="input-group col-md-12">
        <span>
	</span>	<input type="text" name="nv_prescripteur"  style="width:400px" class="form-control" id="nv_prescripteur">
      </div>
	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
	</form>
    </div>
  </div>
</div>
</div>

<script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  
</html>