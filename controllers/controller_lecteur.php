<?php
	require('../models/modele_lecteur.php');

	if ($action == 'affiche_tout') {

		$result = affiche_tout();

		$lecteurs = [];

		while ($row = resultats_fetch_assoc($result)) {
			$row['nom'] = $row['nom'] . " De La Paille Dans Le Derche";
			$lecteurs[] = $row;
		}
		include('../views/lecteur/affiche_tout_lecteur.php');

	} elseif ($action == 'affiche') {

		$result = affiche($id);
		$lecteur = resultats_fetch_assoc($result);
		$lecteur['nom'] = $lecteur['nom'] . " De La Paille Dans Le Derche";

		include('../views/lecteur/affiche_lecteur.php');

	} elseif ($action == 'supprime') {
		
		$result = supprime($id);
		if ($result) {
			include('../views/lecteur/supprime_lecteur.php');
		}

	} elseif ($action == 'modifie') {
		
		include('../views/lecteur/modifie_lecteur.php');

	} elseif ($action == 'ajoute') {

		include('../views/lecteur/ajoute_lecteur.php');

	} elseif ($action == 'ajoute_from_formulaire') {

		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];

		$result = ajoute($nom,$prenom);
		if ($result) {
			include('../views/lecteur/ajoute_ok.php');
		}

	} elseif ($action == 'modifie_from_formulaire') {

		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];

		$result = modifie($id, $nom, $prenom);

		if ($result) {
			include('../views/lecteur/modifie_ok.php');
		}
		
	}

?>