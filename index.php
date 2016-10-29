<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="shortcut icon" href="logo.png">
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css" media="screen" title="no title">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <title>Accueil</title>
  </head>
  <body>
      <?php include  'headerindex.php';  ?>
  <div class="contenu">
    <?php
    try
    {
        include 'connectsql/pdoconnect.php';
    $reponse = $pdo->query('SELECT title, content, pseudo FROM posts');

    while ($donnees = $reponse->fetch())
    {
        echo "</tr>";
        echo "<h1> $donnees[title] </h1>";
        echo "<p> $donnees[content] </p>";
        echo "<p>Auteur : $donnees[pseudo] </p>";

        echo "</tr>";
    }
    $reponse->closeCursor();
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }


    ?>

    </div>
<br>
<br>
  <footer class="footer">Footer Blogname</footer>
  </body>
</html>
