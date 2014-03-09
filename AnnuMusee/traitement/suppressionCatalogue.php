<?php
require_once '../models/bd.php';
supprimerCatalogue($_POST['id']);
header('Location: ../controlleurs/indexControlleur.php');