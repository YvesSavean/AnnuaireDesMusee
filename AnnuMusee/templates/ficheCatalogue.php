<?php ob_start() ?>
	<?php 
		$libelle=$catalogue->getLibelle();
		$id= $catalogue->getId()
	?>
		<?php 
			foreach ($catalogue->getLesFiches() as $lesFiches) 
			{
				
				foreach ($lesFiches as $uneFiche)
				{
		?>	
					<tr>
						<td><a href='./ficheControlleur.php?id=<?php echo $uneFiche->getId() ?>'><?php echo $uneFiche->getNom();?></a></td>
						<td><?php echo $uneFiche->getville();?>(<?php echo $uneFiche->getPays();?>)
						<td><?php echo $uneFiche->getNbVisiteur();?></td>
						<td><?php echo $uneFiche->getDescription();?></td>
						<td>
							<form action="../traitement/suppressionFiche.php" method="POST">
								<input type='hidden'name='idFiche' value='<?php echo $uneFiche->getId(); ?>'>
								<input type='hidden'name='idControlleur' value='<?php echo $id; ?>'>
								<input type='submit' value='supprimer' class="btn btn-danger">
							</form>
						</td>
					<tr>
		<?php 	}
			}
		?>
<?php $contenu = ob_get_clean()?>
<?php include '../layout/layoutFicheCatalogue.php' ?>