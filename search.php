<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Recherche !</title>
    <link rel="stylesheet" href="search.css" media="screen" title="no title">
  </head>
  <body>
    <?php
    include 'headerindex.php';
    include 'connectsql/pdoconnect.php';
    $search = $_POST['search'];
    $query = $pdo->prepare("SELECT * FROM posts WHERE content AND pseudo  OR  title LIKE '%$search%'  LIMIT 0 , 10");
    $query->bindValue(1, "%$search%", PDO::PARAM_STR);
    $query->execute();
             if (!$query->rowCount() == 0) {
                 echo "<div class='search'><h1>Résultat trouvé :</h1>";
                 while ($results = $query->fetch()) {
                     echo "<div class='search'><h2>";
                     echo $results['title'];
                     echo '</h2>';
                     echo '<br><br>';
                     echo $results['content'];
                     echo '<br><br>';
                     echo '<h3>Auteur : <i>',$results['pseudo'], '</i></h3>';
                     echo '</div>';
                 }
                 echo '</table>';
             } else {
                 echo "Nous n'avons rien trouvé..";
             }
    ?>

  </body>
</html>
