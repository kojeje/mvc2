<?php require('views/template.php'); ?>

<?php haut(); ?>

    <h1>Affichage du lecteur <?php echo $lecteur['nom']; ?></h1>

    <?php
        printf("\t\t<td> %s </td>\n", $lecteur['nom']);
        printf("\t\t<td> %s </td>\n", $lecteur['prenom']);
    ?>

    </table>

<?php bas(); ?>