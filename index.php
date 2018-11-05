<?php
//    à l'ouverture de index.php il cherche les valeurs auteur et action.
//     la première fois ces valeurs sont vides, dans ce cas il les définit d'office à 'model' et 'affiche tout';
$modele = empty($_GET['model']) ? 'auteur' : $_GET['model'];
//              ???????????????
$action = empty($_GET['action']) ? 'affiche_tout' : $_GET['action'];
//          ???????????
$id = empty($_GET['id']) ? '' : $_GET['id'];

// include tous les fichiers
include('config/config.php');
include('models/modele.php');
include('controllers/controller'.$modele.'.php');

?>