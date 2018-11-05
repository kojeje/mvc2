<?php
//    Appelle les fonctions du fichier  modele_auteur.php

	require('models/modele_auteur.php');

	if ($action == 'affiche_tout') {

//	    utilisation de la fonction affiche_tout dans madele_auteur.php
		$result = affiche_tout();


		$auteurs = [];

		while ($row = resultats_fetch_assoc($result)) {
//		    formatage date
			$row['date_naissance'] = date('d/m/Y', strtotime($row['date_naissance']));
//			Concatenation sur 'nom'
			$row['nom'] = $row['nom'] . " De La Paille Dans Le Fion";
//			Création liste
			$auteurs[] = $row;
		}

//		afficher le resultat de 'affiche_tout_auteur.php'
		include('views/auteur/affiche_tout_auteur.php');

	} elseif ($action == 'affiche') {

		$result = affiche($id);
		$auteur = resultats_fetch_assoc($result);
		$auteur['nom'] = $auteur['nom'] . " De La Paille Dans Le Fion";

		include('views/auteur/affiche_auteur.php');

	} elseif ($action == 'supprime') {
		
		$result = supprime($id);
		if ($result) {
			include('views/auteur/supprime_auteur.php');
		}

	} elseif ($action == 'modifie') {
		
		include('views/auteur/modifie_auteur.php');

	} elseif ($action == 'ajoute') {

		include('views/auteur/ajoute_auteur.php');

	} elseif ($action == 'ajoute_from_formulaire') {

		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$date_naissance = $_POST['date_naissance'];

		$result = ajoute($nom,$prenom,$date_naissance);
		if ($result) {
			include('views/auteur/ajoute_ok.php');
		}

	} elseif ($action == 'modifie_from_formulaire') {

		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$date_naissance = $_POST['date_naissance'];

		$result = modifie($id, $nom, $prenom, $date_naissance);

		if ($result) {
			include('views/auteur/modifie_ok.php');
		}
		
	}

?>