<!DOCTYPE html>
<html>
<head>
<LINK rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<title>Fiche Catalogue</title>
</head>
<body>
	<div class="jumbotron">
		<div class="container">
			<h1>Fiche du <?php echo $libelle ?></h1><a class="btn btn-default" href='../controlleurs/indexControlleur.php'>retourner à L'index</a>
			<div class="row">
				<div class="thumbnail">

					<table class="table">
						<tr>
							<th>Nom musée</th>
							<th>Ville</th>
							<th>nombre de Visiteur annuel</th>
							<th>description</th>
							<th>
								<form action="../layout/LayoutCreationFiche.php" method="POST">
									<input type='hidden'name='idControlleur' value='<?php echo $id; ?>'>
									<input type='submit' value='ajouter fiche'class="btn btn-success">
								</form>
							</th>
						</tr>
						<?php echo $contenu?>
					</table>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
