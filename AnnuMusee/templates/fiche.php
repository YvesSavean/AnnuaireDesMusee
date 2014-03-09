<?php ob_start() ?>
	<?php 
		$nom=$musee->getNom();
		$id= $musee->getId()
	?>
	<tr>
		<td><?php echo $nom ?></td>
	</tr>
	<tr>
		<td><?php echo $musee->getville() ?>
		(<?php echo $musee->getpays() ?>)</td>
	</tr>
	<tr>
		<td><?php echo $musee->getNbVisiteur() ?></td>
	</tr>
	<tr>
		<td><?php echo $musee->getDescription() ?></td>
	</tr>
<?php $contenu = ob_get_clean()?>
<?php include '../layout/layoutFiche.php' ?>