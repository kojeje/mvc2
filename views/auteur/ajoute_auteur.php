<?php require('views/template.php'); ?>

<?php haut(); ?>

    <h1>Ajout d'un auteur</h1>

    <form action="index.php?model=auteur&action=ajoute_from_formulaire" method="post">
        <div>
            <label for="nom">Nom</label>
            <input name="nom" type="text" />
        </div>
        <div>
            <label for="prenom">Prénom</label>
            <input name="prenom" type="text" />
        </div>
        <div>
            <label for="date_naissance">Date de naissance</label>
            <input name="date_naissance" type="date" />
        </div>

        <div>
            <input type="submit" value="créer" />
        </div>
    </form>

<?php bas(); ?>