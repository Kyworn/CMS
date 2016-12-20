 <?php
 include 'blog/BlogDbLoad.php';
 include 'blog/Author.blog.php';
 include 'blog/Article.php';
 include 'blog/blog.php';
 session_start();
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <link rel="shortcut icon" href="logo.png">
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
     <?= isset($_GET['articleId']) ? $blog->displayArticle($_GET['articleId']) : $blog->displayArticleList(); ?>
     </div>
 <br>
 <br>
   <footer class="footer"><?php echo $blogname ;?></footer>
   </body>
 </html>
