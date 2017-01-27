 <?php
 spl_autoload_register(function($classname){
     require_once "ArticleIndex/".$classname.".php";
 });
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
       $articlesLoad = new ArticleDBLoad('localhost','blogname','root','');
       $articles = $articlesLoad->loadArticle('articles');
       $commentsLoad = new CommentDBLoad('localhost','blogname','root','');
       $comments = $commentsLoad->loadComment('comments');
       $blog = new Blog($articles, $comments);
       ?>
     <?= isset($_GET['articleId']) ? $blog->afficheArticle($_GET['articleId']) : $blog->afficheArticleList(); ?>
     <?= isset($_GET['commentIdb']) ? $blog->afficheComment($_GET['commentIdb']) : $blog->afficheCommentList();?>
     </div>
 <br>
 <br>
   <footer class="footer"><?php echo $blogname ;?></footer>
   </body>
 </html>
