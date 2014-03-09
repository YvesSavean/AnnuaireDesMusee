<?php ob_start()?>
	<?php foreach ($catalogues as $catalogue): ?>
		<tr>
			<td><a href='./catalogueControlleur.php?id=<?php echo $catalogue->getId() ?>'><?php echo $catalogue->getlibelle() ?></a></td>
			<td>
				<form action="../traitement/suppressionCatalogue.php" method="POST">
					<input type='hidden'name='id' value='<?php echo $catalogue->getId() ?>'>
					<input type='submit' value='supprimer' class="btn btn-danger">
				</form>
			</td>
		</tr>
	<?php endforeach; ?>
<?php $contenu = ob_get_clean()?>
<?php include '../layout/layoutIndex.php' ?>