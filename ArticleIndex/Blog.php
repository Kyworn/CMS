<?php

class Blog
{
    private $title;
    public $articles;
    public $comments;

    public function __construct(array $articles, $comments)
    {
        $this->articles = $articles;
        $this->comments = $comments;
    }

    public function afficheArticleList(): String
    {
        $Arenderer = new ArticleRenderer();
        return $Arenderer->render($this->articles);
    }

    public function afficheArticle(int $articleId): String
    {
        $selectedArticle = current( array_filter( $this->articles,
            function($article) use($articleId) {
                return $article->id == $articleId;
            }));
        $Arenderer = new ArticleRenderer();
        return $Arenderer->render($selectedArticle);
    }



    public function afficheCommentList(): String
    {
        $articleLinks = array_map(function($comment){
            return $comment->commentaire;
        }, $this->comments);

        return join("<hr/>", $articleLinks);
    }

    public function afficheComment(int $commentIdb): String
    {
        $selectedComment = current( array_filter( $this->comments,
            function($comment) use($commentIdb) {
                return $comment->idb == $commentIdb;
            }));
        $Crenderer = new CommentRenderer($selectedComment);
        return $Crenderer->render();
    }




    public function getTitle(){
        return $this->title;
    }

}
