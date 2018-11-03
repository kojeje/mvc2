<?php

$modele = empty($_GET['model']) ? 'auteur' : $_GET['model'];
$action = empty($_GET['action']) ? 'affiche_tout' : $_GET['action'];
$id = empty($_GET['id']) ? '' : $_GET['id'];

// include tous les fichiers
include('config/config.php');
include('models/modele.php');
include('controllers/controller'.$modele.'.php');

?>