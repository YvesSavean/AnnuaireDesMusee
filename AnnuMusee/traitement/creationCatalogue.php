<?php
	require_once'../Bean/catalogue.class.php';
	require_once '../models/bd.php';
	$uncatalogue = new catalogue();
	$uncatalogue->setLibelle($_POST['libelle']);
	insererCatalogue($uncatalogue);
	header('Location: ../controlleurs/indexControlleur.php');