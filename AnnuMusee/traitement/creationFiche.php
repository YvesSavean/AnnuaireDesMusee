<?php
	require_once'../Bean/musee.class.php';
	require_once '../models/bd.php';
	$unMusee = new musee();
	$unMusee->setNom($_POST['nom']);
	$unMusee->setville($_POST['ville']);
	$unMusee->setPays($_POST['pays']);
	$unMusee->setNbVisiteur($_POST['nbVisiteur']);
	$unMusee->setDescription($_POST['description']);
	insererFiche($unMusee,$_POST['idControlleur']);
	header('Location: ../controlleurs/catalogueControlleur.php?id='.$_POST['idControlleur']);