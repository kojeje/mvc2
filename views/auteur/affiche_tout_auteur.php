<?php require('views/template.php'); ?>

<?php haut(); ?>

    <h1>Listing des auteurs</h1>
    <table>
     <tr><th>Nom</th><th>Prénom</th><th>Date de naissance</th><th>Voir la fiche</th><th>Supprimer</th><th>Modifier</th></tr>

    <?php
    // Pour chaque auteur, traité par le controleur, j'affiche ce qu'il me faut
    foreach ($auteurs as $auteur) {

        echo "\t<tr>\n";
        printf("\t\t<td> %s </td>\n", $auteur['nom']);
        printf("\t\t<td> %s </td>\n", $auteur['prenom']);
        printf("\t\t<td> %s </td>\n", $auteur['date_naissance']);
        echo "<td><a href='index.php?model=auteur&action=affiche&id=".$auteur['id']."'>Voir la fiche</a></td>";
        echo "<td><a href='index.php?model=auteur&action=supprime&id=".$auteur['id']."'>Suppr.</a></td>";
        echo "<td><a href='index.php?model=auteur&action=modifie&id=".$auteur['id']."'>Modif.</a></td>";
        echo "\t</tr>\n";
    }
    ?>

    </table>

    <a href="index.php?modele=auteur&action=ajoute">Créer un auteur</a>

<?php bas(); ?>