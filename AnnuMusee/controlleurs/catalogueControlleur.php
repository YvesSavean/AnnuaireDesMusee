<?php
	require_once '../models/bd.php';
	require_once '../Bean/catalogue.class.php';
	require_once '../Bean/musee.class.php';
	
	$catalogue = getUnCatalogue($_GET['id']);
	require '../templates/ficheCatalogue.php';