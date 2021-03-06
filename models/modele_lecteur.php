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
	$query = 'SELECT id, nom, prenom FROM livre';
	return requete_bd($query, $lien);
}

function affiche($livre) {
	$lien = connecte();
	$query = 'SELECT id, nom, prenom FROM livre WHERE id = '.$livre.' LIMIT 1';
	return requete_bd($query, $lien);
}

function ajoute($nom, $prenom, $date_naissance) {
	$lien = connecte();
	$query = 'INSERT INTO livre("nom", "prenom" VALUES (\"'.$nom.'\",\"'.$prenom.'\")';
	return requete_bd($query, $lien);
}

function modifie($livre, $nom, $prenom, $date_naissance) {
	$lien = connecte();
	$query = 'UPDATE FROM livre SET nom = \"'.$nom.'\", prenom = \"'.$prenom.'\" WHERE id = '. $livre;
	return requete_bd($query, $lien);
}

function supprime($livre) {
	$lien = connecte();
	$query = 'DELETE FROM livre WHERE id = '.$livre;
	return requete_bd($query, $lien);
}

?>