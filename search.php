<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Recherche !</title>
    <link rel="stylesheet" href="search.css" media="screen" title="no title">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

  </head>
  <body>
    <?php
    include 'headerindex.php';
    include 'connectsql/pdoconnect.php';
    $search = $_POST['search'];
    $query = $pdo->prepare("SELECT * FROM posts WHERE pseudo AND title OR  content LIKE '%$search%'  LIMIT 0 , 10");
    $query->bindValue(1, "%$search%", PDO::PARAM_STR);
    $query->execute();
             if (!$query->rowCount() == 0) {
                 echo "<div class='search'><h4>Résultat trouvé :</h4>";
                 while ($results = $query->fetch()) {
                     echo "<div class='search'><p>";
                     echo $results['title'];
                     echo '</p>';
                     echo '<br><br>';
                     echo $results['content'];
                     echo '<br><br>';
                     echo '<p>Auteur : <i>',$results['pseudo'], '</i></p>';
                     echo '</div>';
                 }
                 echo '</table>';
             } else {
                 echo "<div class='search'>Nous n'avons rien trouvé..</div>";
             }
    ?>

  </body>
</html>
