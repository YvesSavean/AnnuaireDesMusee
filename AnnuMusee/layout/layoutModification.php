<!DOCTYPE html>
<html>
<head>
<LINK rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<title>Modification du musée</title>
</head>
<body>
	<div class="jumbotron">
		<div class="container">
			<h1>Modification</h1><a  class="btn btn-default" href='../controlleurs/indexControlleur.php'>retourner à L'index</a>
			<div class="row">
				<div class="thumbnail">
					<form action="../traitement/modification.php" method="post">
						<table class="table">
							<tr>
								<th>Nom du musée</th>
								<th>Lieu</th>
								<th>Pays</th>
								<th>Nombre de visiteur annuel</th>
							</tr>
					<?php echo $contenu?>
				</table>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
