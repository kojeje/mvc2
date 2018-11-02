<?php require('views/template.php'); ?>

<?php haut(); ?>

    <h1>Listing des livres</h1>
    <table>
     <tr><th>Nom</th><th>Prénom</th><th>Voir la fiche</th><th>Supprimer</th><th>Modifier</th></tr>

    <?php
    // Pour chaque livre, traité par le controleur, j'affiche ce qu'il me faut
    foreach ($livres as $livre) {

        echo "\t<tr>\n";
        printf("\t\t<td> %s </td>\n", $livre['nom']);
        printf("\t\t<td> %s </td>\n", $livre['prenom']);
        echo "<td><a href='index.php?model=livre&action=affiche&id=".$livre['id']."'>Voir la fiche</a></td>";
        echo "<td><a href='index.php?model=livre&action=supprime&id=".$livre['id']."'>Suppr.</a></td>";
        echo "<td><a href='index.php?model=livre&action=modifie&id=".$livre['id']."'>Modif.</a></td>";
        echo "\t</tr>\n";
    }
    ?>

    </table>

    <a href="index.php?modele=livre&action=ajoute">Créer un livre</a>

<?php bas(); ?>