  <?php

  class Blog
  {
      public $title;
      public $articles;
      public function __construct(String $title, array $articles)
      {
          $this->title = $title;
          $this->articles = $articles;
      }
      function displayHeader(): String
      {
          return "<h1>$this->title</h1>";
      }
      public function displayArticleList(): String
      {
          $articleLinks = array_map(function($article){
              return "<a href=\"".$_SERVER['PHP_SELF']."?articleId="
                  .$article->id."\">$article->title</a>";
          }, $this->articles);

          return join("<hr/>", $articleLinks);
      }
      public function displayArticle(int $articleId): String
      {
          $selectedArticle = current( array_filter( $this->articles,
              function($article) use($articleId) {
                  return $article->id == $articleId;
              }));
          $renderer = new ArticleRenderer($selectedArticle);

          return $renderer->render();
      }
  }
  $articlesLoad = new BlogDBLoad('localhost','blogname','root','');
  $articles = $articlesLoad->load('articles');

  $blog = new Blog("", $articles);
  ?>
  
