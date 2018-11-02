<?php require('views/template.php'); ?>

<?php haut(); ?>

    <h1>Affichage de l'auteur <?php echo $auteur['nom']; ?></h1>

    <?php
        printf("\t\t<td> %s </td>\n", $auteur['nom']);
        printf("\t\t<td> %s </td>\n", $auteur['prenom']);
        printf("\t\t<td> %s </td>\n", $auteur['date_naissance']);
    ?>

    </table>

<?php bas(); ?>