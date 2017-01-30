<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon blog</title>
        <link rel="stylesheet" href="index.css" media="screen" title="no title">
        <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

    </head>

    <body>

<?php
session_start();
try
{
  include 'connectsql/pdoconnect.php';
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $pdo->prepare('SELECT id, title, content, pseudo, DATE_FORMAT(timedate, \'%d/%m/%Y à %H:%i\') AS timedate FROM posts WHERE id = ?');
$reponse->execute(array($_GET['article']));
$donnees = $reponse->fetch();
?>
<?php include  'headerindex.php';  ?>

  <div class="contenu">
    <p><a href="index.php">Retour à la liste des articles</a></p>

<div class="news">

      <h2><?php echo ($donnees['title']); ?></h2>
       Le <?php echo $donnees['timedate']; ?>
       <br>
       <br>
       <br>
    <p>
    <?php
    echo ($donnees['content']);
    ?>
    </p>
</div>

<h5>Commentaires</h5>


<?php
$reponse->closeCursor();
$reponse = $pdo->prepare('SELECT auteur, commentaire, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %H:%i\') AS date_commentaire_fr FROM commentaire WHERE idb = ? ORDER BY date_commentaire');
$reponse->execute(array($_GET['article']));

while ($donnees = $reponse->fetch())
{
?>
<p><strong><?php echo ($donnees['auteur']); ?></strong> le <?php echo $donnees['date_commentaire_fr']; ?></p>
<p><?php echo ($donnees['commentaire']); ?></p>
<?php
}
$reponse->closeCursor();
?>
<?php include 'newcom.php';
 ?>


</div>
</body>
</html>
