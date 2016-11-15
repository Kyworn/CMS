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
    $reponse = $pdo->query('SELECT id, pseudo, content, timedate FROM posts ORDER BY timedate DESC  ');


    while ($donnees = $reponse->fetch())
    {
        echo "<p>$donnees[pseudo] <br>$donnees[timedate]";
        echo " <br>$donnees[content] </p>";
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
