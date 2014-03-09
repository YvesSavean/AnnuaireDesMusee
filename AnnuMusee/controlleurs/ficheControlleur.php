<?php
	require_once '../models/bd.php';
	$musee = getMusee($_GET['id']);
	require '../templates/fiche.php';