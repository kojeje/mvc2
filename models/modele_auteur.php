<?php

//LISTE DES FUNCTIONS POUR AUTEUR

    function connecte() {
    // Connexion et sélection de la base de données
    $lien = connexion_serveur_bd(SERVERNAME, USER, PASSWORD, DATABASE);
//    encodage des caractères
    set_utf8_bd($lien);

    return $lien;
}

    function deconnecte() {
    // Fermeture de la connexion à la base de données
    deconnexion_serveur_bd($link);
}

//TOUT AFFICHER

function affiche_tout() {
	$lien = connecte();
	$query = 'SELECT id, nom, prenom, date_naissance FROM auteur';
	return requete_bd($query, $lien);
}


function affiche($auteur) {
	$lien = connecte();
	$query = 'SELECT id, nom, prenom, date_naissance FROM auteur WHERE id = '.$auteur.' LIMIT 1';
	return requete_bd($query, $lien);
}

function ajoute($nom, $prenom, $date_naissance) {
	$lien = connecte();
	$query = 'INSERT INTO auteur("nom", "prenom", "date_naissance") VALUES (\"'.$nom.'\",\"'.$prenom.'\",\"'.$date_naissance.'\")';
	return requete_bd($query, $lien);
}

function modifie($auteur, $nom, $prenom, $date_naissance) {
	$lien = connecte();
	$query = 'UPDATE FROM auteur SET nom = \"'.$nom.'\", prenom = \"'.$prenom.'\", date_naissance = \"'.$date_naissance.'\" WHERE id = '. $auteur;
	return requete_bd($query, $lien);
}

function supprime($auteur) {
	$lien = connecte();
	$query = 'DELETE FROM auteur WHERE id = '.$auteur;
	return requete_bd($query, $lien);
}

?>