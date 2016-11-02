<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <link rel="stylesheet" href="admin.css" media="screen" title="no title">
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({
  selector: 'textarea',
  height:'10em' ,
  language : 'en',
  plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste imagetools"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
  imagetools_cors_hosts: ['www.tinymce.com', 'codepen.io'],
  content_css: [
    '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
    '//www.tinymce.com/css/codepen.min.css'
  ]
});</script>
    <title>Page d'Administration</title>
  </head>
  <body>
    <?php
    session_start();
    include '../connectsql/pdoconnect.php';
    if(isset($_SESSION['pseudo']))  {
      if($_SESSION['status']  == 'Administrateur'){
      include 'headeradmin.php';
      echo '
      <div id="text">
        <form action="insert.php" method="post">
        <div class="edit"><h1>Titre de l&apos;article </h1></div>
          <textarea name="title">
          </textarea>
          <div class="edit"><h3>Contenu de l&apos;article</h3></div>
          <br>
          <textarea name="content">
          </textarea>
            <input class="btn waves-effect waves-light" class="material-icons right" type="submit" value="Envoyé" name="submit"/><a><br />
        </form>
      </div>
';
         }
         else {
              echo '<div style="text-align:center;margin-top:15%;"><i style="font-size:10em;" class="material-icons">report_problem</i><h4>Vous ne devriez pas être ici...</h4><h5><a href="../index.php">Cliquez ici s&apos;il vous plaît !</a></h5></div>';
         }
       }
         else {
              echo '
              <div style="text-align:center;margin-top:15%;">
                <i style="font-size:10em;" class="material-icons">report_problem</i>
                <h4>Vous ne devriez pas être ici...</h4>
                <h5><a href="index.php">Cliquez ici s&apos;il vous plaît !</a></h5>
              </div>';
         }
   ?>


   </form>
  </body>
</html>
