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
	$query = 'SELECT id, titre,auteur_id, annee, resume FROM livre';
	return requete_bd($query, $lien);
}

function affiche($livre) {
	$lien = connecte();
	$query = 'SELECT id, titre, auteur_id, annee, resume, date_emprunt, lecteur_id FROM livre WHERE id = '.$livre.' LIMIT 1';
	return requete_bd($query, $lien);
}

function ajoute($titre, $prenom, $date_naissance) {
	$lien = connecte();
	$query = 'INSERT INTO livre("titre", "prenom", "date_naissance") VALUES (\"'.$titre.'\",\"'.$prenom.'\",\"'.$date_naissance.'\")';
	return requete_bd($query, $lien);
}

function modifie($livre, $nom, $prenom, $date_naissance) {
	$lien = connecte();
	$query = 'UPDATE FROM livre SET nom = \"'.$nom.'\", prenom = \"'.$prenom.'\", date_naissance = \"'.$date_naissance.'\" WHERE id = '. $livre;
	return requete_bd($query, $lien);
}

function supprime($livre) {
	$lien = connecte();
	$query = 'DELETE FROM livre WHERE id = '.$livre;
	return requete_bd($query, $lien);
}

?>