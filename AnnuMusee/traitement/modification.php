<?php
	require_once '../models/bd.php';
	if(getVille($_POST['id'])!=$_POST['ville'])
		setVille($_POST['ville'],$_POST['id']);
	
	if(getNom($_POST['id'])!=$_POST['nom'])
		setNom($_POST['nom'],$_POST['id']);
	
	if(getPays($_POST['id'])!=$_POST['pays'])
		setPays($_POST['pays'],$_POST['id']);
	
	if(getNbVisiteur($_POST['id'])!=$_POST['nbVisiteur'])
		setNbVisiteur($_POST['nbVisiteur'],$_POST['id']);
	
	if(getDescription($_POST['id'])!=$_POST['description'])
		setDescription($_POST['description'],$_POST['id']);
	
	header('Location: ../controlleurs/ficheControlleur.php?id='.$_POST['id']);
?>