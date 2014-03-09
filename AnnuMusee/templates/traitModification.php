<?php ob_start()?>
	<tr>
		<td><input type='text' class="form-control" name='nom' value='<?php echo $musee->getNom() ?>'></td>
		<td><input type='text' class="form-control" name='ville' value='<?php echo $musee->getville() ?>'></td>
		<td><input type='text' class="form-control" name='pays' value='<?php echo $musee->getpays() ?>'></td>				
		<td><input type='text' class="form-control" name='nbVisiteur' value='<?php echo $musee->getNbVisiteur() ?>'></td>
		<td><input type='text' class="form-control" name='description' value='<?php echo $musee->getDescription() ?>'></td>
		<td><input type='submit' value='Valider Modification' class="btn btn-info"></td>	
	</tr>
	<input type='hidden' name='id' value='<?php echo $musee->getId() ?>'>
<?php $contenu = ob_get_clean()?>
<?php include '../layout/layoutModification.php' ?>