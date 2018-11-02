<?php require('views/template.php'); ?>

<?php haut(); ?>

    <h1>Affichage du livre <?php echo $livre['nom']; ?></h1>

    <?php
        printf("\t\t<td> %s </td>\n", $livre['nom']);
        printf("\t\t<td> %s </td>\n", $livre['prenom']);
    ?>

    </table>

<?php bas(); ?>