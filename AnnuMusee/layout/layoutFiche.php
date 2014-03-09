<!DOCTYPE html>
<html>
<head>
<LINK rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<title>Fiche musée</title>
</head>
<body>
	<div class="jumbotron">
		<div class="container">
			<h1>Fiche du <?php echo $nom ?></h1><a  class="btn btn-default" href='../controlleurs/indexControlleur.php'>retourner à L'index</a>
			<div class="row">
				<div class="thumbnail">

					<table class="table">
					<?php echo $contenu?>
					<tr>
							<td>
								<form action="../controlleurs/modificationControlleur.php"
									method="POST">
									<input type='hidden' name='id' value='<?php echo $id ?>'> <input
										type='submit' value='modifier' class="btn btn-info">
								</form>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
