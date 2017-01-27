<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="shortcut icon" href="img/logo.png">
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css" media="screen" title="no title">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

    <title>Accueil</title>
  </head>
  <body>
      <?php include  'headerindex.php';
      include 'info.php';?>
  <div class="contenu">
    <?php
    try
    {
        include 'connectsql/pdoconnect.php';
    $reponse = $pdo->query('SELECT id, title, content, pseudo, timedate FROM posts ORDER BY timedate DESC');

    while ($donnees = $reponse->fetch())
    {
        echo "<span><h3> $donnees[title] </h3><p>$donnees[timedate]</p></span>";
        echo "<p> $donnees[content] </p>";
        echo "<p>Auteur : $donnees[pseudo]  </p>";
        ?>
        <a href="article.php?article=<?php echo $donnees['id']; ?>">Commentaires</a>
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
<br>
<br>
  <footer class="footer"><?php echo $blogname ;?></footer>
  </body>
</html>
