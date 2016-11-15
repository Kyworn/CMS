<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gestion des Utilisateurs</title>
    <link rel="stylesheet" href="admin.css" media="screen" title="no title">

  </head>
  <body>
    <?php include 'headeradmin.php'; ?>

<div class="contenu">
    <?php
    try
    {
        include '../connectsql/pdoconnect.php';
    $reponse = $pdo->query('SELECT idb, auteur, commentaire FROM commentaires ORDER BY idb  ');


    while ($donnees = $reponse->fetch())
    {
        echo "<p>$donnees[auteur]";
        echo " <br>$donnees[commentaire] </p>";
        ?>
        <?php
    }
    $reponse->closeCursor();
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }


    ?>
</div>
  </body>
</html>
