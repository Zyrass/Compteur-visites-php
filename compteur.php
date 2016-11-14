<?php

require ('connect.php'); // Nécessite le fichier connect.php pour fonctionner

/*
 * Requête MySQL : UPDATE compteur -> Mettre à jour la table compteur 
 * Requête MySQL : SET visiteur -> On sélectionne le CHAMP visiteur (colonne visiteur)
 * Requête MySQL : visiteur +1 -> Permet l'ajout d'un visiteur à chaque rafraîchissement
 * ----------------------------------------------------------------------------------------------
 * A savoir, j'utilise la variable $ask, par convention, c'est la variable $req qui est utilisée.
 *
 */
$ask = $bdd->prepare('UPDATE compteur SET visiteur = visiteur +1');
$ask->execute();
$ask->closeCursor();

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Compteurs de visites en PHP</title>
        <meta name="description" content="Conception d'un compteur de visites en PHP">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS -->
        <link rel="stylesheet" href="myStyle.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div id="content">
            <div id="result">
                
                <?php

                    /*
                     * Requête MySQL : SELECT visiteur -> Permet de selectionner le champ visiteur (colonne visiteur)
                     * Requête MySQL : FROM compteur -> De la table compteur
                     * ----------------------------------------------------------------------------------------------
                     * $data -> C'est la variable ou est stocké le résultat attendu
                     */

                    $ask = $bdd->prepare('SELECT visiteur FROM compteur');
                    $ask-> execute();
                    $data = $ask->fetch(PDO::FETCH_OBJ);
                    $ask-> closeCursor();

                ?>

                <?php
                    // On affiche enfin le résultat à l'écran
                    echo $data-> visiteur; 
                ?>

            </div>
        </div>
    </body>
</html>