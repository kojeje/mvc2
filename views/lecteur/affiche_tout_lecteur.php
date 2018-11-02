<?php require('views/template.php'); ?>

<?php haut(); ?>

    <h1>Listing des lecteurs</h1>
    <table>
     <tr><th>Nom</th><th>Prénom</th><th>Voir la fiche</th><th>Supprimer</th><th>Modifier</th></tr>

    <?php
    // Pour chaque lecteur, traité par le controleur, j'affiche ce qu'il me faut
    foreach ($lecteurs as $lecteur) {

        echo "\t<tr>\n";
        printf("\t\t<td> %s </td>\n", $lecteur['nom']);
        printf("\t\t<td> %s </td>\n", $lecteur['prenom']);
        echo "<td><a href='index.php?model=lecteur&action=affiche&id=".$lecteur['id']."'>Voir la fiche</a></td>";
        echo "<td><a href='index.php?model=lecteur&action=supprime&id=".$lecteur['id']."'>Suppr.</a></td>";
        echo "<td><a href='index.php?model=lecteur&action=modifie&id=".$lecteur['id']."'>Modif.</a></td>";
        echo "\t</tr>\n";
    }
    ?>

    </table>

    <a href="index.php?modele=lecteur&action=ajoute">Créer un lecteur</a>

<?php bas(); ?>