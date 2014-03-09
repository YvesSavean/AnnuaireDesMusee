<?php
	require_once '../models/bd.php';
	$musee = getMusee($_POST['id']);
	require '../templates/traitmodification.php';