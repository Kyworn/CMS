<?php
  class Article
{
    public $id;
    public $title;
    public $content;
    public $author;
    public $publicationDate;

    public function __construct(int $id, String $title, String $content, Author $author, DateTime $date)
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->publicationDate = $date;
        $this->author = $author;
    }
}
class ArticleRenderer
{
    private $article;
    public function __construct(Article $article)
    {
        $this->article = $article;
    }
    function render(): String
    {
        return "<h2>".$this->article->title."</h2><p>"
            ." le ".$this->article->publicationDate->format('d-m-Y')."<br><br>"
            .$this->article->content."</p><p>"
            .$this->article->author->getShortName()
            ." </p>";
    }
}
 ?>
