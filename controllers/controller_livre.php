<?php
	require('models/modele_livre.php');

	if ($action == 'affiche_tout') {

		$result = affiche_tout();

		$livres = [];

		while ($row = resultats_fetch_assoc($result)) {
			$row['nom'] = $row['nom'] . " De La Paille Dans Le Derche";
			$livres[] = $row;
		}
		include('views/livre/affiche_tout_livre.php');

	} elseif ($action == 'affiche') {

		$result = affiche($id);
		$livre = resultats_fetch_assoc($result);
		$livre['nom'] = $livre['nom'] . " De La Paille Dans Le Derche";

		include('views/livre/affiche_livre.php');

	} elseif ($action == 'supprime') {
		
		$result = supprime($id);
		if ($result) {
			include('views/livre/supprime_livre.php');
		}

	} elseif ($action == 'modifie') {
		
		include('views/livre/modifie_livre.php');

	} elseif ($action == 'ajoute') {

		include('views/livre/ajoute_livre.php');

	} elseif ($action == 'ajoute_from_formulaire') {

		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];

		$result = ajoute($nom,$prenom);
		if ($result) {
			include('views/livre/ajoute_ok.php');
		}

	} elseif ($action == 'modifie_from_formulaire') {

		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];

		$result = modifie($id, $nom, $prenom);

		if ($result) {
			include('views/livre/modifie_ok.php');
		}
		
	}

?>