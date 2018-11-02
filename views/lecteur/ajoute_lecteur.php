<?php require('views/template.php'); ?>

<?php haut(); ?>

    <h1>Ajout d'un lecteur</h1>

    <form action="index.php?model=lecteur&action=ajoute_from_formulaire" method="post">
        <div>
            <label for="nom">Nom</label>
            <input name="nom" type="text" />
        </div>
        <div>
            <label for="prenom">Prénom</label>
            <input name="prenom" type="text" />
        </div>

        <div>
            <input type="submit" value="créer" />
        </div>
    </form>

<?php bas(); ?>