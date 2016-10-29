<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <link rel="stylesheet" href="admin.css" media="screen" title="no title">
    <script src="//cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
    <title>Page d'Administration</title>
  </head>
  <body>
    <?php
    session_start();
    include '../connectsql/pdoconnect.php';
    include 'headeradmin.php';
    if(isset($_SESSION['pseudo']))  {
      echo '

  <div id="text">
  <form action="insert.php" method="post">
  <textarea name="title" id="editor2" rows="10" cols="80">
             </textarea>
             <script>
                 CKEDITOR.replace( "editor2" );
             </script>
  <textarea name="content" id="editor1" rows="10" cols="80">
             </textarea>
             <script>
                 CKEDITOR.replace( "editor1" );
             </script>
  <input class="btn waves-effect waves-light" class="material-icons right" type="submit" value=" Envoyé" name="submit"/><a><br />
  </form>
  </div>
';
         }
         else {
              echo '  <div style="text-align:center;margin-top:15%;">
              <i style="font-size:10em;" class="material-icons">report_problem</i>
              <h4>Vous ne devriez pas être ici...</h4>
              <h5><a href="index.php">Cliquez ici s&apos;il vous plaît !</a></h5></div>';
         }
   ?>


   </form>
  </body>
</html>
