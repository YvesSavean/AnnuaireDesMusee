<!DOCTYPE html>
<html>
<head>
<LINK rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<title>Création Fiche</title>
</head>
<body>
	<div class="jumbotron">
		<div class="container">
			<h1>Creation Fiche</h1><a class="btn btn-default" href='../controlleurs/indexControlleur.php'>retourner à L'index</a>
			<div class="row">
				<div class="thumbnail">
					<form class="form-horizontal" action="../traitement/creationFiche.php?" method="post">
						<div class="form-group">
							<label for="lblnom" class="col-sm-2 control-label">Nom du musée</label>
							<div class="col-sm-10">
								<input type='text' class="form-control" name='nom'
									placeholder='nom du musee' required>
							</div>
						</div>
						<div class="form-group">
							<label for="lblVille" class="col-sm-2 control-label">Ville</label>
							<div class="col-sm-10">
								<input type='text' class="form-control" name='ville'
									placeholder='ville ou se trouve le musee'>
							</div>
						</div>
						<div class="form-group">
							<label for="lblPays" class="col-sm-2 control-label">Pays</label>
							<div class="col-sm-10">
								<input type='text' class="form-control" name='pays'
									placeholder='pays ou se trouve le musee'>
							</div>
						</div>
						<div class="form-group">
							<label for="lblNb" class="col-sm-2 control-label">Nb de visiteurs</label>
							<div class="col-sm-10">
								<input type='text' class="form-control" name='nbVisiteur'
									placeholder='nom de visiteur cette année'>
							</div>
						</div>
						<div class="form-group">
							<label for="description" class="col-sm-2 control-label">description</label>
							<div class="col-sm-10">
								<textarea class="form-control" name='description' rows="3"></textarea>
							</div>
						</div>
						<input type='hidden'name='idControlleur' value='<?php echo $_POST['idControlleur']; ?>'>
						<input type='submit' value='Valider Modification'
							class="col-sm-2 btn btn-info">
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
