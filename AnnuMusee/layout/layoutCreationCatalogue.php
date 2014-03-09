<!DOCTYPE html>
<html>
<head>
<LINK rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<title>Creation Catalogue</title>
</head>
<body>
	<div class="jumbotron">
		<div class="container">
			<h1>Creation catalogue</h1><a class="btn btn-default" href='../controlleurs/indexControlleur.php'>retourner à L'index</a>
			<div class="row">
				<div class="thumbnail">
					<form class="form-horizontal" action="../traitement/creationCatalogue.php"
						method="post">
						<div class="form-group">
							<label for="lblnom" class="col-sm-2 control-label">nom du catalogue</label>
							<div class="col-sm-10">
								<input type='text' class="form-control" name='libelle'
									placeholder='nom du catalogue' required>
							</div>
						</div>
						<input type='submit' value='Valider Modification' class="col-sm-2 btn btn-info">
					</form>
				</div>
			</div>
		</div>
	</div>
