<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
  </head>
  <body>
    <?php
    include 'connectsql/pdoconnect.php';
    if(isset($_SESSION['pseudo']))  {
      echo '
        <form action="" method="post">
          <h5>Contenu du commentaire</h5><p>255 caractères</p>
          <br>
          <textarea id="icon_prefix2" name="commentaire" class="materialize-textarea"></textarea>

          <input class="btn waves-effect waves-light" class="material-icons right" type="submit" value="Envoyé" name="submit"/>

        </form>

    ';
         }
         else {
              echo '';
         }


    ?>
    <?php
    include 'insertcom.php'
    ?>


</html>
