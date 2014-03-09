<?php
	require_once '../models/bd.php';
	supprimerFiche($_POST['idFiche']);
	header('Location: ../controlleurs/catalogueControlleur.php?id='.$_POST['idControlleur']);