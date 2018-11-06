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

//        A quoi sert exactement $link ???????????????????????????
    deconnexion_serveur_bd($link);
}

//TOUT AFFICHER

function affiche_tout() {

//  déclaration de la fonction connecte dans $lien
	$lien = connecte();
//Déclaration de la requete dans $query
	$query = 'SELECT id, nom, prenom, date_naissance FROM auteur';
	return requete_bd($query, $lien);
}

//Afficher l'auteur choisi'

function affiche($auteur) {
//  déclaration de la fonction connecte dans $lien
	$lien = connecte();
//Déclaration de la requete dans $query
	$query = 'SELECT id, nom, prenom, date_naissance FROM auteur WHERE id = '.$auteur.' LIMIT 1';
	return requete_bd($query, $lien);
}

function ajoute($nom, $prenom, $date_naissance) {
//  déclaration de la fonction connecte dans $lien
	$lien = connecte();

//Déclaration de la requete dans $query (INSERT TO)

//                                              ?!!!!!? NE FONCTIONNE PAS CHEZ MOI ?!!!!!?

	$query = 'INSERT INTO auteur(null, "nom", "prenom", "date_naissance") VALUES (\"'.$nom.'\",\"'.$prenom.'\",\"'.$date_naissance.'\")';

//connexion à la bdd et retour de la requete
	return requete_bd($query, $lien);
}

function modifie($auteur, $nom, $prenom, $date_naissance) {
//  déclaration de la fonction connecte dans $lien
	$lien = connecte();

    //Déclaration de la requete dans $query (UPDATE FROM)

    //                                              ?!!!!!? NE FONCTIONNE PAS CHEZ MOI ?!!!!!?
	$query = 'UPDATE FROM auteur SET nom = \"'.$nom.'\", prenom = \"'.$prenom.'\", date_naissance = \"'.$date_naissance.'\" WHERE id = '. $auteur;

    //connexion à la bdd et retour de la requete
    return requete_bd($query, $lien);
}

function supprime($auteur) {

//  déclaration de la fonction connecte dans $lien
	$lien = connecte();

    //Déclaration de la requete dans $query (DELETE FROM)
	$query = 'DELETE FROM auteur WHERE id = '.$auteur;
	return requete_bd($query, $lien);
}

?>