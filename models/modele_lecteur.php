<?php

function connecte() {
	// Connexion et sélection de la base de données
	$lien = connexion_serveur_bd(SERVERNAME, USER, PASSWORD, DATABASE);
	set_utf8_bd($lien);
	return $lien;
}

function deconnecte() {
	// Fermeture de la connexion à la base de données
	deconnexion_serveur_bd($link);
}


function affiche_tout() {
	$lien = connecte();
	$query = 'SELECT id, nom, prenom FROM lecteur';
	return requete_bd($query, $lien);
}

function affiche($lecteur) {
	$lien = connecte();
	$query = 'SELECT id, nom, prenom FROM lecteur WHERE id = '.$lecteur.' LIMIT 1';
	return requete_bd($query, $lien);
}

function ajoute($nom, $prenom, $date_naissance) {
	$lien = connecte();
	$query = 'INSERT INTO lecteur("nom", "prenom" VALUES (\"'.$nom.'\",\"'.$prenom.'\")';
	return requete_bd($query, $lien);
}

function modifie($lecteur, $nom, $prenom, $date_naissance) {
	$lien = connecte();
	$query = 'UPDATE FROM lecteur SET nom = \"'.$nom.'\", prenom = \"'.$prenom.'\" WHERE id = '. $lecteur;
	return requete_bd($query, $lien);
}

function supprime($lecteur) {
	$lien = connecte();
	$query = 'DELETE FROM lecteur WHERE id = '.$lecteur;
	return requete_bd($query, $lien);
}

?>