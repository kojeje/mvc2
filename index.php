<?php
//    à l'ouverture de index.php il cherche les valeurs auteur et action.
//     la première fois ces valeurs sont vides, dans ce cas il les
// définit d'office à 'model' et 'affiche tout';


// ???????????jer   Oui mais 'model' qu'est-ce que c concretement...????????

//   $modele decide du controller (ici 'auteur' par defaut)
    $modele = empty($_GET['model']) ? 'auteur' : $_GET['model'];

    $action = empty($_GET['action']) ? 'affiche_tout' : $_GET['action'];

    $id = empty($_GET['id']) ? '' : $_GET['id'];

// include tous les fichiers
//    récupérer les constantes
    include('config/config.php');
//    recup fonctions de  connexion, sql, requete, etc.
    include('models/modele.php');
//    recup du controller_auteur.php ou autre si definit plus haut
    include('controllers/controller_'.$modele.'.php');

