<!DOCTYPE html>
<html>
<head>
<LINK rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<title>Liste des catalogues</title>
</head>
<body>
	<div class="jumbotron">
		<div class="container">
			<h1>Liste des catalogues</h1>
			<div class="row">
				<div class="thumbnail">
					<table class="table">
						<tr>
							<th>Nom du catalogue</th>
							<th>
								<form action="../layout/LayoutCreationCatalogue.php" method="POST">
									<input type='submit' value='ajouter catalogue'
										class="btn btn-success">
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
