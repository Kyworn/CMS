<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({
  selector: 'textarea',
  height:'10em' ,
  width:'50em' ,
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
  </head>
  <body>
    <?php
    include 'connectsql/pdoconnect.php';
    if(isset($_SESSION['pseudo']))  {
      echo '
        <form action="insertcom.php" method="post">
          <h4>Contenu du commentaire</h4>
          <br>
          <textarea name="commentaire">
          </textarea>
          <input class="btn waves-effect waves-light" class="material-icons right" type="submit" value="Envoyé" name="submit"/>

        </form>

    ';
         }
         else {
              echo '';
         }


    ?>


   </form>
  </body>
</html>
