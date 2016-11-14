<?php

/*
 * Code permettant de se connecter à pdo soit :
 * Notre base de donnée
 */

try
{
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=localhost; dbname=test', 'admin', '', $pdo_options);
}
catch (Exception $error) // Souvent la variable est appelé : $e
{
    die ('Erreur : ' . $error->getMessage()); 
}


/* 
 * La balise de fermeture de PHP étant obsolète ici, 
 * je ne l'inscrit volontairement pas sachant que le fichier connect.php 
 * est entièrement écrit en PHP 
 */