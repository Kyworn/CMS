  <?php

  class Blogj
  {
      public $title;
      public $articles;
      public $comments;
      public function __construct(array $articles, $comments)
      {
          $this->articles = $articles;
          $this->comments = $comments;
      }
      public function afficheArticleList(): String
      {
          $articleLinks = array_map(function($article){
              return "<h3><a href=\"".$_SERVER['PHP_SELF']."?articleId=".$article->id."\">$article->title</a></h3>
              $article->content";
            }, $this->articles);

          return join("<hr/>", $articleLinks);
      }
      public function afficheArticle(int $articleId): String
      {
          $selectedArticle = current( array_filter( $this->articles,
              function($article) use($articleId) {
                  return $article->id == $articleId;
          }));
          $Arenderer = new ArticleRenderer($selectedArticle);
          return $Arenderer->render();
      }


      public function afficheComment(int $commentIdb): String
      {
          $selectedComment = current( array_filter( $this->comments,
              function($comment) use($commentIdb) {
              return $comment->idb == $articleIdb;
          }));
          $Crenderer = new CommentRenderer($selectedComment);
          return $Crenderer->render();
      }
  }
  $articlesLoad = new ArticleDbLoad('localhost','blogname','root','');
  $articles = $articlesLoad->loadArticle('articles');
  $commentsLoad = new CommentDBLoad('localhost','blogname','root','');
  $comments = $commentsLoad->loadComment('comments');
  $blog = new Blog($articles, $comments);
