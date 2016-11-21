<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <link rel="stylesheet" href="admin.css" media="screen" title="no title">
    <title>Page d'Administration</title>
  </head>
  <body>
    <?php
    include '../connectsql/pdoconnect.php';
    // Je viens récuperer dans la table posts les éléments
    $sPosts = "SELECT * FROM posts";
    $rResultPosts = $pdo->query($sPosts)->fetchAll();


    $sUsers = "SELECT * FROM users";
    $rReseultUsers = $pdo->query($sUsers)->fetchAll();

    $sComment = "SELECT * FROM commentaires";
    $rReseultComment = $pdo->query($sComment)->fetchAll();

    session_start();
    if(isset($_SESSION['status']))  {
      if($_SESSION['status']  == 'Administrateur'){
        include 'headeradmin.php';
        echo('<div id="text"><div id="postNumber"><i class="material-icons" style="font-size:6em;"><a href="articlechange.php">insert_chart</a></i><p>Nombre d&apos;article : ');
        echo count($rResultPosts);
        echo('</p></div><br> <div id="postComment"><i class="material-icons" style="font-size:6em;"><a href="commentchange.php">comment</a></i><p>Nombre de commentaire : ');
        echo count($rReseultComment);
        echo('</p></div><br> <div id="postUsers"><i class="material-icons" style="font-size:6em;"><a href="changeuser.php">person_pin</a></i><p>Nombre d&apos;utilisateur : ');
        echo count($rReseultUsers);
        echo('</p></div></div>');
        }
        else {
             echo '<div style="text-align:center;margin-top:15%;"><i style="font-size:10em;" class="material-icons">report_problem</i><h4>Vous ne devriez pas être ici...</h4><h5><a href="../index.php">Cliquez ici s&apos;il vous plaît !</a></h5></div>';
        }
     }
         else {
              echo '<div style="text-align:center;margin-top:15%;"><i style="font-size:10em;" class="material-icons">report_problem</i><h4>Vous ne devriez pas être ici...</h4><h5><a href="../index.php">Cliquez ici s&apos;il vous plaît !</a></h5></div>';
         }
   ?>




   </form>
   <footer class="footer"><?php echo $blogname ;?></footer>
  </body>
</html>
